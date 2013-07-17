<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table(name="tva")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\TvaRepository")
 */
class Tva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tva_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $tvaId;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="decimal",length= 10, scale= 1 )
     */
    private $tva;


    /**
     * Get tva_id
     *
     * @return integer 
     */
    public function getTvaId()
    {
        return $this->tvaId;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return Tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    
        return $this;
    }

    /**
     * Get tva
     *
     * @return float 
     */
    public function getTva()
    {
        return $this->tva;
    }
}