<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Entity\Facture;
use Karudev\AppsBundle\Entity\Facturedetails;
use Karudev\AppsBundle\Form\Type\FactureType;
use Karudev\AppsBundle\Form\Type\FactureDetailsType;
use Karudev\AppsBundle\Form\Type\InsertTypeType;
use Symfony\Component\HttpFoundation\JsonResponse;


class FactureController extends Controller {

    /**
     * 
     * @Template()
     */
    public function defaultAction() {


        return array();
    }

    /**
     * 
     * @Template()
     */
    public function createAction() {
        $request = $this->get('request');
        $f = $request->get('facture');
        $facture = new Facture();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new FactureType($this->get('security.context'),$em), $facture);
        $user = $this->get('security.context')->getToken()->getUser();
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            $facture->setIdOwner($user);
            $facture->setIdModifier($user);
            $facture->setIdFreelance($user);
            $facture->setBillingDate(new \DateTime($f['billingDate']));
            $facture->setDateCreated(new \DateTime());
            $facture->setDateLastModified(new \DateTime());
            $facture->setIdFactureStatus($em->getRepository('KarudevAppsBundle:Facturestatus')->find(1));
            $em->persist($facture);
            $em->flush();

          new JsonResponse('Le facture FA' . $facture->getName() . ' a été crée');
           
        }
        return array('form' => $form->createView());
    }

    /**
     * 
     * @Template()
     */
    public function showallAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        // \Doctrine\Common\Util\Debug::dump(new Facture(),2);die();
        $factures = $this->getDoctrine()->getRepository('KarudevAppsBundle:Facture')->get($user->getId());
        return array('factures' => $factures);
    }

    /**
     * 
     * @Template()
     */
    public function showAction(Facture $facture) {

        return array('facture' => $facture);
    }

    /**
     * 
     * 
     */
    public function downloadAction(Facture $facture) {
       
       // die(dirname(__FILE__).'/../vendor/html2pdf/html2pdf.class.php');
        require_once(__DIR__.'/../Models/html2pdf/html2pdf.class.php');
      // set_include_path('/usr/lib/pear');
        $l =  $this->getDoctrine()->getRepository('KarudevAppsBundle:Liencontactorganisation')->findBy(array('id_contact'=>$facture->getIdFreelance()->getIdContact()->getId()));
       if($l[0]){
           $facture->setFreelanceOrg($l[0]->getIdOrganisation());
          
       }
        $insertions = $this->getDoctrine()->getRepository('KarudevAppsBundle:Facturedetails')->findBy(array('id_facture' =>
            $facture)
        );
        
       $html = $this->get('templating')->render('KarudevAppsBundle:Facture:download.html.twig',array('facture'=>$facture,
           'serverName' => $_SERVER['SERVER_NAME'],'insertions'=>$insertions ));
    
     //  \Doctrine\Common\Util\Debug::dump($facture->getFreelanceOrg()->getRib(),4); die();
      // die($html);
        try {
            $html2pdf = new \HTML2PDF('P', 'A4', 'fr');
            $html2pdf->writeHTML($html);
            $html2pdf->Output('FA'.$facture->getName().'.pdf');
        } catch (HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
        die();
        //return array( 'facture' => $facture);
    }

    /**
     * 
     * @Template()
     */
    public function showinsertionsAction($idFacture,$serverName = null) {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('KarudevAppsBundle:Facture')->find($idFacture);
        $insertions = $em->getRepository('KarudevAppsBundle:Facturedetails')->findBy(array('id_facture' =>
            $facture)
        );
        //\Doctrine\Common\Util\Debug::dump($insertions,2);die();
        return array('insertions' => $insertions,'serverName'=>$serverName,'facture'=>$facture);
    }

    /**
     * 
     * @Template()
     */
    public function createdetailsAction($idFacture = null) {
        $request = $this->get('request');
        $factureDetails = new FactureDetails();
        $form = $this->createForm(new FactureDetailsType($idFacture), $factureDetails);
        $formInsertType = $this->createForm(new InsertTypeType());
        if ($request->getMethod() == 'POST') {
            $facturedetails = $request->request->get('facturedetails');
            $inserttype = $request->request->get('inserttype');
            //print_r($facturedetails); die('tet');
        
           // \Doctrine\Common\Util\Debug::dump($this->getDoctrine()->getRepository('KarudevAppsBundle:Facture')->find($facturedetails['idFacture'])); die();
            $factureDetails->setIdFacture($this->getDoctrine()->getRepository('KarudevAppsBundle:Facture')->find($facturedetails['idFacture']));
            //$form->bindRequest($request);
            $em = $this->getDoctrine()->getManager();
            $insert = $this->getDoctrine()->getRepository('KarudevAppsBundle:InsertType')->find($inserttype['insertTypeId']);
            $factureDetails->setCode($insert->getCode());
            $factureDetails->setDesignation($insert->getDesignation());
            $factureDetails->setPriceHt($insert->getPriceHt());
            $factureDetails->setUnit($insert->getUnit());
            $factureDetails->setQuantity($facturedetails['quantity']);
            $factureDetails->setAmoutHt($insert->getPriceHt()*$facturedetails['quantity']);
            $em->persist($factureDetails);
            $em->flush();

            // echo json_encode('Le facture '.date('Y',$facture->getDateCreated()). '-'. $facture->getId().' a été crée');
          new JsonResponse();
        }
        return array('form' => $form->createView(),'formInsertType'=>$formInsertType->createView());
    }

}
