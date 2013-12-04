<?php

namespace Karudev\AppsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class BilanController extends Controller {

    /**
     * 
     * @Template()
     */
    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $credits = $em->getRepository('KarudevAppsBundle:Facturedetails')->createQueryBuilder('fd')
                ->select('sum(fd.amout_ht) as credits','f.billing_date as date_cpt','f.id as lib')
                ->join('fd.id_facture','f')
                ->where('f.id_facture_status = 2')
                ->groupBy('f.id')
                ->getQuery()
                ->getResult();
        
        $debits = $em->getRepository('KarudevAppsBundle:Expense')->createQueryBuilder('e')
                ->select('e.expense_date as date_cpt','e.amount_ttc *-1 as expenses','e.comments as lib','et.designation as expensetype')
                ->join('e.expensetype_id','et')
                ->getQuery()
                ->getResult();
        
        $data = array_merge($credits,$debits);
    //   \Doctrine\Common\Util\Debug::dump($debits,3); die();
        return array('data' => $data);
    }

   

}
