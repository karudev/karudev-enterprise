<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\OrganisationType;
use Karudev\AppsBundle\Entity\Organisation;

class OrganisationController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function createAction()
    {
    	$request = $this->get('request');
    	$organisation = new Organisation();
    	$form = $this->createForm(new OrganisationType(),$organisation);
    	
    	if($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);
    		$em = $this->getDoctrine()->getManager();
    		$organisation->setIdOwner(1);
    		$organisation->setIdModifier(1);
    		$organisation->setDateCreation(time());
    		$organisation->setDateLastModified(time());
    		$em->persist($organisation);
    		$em->flush();
    		return $this->redirect($this->generateUrl('_apps_enterprise_organisation'));
    	}
    	
        return array('form'=>$form->createView());
    }
    
     /**
     * 
     * @Template()
     */
    public function showAction()
    {
    	$user = $this->get('security.context')->getToken()->getUser();
    	$organisations = $this->getDoctrine()->getRepository('KarudevAppsBundle:Organisation')->findBy(array('idOwner'=>$user->getId()));
        return array( 'organisations' => $organisations);
    }
}
