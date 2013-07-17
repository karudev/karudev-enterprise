<?php

namespace Karudev\AppsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class FactureDetailsType extends AbstractType
{
    public $idFacture = null;
    
    public function __construct($idFacture) {
        $this->idFacture = $idFacture;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
   
       
        $builder->add('quantity', 'number');
        if($this->idFacture!=null)
            $builder->add('idFacture', 'hidden',array('data'=>$this->idFacture));
        else
            $builder->add('idFacture', 'hidden');
        
        
    }
    public function getName()
    {
        return 'facturedetails';
    }
}
?>