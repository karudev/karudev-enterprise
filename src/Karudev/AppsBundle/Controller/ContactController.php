<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\ContactType;
use Karudev\AppsBundle\Form\Type\LiencontactorganisationType;
use Karudev\AppsBundle\Entity\Contact;
use Karudev\AppsBundle\Entity\Liencontactorganisation;

class ContactController extends Controller
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
                
                # On remet le formulaire à vide
                /*unset($form);
                $form = $this->createForm(new ContactType());
                 */
                echo json_encode('Le contact '.$contact->getPrenom().' '.$contact->getNom().' a été ajouté');
                die();
    	}
        return array( 'form' => $form->createView());
    }
    
     /**
     * 
     * @Template()
     */
    public function showallAction()
    {
    	$user = $this->get('security.context')->getToken()->getUser();
    	$contacts = $this->getDoctrine()->getRepository('KarudevAppsBundle:Contact')->findBy(array('idOwner'=>$user->getId()));
        return array( 'contacts' => $contacts);
    }
    
     /**
     * 
     * @Template()
     */
    public function showAction(Contact $contact)
    {
        #Voir ses organisations
        $organisations = $this->getDoctrine()->getManager()->getRepository('KarudevAppsBundle:Liencontactorganisation')->get($contact->getId());
       // \Doctrine\Common\Util\Debug::dump($organisations,2);die();
        $form = $this->createForm(new LiencontactorganisationType($this->get('security.context'),$contact));
        return array('contact'=>$contact,'organisations'=>$organisations,'form'=>$form->createView());
       
    }
    /**
     * 
     * @Template()
     */
    public function editAction($id = null)
    {
        $request = $this->get('request');
        $contact_array = $request->request->get('contact');
        if($id!=null && $id!=0)
        $contact =  $this->getDoctrine()->getRepository('KarudevAppsBundle:Contact')->find($id);
        else
        $contact =  $this->getDoctrine()->getRepository('KarudevAppsBundle:Contact')->find($contact_array['id']);   
           
     
        $form = $this->createForm(new ContactType(),$contact);
        
        
    	$user = $this->get('security.context')->getToken()->getUser();
    	if($request->getMethod() == 'POST')
    	{
                $form->bindRequest($request);
    		$em = $this->getDoctrine()->getManager();
    		$contact->setIdModifier($user->getId());
    		$contact->setDateLastModified(time());
    		$em->persist($contact);
    		$em->flush();
                echo json_encode('Le contact a été modifié');
                die();
        }
            
        return array(   'form'=>$form->createView(),
                        'contact'=>$contact);
       
    }
    public function lierContactOrganisationAction($id_contact)
    { 
        $request = $this->get('request');
        $liercontactorganisation = new Liencontactorganisation();
      
        $form = $this->createForm(new LiencontactorganisationType($this->get('security.context')),$liercontactorganisation);
      
        if($request->getMethod() == 'POST')
    	{
                $form->bindRequest($request);
                 
    		
                $em = $this->getDoctrine()->getManager();
                $liercontactorganisation->setIdContact($em->getRepository('KarudevAppsBundle:Contact')->find($id_contact));
              
    		$em->persist($liercontactorganisation);
    		$em->flush();
                echo json_encode('Le lien a été ajouté');
                die();
        }
        
    }
}
