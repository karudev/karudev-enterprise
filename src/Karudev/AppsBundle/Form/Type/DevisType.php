<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DevisType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('projectName')
            ->add('description')
            ->add('dateCreated')
            ->add('dateLastUpdated')
            ->add('amountHt')
            ->add('amountTtc')
            ->add('methodPaymentId')
            ->add('regulationProvided')
            ->add('deliveryTime')
            ->add('deliveryTimeUnit','choice',['choices' => ['Jours' => 'Jours','Semaines' => 'Semaines', 'Mois' => 'Mois']])
            ->add('ownerId')
            ->add('modifierId')
            ->add('clientId')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Karudev\AppsBundle\Entity\Devis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'karudev_appsbundle_devis';
    }
}
