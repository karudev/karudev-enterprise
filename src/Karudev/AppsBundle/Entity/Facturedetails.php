<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturedetails
 *
 * @ORM\Table(name="facturedetails")
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
     * @var float
     *
     * @ORM\Column(name="quantity", type="decimal",length= 10, scale= 2)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=8)
     */
    private $code;
    
     /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=64)
     */
    private $unit;

    /**
     * @var float
     *
     * @ORM\Column(name="price_ht", type="decimal",length= 10, scale= 2)
     */
    private $price_ht;
    
    /**
     * @var float
     *
     * @ORM\Column(name="amout_ht", type="decimal",length= 10, scale= 2)
     */
    private $amout_ht;

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
     * Set code
     *
     * @param string $code
     * @return Facturedetails
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Facturedetails
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    
        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set price_ht
     *
     * @param float $priceHt
     * @return Facturedetails
     */
    public function setPriceHt($priceHt)
    {
        $this->price_ht = $priceHt;
    
        return $this;
    }

    /**
     * Get price_ht
     *
     * @return float 
     */
    public function getPriceHt()
    {
        return $this->price_ht;
    }

    /**
     * Set id_facture
     *
     * @param \Karudev\AppsBundle\Entity\Facture $idFacture
     * @return Facturedetails
     */
    public function setIdFacture(\Karudev\AppsBundle\Entity\Facture $idFacture)
    {
        $this->id_facture = $idFacture;
    
        return $this;
    }

    /**
     * Get id_facture
     *
     * @return \Karudev\AppsBundle\Entity\Facture 
     */
    public function getIdFacture()
    {
        return $this->id_facture;
    }

    /**
     * Set amout_ht
     *
     * @param float $amoutHt
     * @return Facturedetails
     */
    public function setAmoutHt($amoutHt)
    {
        $this->amout_ht = $amoutHt;
    
        return $this;
    }

    /**
     * Get amout_ht
     *
     * @return float 
     */
    public function getAmoutHt()
    {
        return $this->amout_ht;
    }
}