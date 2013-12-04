<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturestatus
 *
 * @ORM\Table(name="Facturestatus")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\FacturestatusRepository")
 */
class Facturestatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_facture_status", type="integer")
     * @ORM\Id
     * @ORM\OneToMany(targetEntity="Facture", mappedBy="Facturestatus")
     * @ORM\GeneratedValue(strategy="AUTO")
   
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=128)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Facturestatus
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