<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\ContratType;
use Karudev\AppsBundle\Entity\Contrat;

class ContratController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function createAction()
    {
    	$request = $this->get('request');
    	$contrat = new Contrat();
    	$form = $this->createForm(new ContratType($this->get('security.context')),$contrat);
    	$user = $this->get('security.context')->getToken()->getUser();
    	if($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);
    		$em = $this->getDoctrine()->getManager();
    		$contrat->setIdFreelance($user->getId());
    		$contrat->setIdOwner($user->getId());
    		$contrat->setIdModified($user->getId());
    		$contrat->setDateCreated(time());
    		$contrat->setDateLastModified(time());
    		$em->persist($contrat);
    		$em->flush();
                $this->redirect($this->generateUrl('_apps_enterprise_contrat'));
    	}
    	
    	
        return array('form'=>$form->createView());
    }
 	/**
     * 
     * @Template()
     */
    public function showAction()
    {
    	$contrats = $this->getDoctrine()->getRepository('KarudevAppsBundle:Contrat')->findAll();
        return array('contrats'=>$contrats);
    }
}
