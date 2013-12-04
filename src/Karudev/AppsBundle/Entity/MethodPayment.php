<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MethodPayment
 *
 * @ORM\Table(name="methodpayment")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\MethodPaymentRepository")
 */
class MethodPayment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="methodpayment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $methodpaymentId;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=64)
     */
    private $libelle;


    public function __toString() {
        return $this->libelle;
    }
    /**
     * Get methodpayment_id
     *
     * @return integer 
     */
    public function getMethodpaymentId()
    {
        return $this->methodpaymentId;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return MethodPayment
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}