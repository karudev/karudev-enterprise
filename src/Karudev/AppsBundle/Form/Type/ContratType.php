<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class ContratType extends AbstractType {

    private $securityContext;

    public function __construct($securityContext)
    {
        //print_r($securityContext);die();
        $this->securityContext = $securityContext;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $user = $this->securityContext->getToken()->getUser();
        
        $builder->add('idResponsableClient', 'entity', array(
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
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('o')
                                ->orderBy('o.nom', 'ASC');
            },
        ));

        $builder->add('typeContrat', 'choice', array(
            'choices' => array('Freelance-Prestaire' => 'Freelance-Prestaire', 'Prestataire-Client' => 'Prestataire-Client')));

        $builder->add('horaires', 'choice', array(
            'choices' => array('', '8h à 12h - 13h à 16h' => '8h à 12h - 13h à 16h', '9h à 13h - 14h à 17h' => '9h à 13h - 14h à 17h')));

        $builder->add('periodiciteReunions', 'choice', array(
            'choices' => array('',
                '1 fois par semaine' => '1 fois par semaine',
                '2 fois par semaine' => '2 fois par semaine',
                '3 fois par semaine' => '3 fois par semaine',
                '4 fois par semaine' => '4 fois par semaine',
                '5 fois par semaine' => '5 fois par semaine')));

        $builder->add('unitePrix', 'choice', array(
            'choices' => array('€' => '', '€/H' => 'Heure', '€/J' => 'Jours')));

        $builder->add('lieu', 'choice', array(
            'choices' => array('', 'Locaux du client' => 'Locaux du client', 'Télétravail' => 'Télétravail', 'Locaux du client et Télétravail' => 'Locaux du client et Télétravail')));

        $builder->add('duree', 'choice', array(
            'choices' => array(
                'Indéterminée' => 'Indéterminée',
                '1 jour' => '1 jour',
                '1 semaine' => '1 semaine',
                '2 semaines' => '2 semaines',
                '3 semaines' => '3 semaines',
                '1 mois' => '1 mois',
                '3 mois' => '3 mois',
                '6 mois' => '6 mois',
                '1 an' => '1 an')));

        $builder->add('moyensFournis', 'textarea', array('required' => false));
        $builder->add('prixHt', 'text');

        $builder->add('dateDebut', 'text');
    }

    public function getName() {
        return 'contrat';
    }

}

?>