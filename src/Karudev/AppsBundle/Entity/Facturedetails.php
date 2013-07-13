<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturedetails
 *
 * @ORM\Table(name="Facturedetails")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\FacturedetailsRepository")
 */
class Facturedetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_facture_details", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
	 * @ORM\ManyToOne(targetEntity="Facture", inversedBy="Facturedetails")
	 * @ORM\JoinColumn(name="id_facture", referencedColumnName="id_facture", nullable = false)
     */
    private $id_facture;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=128)
     */
    private $designation;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_unit_price", type="float")
     */
    private $gross_unit_price;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float")
     */
    private $discount;

    /**
     * @var float
     *
     * @ORM\Column(name="net_unit_price", type="float")
     */
    private $net_unit_price;

    /**
     * @var float
     *
     * @ORM\Column(name="tva_rate", type="float")
     */
    private $tva_rate;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", nullable = true)
     */
    private $amount;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_facture
     *
     * @param integer $idFacture
     * @return Facturedetails
     */
    public function setIdFacture($idFacture)
    {
        $this->id_facture = $idFacture;
    
        return $this;
    }

    /**
     * Get id_facture
     *
     * @return integer 
     */
    public function getIdFacture()
    {
        return $this->id_facture;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Facturedetails
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Facturedetails
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set gross_unit_price
     *
     * @param float $grossUnitPrice
     * @return Facturedetails
     */
    public function setGrossUnitPrice($grossUnitPrice)
    {
        $this->gross_unit_price = $grossUnitPrice;
    
        return $this;
    }

    /**
     * Get gross_unit_price
     *
     * @return float 
     */
    public function getGrossUnitPrice()
    {
        return $this->gross_unit_price;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return Facturedetails
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    
        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set net_unit_price
     *
     * @param float $netUnitPrice
     * @return Facturedetails
     */
    public function setNetUnitPrice($netUnitPrice)
    {
        $this->net_unit_price = $netUnitPrice;
    
        return $this;
    }

    /**
     * Get net_unit_price
     *
     * @return float 
     */
    public function getNetUnitPrice()
    {
        return $this->net_unit_price;
    }

    /**
     * Set tva_rate
     *
     * @param float $tvaRate
     * @return Facturedetails
     */
    public function setTvaRate($tvaRate)
    {
        $this->tva_rate = $tvaRate;
    
        return $this;
    }

    /**
     * Get tva_rate
     *
     * @return float 
     */
    public function getTvaRate()
    {
        return $this->tva_rate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Facturedetails
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }
}