<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="Facture")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\FactureRepository")
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_facture", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $idOwner
     *
     * @ORM\Column(name="id_owner", type="integer")
     */
    private $id_owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="bigint")
     */
    private $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_last_modified", type="bigint")
     */
    private $date_last_modified;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modifier", type="integer")
     */
    private $id_modifier;

   
    /**
	 * @ORM\ManyToOne(targetEntity="Compte", inversedBy="Facture")
	 * @ORM\JoinColumn(name="id_freelance", referencedColumnName="id_compte")
     */
    private $id_freelance;

    /**
	 * @ORM\ManyToOne(targetEntity="Contact", inversedBy="Facture")
	 * @ORM\JoinColumn(name="id_client", referencedColumnName="id_contact")
     */
    private $id_client;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return date('Y',$this->getDateCreated()).'-'.$this->id;
    }

    /**
     * Set id_owner
     *
     * @param integer $idOwner
     * @return Facture
     */
    public function setIdOwner($idOwner)
    {
        $this->id_owner = $idOwner;
    
        return $this;
    }

    /**
     * Get id_owner
     *
     * @return integer 
     */
    public function getIdOwner()
    {
        return $this->id_owner;
    }

    /**
     * Set date_created
     *
     * @param integer $dateCreated
     * @return Facture
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
    
        return $this;
    }

    /**
     * Get date_created
     *
     * @return integer 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set date_last_modified
     *
     * @param integer $dateLastModified
     * @return Facture
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->date_last_modified = $dateLastModified;
    
        return $this;
    }

    /**
     * Get date_last_modified
     *
     * @return integer 
     */
    public function getDateLastModified()
    {
        return $this->date_last_modified;
    }

    /**
     * Set id_modifier
     *
     * @param integer $idModifier
     * @return Facture
     */
    public function setIdModifier($idModifier)
    {
        $this->id_modifier = $idModifier;
    
        return $this;
    }

    /**
     * Get id_modifier
     *
     * @return integer 
     */
    public function getIdModifier()
    {
        return $this->id_modifier;
    }

  

    /**
     * Set id_freelance
     *
     * @param integer $idFreelance
     * @return Facture
     */
    public function setIdFreelance($idFreelance)
    {
        $this->id_freelance = $idFreelance;
    
        return $this;
    }

    /**
     * Get id_freelance
     *
     * @return integer 
     */
    public function getIdFreelance()
    {
        return $this->id_freelance;
    }

    /**
     * Set id_client
     *
     * @param integer $idClient
     * @return Facture
     */
    public function setIdClient($idClient)
    {
        $this->id_client = $idClient;
    
        return $this;
    }

    /**
     * Get id_client
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->id_client;
    }
}