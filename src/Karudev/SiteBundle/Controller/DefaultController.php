<?php

namespace Karudev\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Karudev\SiteBundle\Models\Twitter;

class DefaultController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function indexAction()
    {
        return array( 
        'classe_home' => 'active',
        'classe_profil' => '',
        'classe_disponibilite' => '',
        'classe_contact' => '',
        'classe_demo' => '',
        'classe_devis' => '',
        'classe_espace_client' => '');
    }
    
    
 	/**
     * 
     * @Template()
     */
    public function profilAction()
    {
       return array( 
        'classe_home' => '',
        'classe_profil' => 'active',
        'classe_disponibilite' => '',
        'classe_contact' => '',
        'classe_devis' => '',
            'classe_demo' => '',
        'classe_espace_client' => '');
    }
    

    /**
     * 
     * @Template()
     */
    public function disponibiliteAction()
    {
        return array( 
        'classe_home' => '',
        'classe_profil' => '',
        'classe_disponibilite' => 'active',
        'classe_contact' => '',
        'classe_devis' => '',
             'classe_demo' => '',
        'classe_espace_client' => '');
    }
    
	/**
     * 
     * @Template()
     */
    public function contactAction()
    {
	/*	
		$user = "karudev";
		
		$count = 15;
		
		$date_format = 'd M Y, H:i:s';
		// inclure les RT
		//$url = 'https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name='.$user.'&count='.$count;
		$url = 'https://api.twitter.com/1/statuses/user_timeline.xml?include_entities=true&include_rts=true&screen_name='.$user.'&count='.$count;
	//	die($url);
		
               $html = '<ul class="twitter">';
               try
               {
                 $oXML = simplexml_load_file( $url );
                    foreach( $oXML->status as $oStatus ) {
		  $datetime = date_create($oStatus->created_at);
		  $date = date_format($datetime, $date_format)."\n";
		  $html .= '<li>'.Twitter::parse($oStatus->text);
		  $html .= ' (<a href="http://twitter.com/'.$user.'/status/'.$oStatus->id_str.'">'.$date.'</a>)</li>';
                }
               }
                catch(\Exception $e)
                {
                $html .="Données temporairements inaccessibles...";
                }
              
		
		
		$html .= '</ul>';

	//die($html);*/
    	$request = $this->getRequest();
		$data = $request->request->get('contact');
		$email = null;
		if ($request->getMethod() == 'POST') 
		{    #On construit le message à envoyer
			$email ="<p>Société : ". $data['societe']."</p>
			<p>Nom : ". $data['nom']."</p>
			<p>Prénom : ". $data['prenom']."</p>
			<p>Téléphone : ". $data['telephone']."</p>
			<p>Email : ". $data['email']."</p>
			<p>Objet : ". $data['objet']."</p>
			<p>Catégorie : ". $data['categorie']."</p>
			<p><b>Message</b> :<p>
			<p>". $data['message']."</p>";
			
			$message = \Swift_Message::newInstance()
						->setSubject($data['objet'])
						->setFrom( $data['email'])
						->setTo('renault@karudev.fr')
						->setBody($email)
						->setContentType('text/html');
			$this->get('mailer')->send($message);

			 
		}
		return array( 
		
		'email'=>$email,
        'classe_home' => '',
        'classe_profil' => '',
        'classe_disponibilite' => '',
        'classe_contact' => 'active',
        'classe_devis' => '',
                     'classe_demo' => '',
        'classe_espace_client' => '');
       
    }
}
