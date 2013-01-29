<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class LiencontactorganisationType extends AbstractType {

    private $securityContext;
  
    
    public function __construct($securityContext,$contact = null)
    {
        //print_r($securityContext);die();
        $this->securityContext = $securityContext;
      
    }
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
     $user = $this->securityContext->getToken()->getUser();
       
     $builder->add('idOrganisation', 'entity', array(
            'class' => 'KarudevAppsBundle:Organisation',
            'property' => 'nom',
            'label' => 'nom',
            'required' => true,
            'empty_value' => '',
            'query_builder' => function(EntityRepository $er) use ($user) {
                return $er  ->createQueryBuilder('o')
                        ->where('o.idOwner = :idOwner')
                            ->setParameter('idOwner', $user->getId())
                            ->orderBy('o.nom', 'ASC');
            },
        ));

  
 
   
        
    }

    public function getName() {
        return 'liencontactorganisation';
    }

}

?>