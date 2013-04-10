<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Entity\Facture;
use Karudev\AppsBundle\Entity\FactureDetails;
use Karudev\AppsBundle\Form\Type\FactureType;
use Karudev\AppsBundle\Form\Type\FactureDetailsType;
//use Karudev\AppsBundle\Models\html2pdf;

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
        $facture = new Facture();
        $form = $this->createForm(new FactureType($this->get('security.context')), $facture);
        $user = $this->get('security.context')->getToken()->getUser();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            $em = $this->getDoctrine()->getManager();
            $facture->setIdOwner($user);
            $facture->setIdModifier($user);
            $facture->setIdFreelance($user);
            $facture->setDateCreated(time());
            $facture->setDateLastModified(time());
            $facture->setIdFactureStatus($em->getRepository('KarudevAppsBundle:Facturestatus')->find(1));
            $em->persist($facture);
            $em->flush();

            echo json_encode('Le facture ' . date('Y', $facture->getDateCreated()) . '-' . $facture->getId() . ' a été crée');
            die();
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
       // require_once(dirname(__FILE__).'/../vendor/html2pdf/html2pdf.class.php');
      // set_include_path('/usr/lib/pear');
      
       $html = $this->get('templating')->render('KarudevAppsBundle:Facture:download.html.twig',array('facture'=>$facture,
           'serverName' => $_SERVER['SERVER_NAME'] ));


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
        $insertions = $em->getRepository('KarudevAppsBundle:Facturedetails')->findBy(array('id_facture' =>
            $em->getRepository('KarudevAppsBundle:Facture')->find($idFacture))
        );
        //\Doctrine\Common\Util\Debug::dump($insertions,2);die();
        return array('insertions' => $insertions,'serverName'=>$serverName);
    }

    /**
     * 
     * @Template()
     */
    public function createdetailsAction($idFacture = null) {
        $request = $this->get('request');
        $factureDetails = new FactureDetails();
        $form = $this->createForm(new FactureDetailsType($idFacture), $factureDetails);
        if ($request->getMethod() == 'POST') {
            $facturedetails = $request->request->get('facturedetails');
            //print_r($facturedetails); die('tet');

            $form->bindRequest($request);
            $em = $this->getDoctrine()->getManager();
            $factureDetails->setIdFacture($em->getRepository('KarudevAppsBundle:Facture')->find($facturedetails['idFacture']));
            $em->persist($factureDetails);
            $em->flush();

            // echo json_encode('Le facture '.date('Y',$facture->getDateCreated()). '-'. $facture->getId().' a été crée');
            die();
        }
        return array('form' => $form->createView());
    }

}
