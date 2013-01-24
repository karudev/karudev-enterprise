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
    
    public function downloadAction(Contrat $contrat)
    {
      $params['societe_client'] = $contrat->getIdOrganisation()->getNom();
      $params['adresse_client'] = $contrat->getIdOrganisation()->getAdresseLigne1().', '.$contrat->getIdOrganisation()->getCp().' '.$contrat->getIdOrganisation()->getVille();
      $params['siret_client'] = $contrat->getIdOrganisation()->getSiret();
      $params['capital_client'] = $contrat->getIdOrganisation()->getCapital();
      $params['statut_client'] = $contrat->getIdOrganisation()->getStatutJuridique();
      $params['prix_ht'] = number_format($contrat->getPrixHt(),0,',',' ');
      
      $download = new Download();
      $download->setTitle('contrat-prestataireclient');
      $download->get($_SERVER['DOCUMENT_ROOT']."/bundles/karudevapps/doc/contrat_type/contrat-prestataireclient.rtf",$params);
      die();
    }
}
