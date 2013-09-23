<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
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
     * @ORM\Column(name="billing_date", type="datetime")
     */
    private $billing_date;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_last_modified", type="datetime")
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
     * @var decimal
     *
     * @ORM\Column(name="methodpayment", type="string", length=64)
     */
    private $methodpayment;

    /**
     * @var decimal
     *
     * @ORM\Column(name="tva", type="decimal",length= 10, scale= 1)
     */
    private $tva;

    private $freelance_org;
   
    
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
        return str_pad($this->id, 4, 0, STR_PAD_LEFT);
    }
    public function getPaymentDelay(){
       return date('d/m/Y',($this->getTermOfPayment() * 24 * 60 *60) + $this->getBillingDate()->getTimestamp());
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
     * @return \DateTime 
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
     * @return \DateTime 
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
    
    /**
     * Set freelance_org
     *
     * @param \Karudev\AppsBundle\Entity\Organisation $freelanceOrg
     * @return Facture
     */
    public function setFreelanceOrg(\Karudev\AppsBundle\Entity\Organisation $freelanceOrg = null)
    {
        $this->freelance_org = $freelanceOrg;
    
        return $this;
    }

    /**
     * Get freelance_org
     *
     * @return \Karudev\AppsBundle\Entity\Organisation
     */
    public function getFreelanceOrg()
    {
        return $this->freelance_org;
    }

  

    /**
     * Set billing_date
     *
     * @param \DateTime $billingDate
     * @return Facture
     */
    public function setBillingDate($billingDate)
    {
        $this->billing_date = $billingDate;
    
        return $this;
    }

    /**
     * Get billing_date
     *
     * @return \DateTime 
     */
    public function getBillingDate()
    {
        return $this->billing_date;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return Facture
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

    /**
     * Set methodpayment
     *
     * @param string $methodpayment
     * @return Facture
     */
    public function setMethodpayment($methodpayment)
    {
        $this->methodpayment = $methodpayment;
    
        return $this;
    }

    /**
     * Get methodpayment
     *
     * @return string 
     */
    public function getMethodpayment()
    {
        return $this->methodpayment;
    }
}