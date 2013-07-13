<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class FactureType extends AbstractType
{
    private $securityContext;

    public function __construct($securityContext)
    {
        $this->securityContext = $securityContext;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

       $user = $this->securityContext->getToken()->getUser();
        $builder->add('termOfPayment','number',array('required'=>false));
        $builder->add('idClient', 'entity', array(
            'class' => 'KarudevAppsBundle:Contact',
            'property' => 'nomComplet',
            'label' => 'nomComplet',
            'required' => true,
            'empty_value' => '',
            'query_builder' => function(EntityRepository $er) use ($user) {
                return $er->createQueryBuilder('c')
                        ->where('c.idOwner = :idOwner')
                        ->setParameter('idOwner', $user->getId())
                        ->orderBy('c.nom', 'ASC');
            },
        ));
            $builder->add('idOrganisation', 'entity', array(
            'class' => 'KarudevAppsBundle:Organisation',
            'property' => 'nom',
            'label' => 'nom',
            'required' => true,
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
        return 'contrat';
    }
}
?>