<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\ContratType;
use Karudev\AppsBundle\Entity\Contrat;
use Karudev\AppsBundle\Models\Download;

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
    		$contrat->setIdFreelance($user);
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
    
    public function downloadAction(Contrat $contrat)
    {
     
      $params['societe_client'] = $contrat->getIdOrganisation()->getNom();
      $params['adresse_client'] = $contrat->getIdOrganisation()->getAdresseLigne1().', '.$contrat->getIdOrganisation()->getCp().' '.$contrat->getIdOrganisation()->getVille();
      $params['siret_client'] = $contrat->getIdOrganisation()->getSiret();
      $params['capital_client'] = $contrat->getIdOrganisation()->getCapital();
      $params['statut_client'] = $contrat->getIdOrganisation()->getStatutJuridique();
      $params['prix_ht'] = number_format($contrat->getPrixHt(),0,',',' ');
      $params['date_prestataire'] = date('d/m/Y');
      $params['nom_prestataire'] = $contrat->getIdFreelance()->getIdContact()->getPrenom() .' '.$contrat->getIdFreelance()->getIdContact()->getNom();
      $params['fonction_prestataire'] = $contrat->getIdFreelance()->getIdContact()->getFonction();
      $params['duree'] = $contrat->getDuree().' jours';
      $params['lieu'] = $contrat->getLieu();
      $params['delai'] = $contrat->getDelaiExecution();
      $params['moyens_fournis'] = $contrat->getMoyensFournis();
      $params['periodicite_reunion'] = $contrat->getPeriodiciteReunions();
      $params['frais'] = $contrat->getFrais();
      $params['representant_client'] = $contrat->getIdResponsableClient()->getPrenom(). ' '.$contrat->getIdResponsableClient()->getNom();
      $params['fonction_client'] = $contrat->getIdResponsableClient()->getFonction();
       
      $download = new Download();
      $download->setTitle('contrat-prestataireclient');
      $download->get($_SERVER['DOCUMENT_ROOT']."/bundles/karudevapps/doc/contrat_type/contrat-prestataireclient.rtf",$params);
      die();
    }
}
