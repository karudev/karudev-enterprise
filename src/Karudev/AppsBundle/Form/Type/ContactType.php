<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    /*$builder->add('idOrganisation', 'entity', array(
				'class' 	=> 'KarudevAppsBundle:Organisation', 
				'property'  => 'nom',
        		'label'  	=> 'nom',
        		'required'  => true,
				'empty_value' => '',
				'query_builder' => function(EntityRepository $er) 
				{
        			return $er->createQueryBuilder('o')
            		->orderBy('o.nom','ASC');
    			},
			));*/
			
   	$builder->add('civilite', 'choice', array(
    'choices'   => array('','Mademoiselle'=>'Mademoiselle','Madame'=>'Madame','Monsieur'=>'Monsieur')));
   	
  
   	$builder->add('nom', 'text');
   	$builder->add('prenom', 'text');
   	$builder->add('deuxiemePrenom', 'text',array('required'=>false));
   	$builder->add('nomJeuneFille', 'text',array('required'=>false));
   	$builder->add('fonction', 'text',array('required'=>false));
   	$builder->add('service', 'text',array('required'=>false));
	$builder->add('adresseLigne1', 'text',array('required'=>false));
	$builder->add('adresseLigne2', 'text',array('required'=>false));
	$builder->add('adresseLigne3', 'text',array('required'=>false));
	$builder->add('ville', 'text',array('required'=>false));
	$builder->add('region', 'text',array('required'=>false));
	$builder->add('cp', 'text',array('required'=>false));
    $builder->add('pays', 'text',array('required'=>false));
    $builder->add('telPro', 'text',array('required'=>false));
    $builder->add('telDomicile', 'text',array('required'=>false));
    $builder->add('fax', 'text',array('required'=>false));
    $builder->add('portablePro', 'text',array('required'=>false));
    $builder->add('portablePerso', 'text',array('required'=>false));
    $builder->add('emailPro', 'email',array('required'=>false));
    $builder->add('emailPerso', 'email',array('required'=>false));
    $builder->add('sitePerso', 'text',array('required'=>false));
    }
    public function getName()
    {
        return 'contrat';
    }
}
?>