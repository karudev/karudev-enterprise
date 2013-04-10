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
	 * @ORM\ManyToOne(targetEntity="Compte", inversedBy="Facture")
	 * @ORM\JoinColumn(name="id_owner", referencedColumnName="id_compte")
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
	 * @ORM\ManyToOne(targetEntity="Compte", inversedBy="Facture")
	 * @ORM\JoinColumn(name="id_modifier", referencedColumnName="id_compte")
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
	 * @ORM\ManyToOne(targetEntity="Organisation", inversedBy="Facture")
	 * @ORM\JoinColumn(name="id_organisation", referencedColumnName="id_organisation")
     */
    private $id_organisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_of_payment", type="integer", nullable=true)
     */
    private $term_of_payment;
    
     /**
     * @ORM\ManyToOne(targetEntity="Facturestatus", inversedBy="Facture")
     * @ORM\JoinColumn(name="id_facture_status", referencedColumnName="id_facture_status")
     * 
     */
    private $id_facture_status;

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
        return date('Y',$this->getDateCreated()).'-'.str_pad($this->id, 4, 0, STR_PAD_LEFT);
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

    /**
     * Set term_of_payment
     *
     * @param integer $termOfPayment
     * @return Facture
     */
    public function setTermOfPayment($termOfPayment)
    {
        $this->term_of_payment = $termOfPayment;
    
        return $this;
    }

    /**
     * Get term_of_payment
     *
     * @return integer 
     */
    public function getTermOfPayment()
    {
        return $this->term_of_payment;
    }

   

    /**
     * Set id_facture_status
     *
     * @param \Karudev\AppsBundle\Entity\Facturestatus $idFactureStatus
     * @return Facture
     */
    public function setIdFactureStatus(\Karudev\AppsBundle\Entity\Facturestatus $idFactureStatus = null)
    {
        $this->id_facture_status = $idFactureStatus;
    
        return $this;
    }

    /**
     * Get id_facture_status
     *
     * @return \Karudev\AppsBundle\Entity\Facturestatus 
     */
    public function getIdFactureStatus()
    {
        return $this->id_facture_status;
    }

    /**
     * Set id_organisation
     *
     * @param \Karudev\AppsBundle\Entity\Organisation $idOrganisation
     * @return Facture
     */
    public function setIdOrganisation(\Karudev\AppsBundle\Entity\Organisation $idOrganisation = null)
    {
        $this->id_organisation = $idOrganisation;
    
        return $this;
    }

    /**
     * Get id_organisation
     *
     * @return \Karudev\AppsBundle\Entity\Organisation 
     */
    public function getIdOrganisation()
    {
        return $this->id_organisation;
    }
}