<?php

namespace Karudev\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DemoController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function indexAction()
    {
        return array( 
		
		
        'classe_home' => '',
        'classe_profil' => '',
        'classe_disponibilite' => '',
        'classe_contact' => '',
        'classe_devis' => '',
                     'classe_demo' => 'active',
        'classe_espace_client' => '');
    }
    
    
}
