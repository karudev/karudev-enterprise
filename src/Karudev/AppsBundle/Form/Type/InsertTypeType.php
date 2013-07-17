<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class InsertTypeType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
   
         $builder->add('insertTypeId', 'entity', array(
            'class' => 'KarudevAppsBundle:InsertType',
            'required' => true,
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('i')
                        ->orderBy('i.inserttype_id', 'ASC');
            },
        ));
       
        
    }
    public function getName()
    {
        return 'inserttype';
    }
}
?>