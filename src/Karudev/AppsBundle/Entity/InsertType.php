<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsertType
 *
 * @ORM\Table(name="inserttype")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\InsertTypeRepository")
 */
class InsertType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inserttype_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $inserttype_id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=8)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=64)
     */
    private $unit;

    /**
     * @var float
     *
     * @ORM\Column(name="price_ht", type="decimal")
     */
    private $price_ht;

 
    public function __toString() {
        return $this->getCode()." : ".$this->getDesignation()." (".$this->getPriceHt()."€/".$this->getUnit().")";
    }

    /**
     * Set code
     *
     * @param string $code
     * @return InsertType
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
     * Set designation
     *
     * @param string $designation
     * @return InsertType
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
     * Set unit
     *
     * @param string $unit
     * @return InsertType
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
     * @return InsertType
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
     * Get inserttype_id
     *
     * @return integer 
     */
    public function getInserttypeId()
    {
        return $this->inserttype_id;
    }
}