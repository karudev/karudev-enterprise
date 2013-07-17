<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class OrganisationType extends AbstractType
{
    
    private $user;
   

    public function __construct($user = null)
    {
        if($user!=null) $this->user = $user;
        
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $user = $this->user ;
     
  /* 	$builder->add('type_contrat', 'choice', array(
    'choices'   => array('Freelance-Prestaire','Prestataire-Client')));
   	*/
   	
  // 	$builder->add('moyens_fournis', 'textarea', array('required'=>false));
   	$builder->add('nom', 'text');
        $builder->add('description', 'textarea',array('required'=>false));
   	$builder->add('adresseLigne1', 'text',array('required'=>false));
   	$builder->add('adresseLigne2', 'text',array('required'=>false));
   	$builder->add('adresseLigne3', 'text',array('required'=>false));
   	$builder->add('tel', 'text',array('required'=>false));
   	$builder->add('email', 'email',array('required'=>false));
   	$builder->add('fax', 'text',array('required'=>false));
   	$builder->add('cp', 'text',array('required'=>false));
   	$builder->add('ville', 'text',array('required'=>false));
   	$builder->add('region', 'text',array('required'=>false));
   	$builder->add('pays', 'text',array('required'=>false));
   	$builder->add('siteWeb', 'text',array('required'=>false));
        $builder->add('siret', 'text',array('required'=>false));
        $builder->add('capital', 'text',array('required'=>false));
        $builder->add('statutJuridique', 'text',array('required'=>false));
        $builder->add('rib', 'text',array('required'=>false));
        
           $builder->add('idDirecteur', 'entity', array(
            'class' => 'KarudevAppsBundle:Contact',
            'required' => false,
            'empty_value' => '',
            'query_builder' => function(EntityRepository $er) use ($user) {
                return $er->createQueryBuilder('c')
                        ->where('c.idOwner = :idOwner')
                        ->setParameter('idOwner', $user->getId())
                        ->orderBy('c.nom', 'ASC');
            },
        ));
  

    }
    public function getName()
    {
        return 'organisation';
    }
}
?>