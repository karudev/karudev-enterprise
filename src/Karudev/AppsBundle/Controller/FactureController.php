<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Entity\Facture;
use Karudev\AppsBundle\Form\Type\FactureType;

class FactureController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function defaultAction()
    {
    	
    	
        return array();
    }
 
      /**
     * 
     * @Template()
     */
    public function createAction()
    {
        $request = $this->get('request');
    	$facture = new Facture();
    	$form = $this->createForm(new FactureType($this->get('security.context')),$facture);
    	$user = $this->get('security.context')->getToken()->getUser();
    	if($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);
    		$em = $this->getDoctrine()->getManager();
    		$facture->setIdOwner($user->getId());
                $facture->setIdModifier($user->getId());
                $facture->setIdFreelance($user);
                $facture->setDateCreated(time());
                $facture->setDateLastModified(time());
                $em->persist($facture);
    		$em->flush();

                echo json_encode('Le facture '.date('Y',$facture->getDateCreated()). '-'. $facture->getId().' a été crée');
                die();
    	}
        return array('form'=>$form->createView());
    }
    
    /**
     * 
     * @Template()
     */
    public function showallAction()
    {
    	$user = $this->get('security.context')->getToken()->getUser();
        // \Doctrine\Common\Util\Debug::dump(new Facture(),2);die();
    	$factures = $this->getDoctrine()->getRepository('KarudevAppsBundle:Facture')->get($user->getId());
        return array( 'factures' => $factures);
    }
}
