<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class FactureType extends AbstractType
{
    private $securityContext;
    private $em;

    public function __construct($securityContext = null,$em = null)
    {
        if($securityContext!=null) $this->securityContext = $securityContext;
        if($em!=null)  $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

       $user = $this->securityContext->getToken()->getUser();
        $builder->add('billingDate','date',array(
            'required'=> true,
            'widget' => 'single_text',
            'format' => 'yyyy/MM/dd'
        ));
        $builder->add('termOfPayment','number',array('required'=>false));
      
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
       
        
       $method = $this->em->getRepository('KarudevAppsBundle:MethodPayment')->findAll();
       $data = array();
       foreach ($method as $value) {
           $data[$value->getLibelle()] = $value->getLibelle();
       }
       $builder->add('methodpayment', 'choice', array(
            'choices' => $data
        ));
            
       
       $tva = $this->em->getRepository('KarudevAppsBundle:Tva')->findAll();
       $data = array();
       foreach ($tva as $value) {
           $data[$value->getTva()] = $value->getTva();
       }
       $builder->add('tva', 'choice', array(
            'choices' => $data
        ));
            
      
 
    }
    public function getName()
    {
        return 'facture';
    }
}
?>