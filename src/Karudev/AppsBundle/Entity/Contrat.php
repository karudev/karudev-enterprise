<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Karudev\AppsBundle\Models\Dt;

/**
 * Contrat
 *
 * @ORM\Table(name="Contrat")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\ContratRepository")
 */
class Contrat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contrat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_contrat", type="string", length=128)
     */
    private $type_contrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_freelance", type="integer")
     */
    private $id_freelance;

    /**
     *
	 * @ORM\ManyToOne(targetEntity="Organisation", inversedBy="Contrat")
	 * @ORM\JoinColumn(name="id_organisation", referencedColumnName="id_organisation")
     *
     */
    private $id_organisation;
  

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=128)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=128)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="horaires", type="string", length=255, nullable=true)
     */
    private $horaires;

    /**
     * @var string
     *
     * @ORM\Column(name="delai_execution", type="string", length=128, nullable=true)
     */
    private $delai_execution;

    /**
     * @var string
     *
     * @ORM\Column(name="moyens_fournis", type="text", nullable=true)
     */
    private $moyens_fournis;

   /**
     *
	 * @ORM\ManyToOne(targetEntity="Contact", inversedBy="Contrat")
	 * @ORM\JoinColumn(name="id_responsable_client", referencedColumnName="id_contact")
     *
     */
    private $id_responsable_client;

    /**
     * @var string
     *
     * @ORM\Column(name="periodicite_reunions", type="string", length=128, nullable=true)
     */
    private $periodicite_reunions;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ht", type="float")
     */
    private $prix_ht;

    /**
     * @var float
     *
     * @ORM\Column(name="frais", type="float", nullable=true)
     */
    private $frais;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_accompte", type="float", nullable=true)
     */
    private $montant_accompte;
    
     /**
     * @var string
     *
     * @ORM\Column(name="unite_prix", type="string", length=32, nullable=true)
     */
    private $unite_prix;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="date_debut", type="bigint", nullable=true)
     */
    private $date_debut;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="bigint", nullable=false)
     */
    private $date_created;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="date_last_modified", type="bigint", nullable=false)
     */
    private $date_last_modified;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_owner", type="integer", nullable=false)
     */
    private $id_owner;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="id_modified", type="integer", nullable=false)
     */
    private $id_modified;

	public function __construct()
	{
	$this->id = new ArrayCollection();
	}

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
     * Set type_contrat
     *
     * @param string $typeContrat
     * @return Contrat
     */
    public function setTypeContrat($typeContrat)
    {
        $this->type_contrat = $typeContrat;
    
        return $this;
    }

    /**
     * Get type_contrat
     *
     * @return string 
     */
    public function getTypeContrat()
    {
        return $this->type_contrat;
    }

    /**
     * Set id_freelance
     *
     * @param integer $idFreelance
     * @return Contrat
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
     * Set duree
     *
     * @param string $duree
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Contrat
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set horaires
     *
     * @param string $horaires
     * @return Contrat
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    
        return $this;
    }

    /**
     * Get horaires
     *
     * @return string 
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set delai_execution
     *
     * @param string $delaiExecution
     * @return Contrat
     */
    public function setDelaiExecution($delaiExecution)
    {
        $this->delai_execution = $delaiExecution;
    
        return $this;
    }

    /**
     * Get delai_execution
     *
     * @return string 
     */
    public function getDelaiExecution()
    {
        return $this->delai_execution;
    }

    /**
     * Set moyens_fournis
     *
     * @param string $moyensFournis
     * @return Contrat
     */
    public function setMoyensFournis($moyensFournis)
    {
        $this->moyens_fournis = $moyensFournis;
    
        return $this;
    }

    /**
     * Get moyens_fournis
     *
     * @return string 
     */
    public function getMoyensFournis()
    {
        return $this->moyens_fournis;
    }

   
    /**
     * Set periodicite_reunions
     *
     * @param string $periodiciteReunions
     * @return Contrat
     */
    public function setPeriodiciteReunions($periodiciteReunions)
    {
        $this->periodicite_reunions = $periodiciteReunions;
    
        return $this;
    }

    /**
     * Get periodicite_reunions
     *
     * @return string 
     */
    public function getPeriodiciteReunions()
    {
        return $this->periodicite_reunions;
    }

    /**
     * Set prix_ht
     *
     * @param float $prixHt
     * @return Contrat
     */
    public function setPrixHt($prixHt)
    {
        $this->prix_ht = $prixHt;
    
        return $this;
    }

    /**
     * Get prix_ht
     *
     * @return float 
     */
    public function getPrixHt()
    {
        return $this->prix_ht;
    }

    /**
     * Set frais
     *
     * @param float $frais
     * @return Contrat
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;
    
        return $this;
    }

    /**
     * Get frais
     *
     * @return float 
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * Set montant_accompte
     *
     * @param float $montantAccompte
     * @return Contrat
     */
    public function setMontantAccompte($montantAccompte)
    {
        $this->montant_accompte = $montantAccompte;
    
        return $this;
    }

    /**
     * Get montant_accompte
     *
     * @return float 
     */
    public function getMontantAccompte()
    {
        return $this->montant_accompte;
    }

    /**
     * Set unite_prix
     *
     * @param string $unitePrix
     * @return Contrat
     */
    public function setUnitePrix($unitePrix)
    {
        $this->unite_prix = $unitePrix;
    
        return $this;
    }

    /**
     * Get unite_prix
     *
     * @return string 
     */
    public function getUnitePrix()
    {
        return $this->unite_prix;
    }

    /**
     * Set id_organisation
     *
     * @param \Karudev\AppsBundle\Entity\Organisation $idOrganisation
     * @return Contrat
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
     * Set id_responsable_client
     *
     * @param \Karudev\AppsBundle\Entity\Contact $idResponsableClient
     * @return Contrat
     */
    public function setIdResponsableClient(\Karudev\AppsBundle\Entity\Contact $idResponsableClient = null)
    {
        $this->id_responsable_client = $idResponsableClient;
    
        return $this;
    }

    /**
     * Get id_responsable_client
     *
     * @return \Karudev\AppsBundle\Entity\Contact 
     */
    public function getIdResponsableClient()
    {
        return $this->id_responsable_client;
    }

   

    /**
     * Set date_debut
     *
     * @param integer $dateDebut
     * @return Contrat
     */
    public function setDateDebut($dateDebut)
    {
    	
        $this->date_debut = Dt::getTmps($dateDebut.' 00:00:00');
    
        return $this;
    }

    /**
     * Get date_debut
     *
     * @return integer 
     */
    public function getDateDebut()
    {
       
        if($this->date_debut>0)
    	return date('d/m/Y',$this->date_debut);
    	else
    	return "";
        return $this->date_debut;
    }

   
   

    /**
     * Set date_created
     *
     * @param integer $dateCreated
     * @return Contrat
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
     * @return Contrat
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
     * Set id_owner
     *
     * @param integer $idOwner
     * @return Contrat
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
     * Set id_modified
     *
     * @param integer $idModified
     * @return Contrat
     */
    public function setIdModified($idModified)
    {
        $this->id_modified = $idModified;
    
        return $this;
    }

    /**
     * Get id_modified
     *
     * @return integer 
     */
    public function getIdModified()
    {
        return $this->id_modified;
    }
}