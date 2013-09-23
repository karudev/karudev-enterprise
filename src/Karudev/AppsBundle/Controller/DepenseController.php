<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\AppsBundle\Form\Type\ExpenseType;
use Karudev\AppsBundle\Entity\Expense;



class DepenseController extends Controller {

    private $_em;
    
    public function init(){
        $this->_em =  $this->getDoctrine()->getManager();
    }
    /**
     * 
     * @Template()
     */
    public function indexAction() {


        return array();
    }
    
     /**
     * 
     * @Template()
     */
    public function addAction() {

        $expense = new Expense();
        $form = $this->createForm(new ExpenseType(),$expense);
        $request = $this->getRequest();
        if($request->getMethod() == "POST"){
            $em =  $this->getDoctrine()->getManager();
            $user = $this->get('security.context')->getToken()->getUser();
            $form->submit($request);
            
            if($expense->getAmountHt() > 0)
                $expense->setAmountTva($expense->getAmountTtc() - $expense->getAmountHt());
            else
                $expense->setAmountHt($expense->getAmountTtc());
            
            $expense->setDateCreated(new \DateTime());
            $expense->setDateLastUpdated(new \DateTime());
            
            $expense->setOwnerId($user);
            
            $em->persist($expense);
            $em->flush();         
        }

        return array('form' => $form->createView());
    }
    /**
     * 
     * @Template()
     */
    public function showAction() {
        $this->init();
        $expenses = $this->_em->getRepository('KarudevAppsBundle:Expense')->findAll();
        return array('expenses' => $expenses);
    }
    

    

}
