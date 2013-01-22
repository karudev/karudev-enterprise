<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class OrganisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

  /* 	$builder->add('type_contrat', 'choice', array(
    'choices'   => array('Freelance-Prestaire','Prestataire-Client')));
   	*/
   	
  // 	$builder->add('moyens_fournis', 'textarea', array('required'=>false));
   	$builder->add('nom', 'text');
   	$builder->add('adresseLigne1', 'text');
   	$builder->add('adresseLigne2', 'text',array('required'=>false));
   	$builder->add('adresseLigne3', 'text',array('required'=>false));
   	$builder->add('tel', 'text');
   	$builder->add('email', 'email');
   	$builder->add('fax', 'text');
   	$builder->add('cp', 'text');
   	$builder->add('ville', 'text');
   	$builder->add('region', 'text');
   	$builder->add('pays', 'text');
   	$builder->add('siteWeb', 'text');
  

    }
    public function getName()
    {
        return 'organisation';
    }
}
?>