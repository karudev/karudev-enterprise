<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\ContactType;
use Karudev\AppsBundle\Entity\Contact;

class ContactController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function createAction()
    {
    	$request = $this->get('request');
    	$contact = new Contact();
    	$form = $this->createForm(new ContactType(),$contact);
    	$user = $this->get('security.context')->getToken()->getUser();
    	if($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);
    		$em = $this->getDoctrine()->getManager();
    		$contact->setIdOwner($user->getId());
    		$contact->setIdModifier($user->getId());
    		$contact->setDateCreation(time());
    		$contact->setDateLastModified(time());
    		$em->persist($contact);
    		$em->flush();
    	}
        return array( 'form' => $form->createView());
    }
    
     /**
     * 
     * @Template()
     */
    public function showAction()
    {
    	$user = $this->get('security.context')->getToken()->getUser();
    	$contacts = $this->getDoctrine()->getRepository('KarudevAppsBundle:Contact')->findBy(array('idOwner'=>$user->getId()));
        return array( 'contacts' => $contacts);
    }
}
