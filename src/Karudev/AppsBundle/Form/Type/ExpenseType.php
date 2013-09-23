<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExpenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('expenseTypeId', 'entity', array(
            'class' => 'KarudevAppsBundle:ExpenseType',
            'property' => 'designation',
            'empty_value' => '-- Type de dépense --',
            'required' => true
           
        ));
          $builder->add('expenseDate','date',array(
            'required'=> true,
            'attr' => array('placeholder' => 'Date de la dépense'),
            'widget' => 'single_text',
            'format' => 'yyyy/MM/dd'
        ));
        $builder->add('comments','textarea',array('required' => false));
        $builder->add('amountHt','text', array('required' => false,'attr' => array('placeholder' => 'Montant HT')));
        $builder->add('amountTtc','text',array('attr' => array('placeholder' => 'Montant TTC')));
	
    }
    public function getName()
    {
        return 'expense';
    }
}
?>