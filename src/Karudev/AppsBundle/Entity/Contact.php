<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Contact
 *
 * @ORM\Table(name="Contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer $idContact
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="Contrat", mappedBy="Contact")
     * @ORM\OneToMany(targetEntity="Facture", mappedBy="Contact")
     * @ORM\OneToMany(targetEntity="Liencontactorganisation", mappedBy="id_contact")
     */
    private $id;

    /**
     * @var integer $idOwner
     *
     * @ORM\Column(name="id_owner", type="bigint", nullable=false)
     */
    private $idOwner;

    /**
     * @var integer $dateCreation
     *
     * @ORM\Column(name="date_creation", type="bigint", nullable=false)
     */
    private $dateCreation;

    /**
     * @var integer $idModifier
     *
     * @ORM\Column(name="id_modifier", type="bigint", nullable=false)
     */
    private $idModifier;

    /**
     * @var integer $dateLastModified
     *
     * @ORM\Column(name="date_last_modified", type="bigint", nullable=false)
     */
    private $dateLastModified;

    /**
     * @var string $catId
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=true)
     */
    private $catId;

   
    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=128, nullable=false)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=128, nullable=false)
     */
    private $prenom;

    /**
     * @var string $deuxiemePrenom
     *
     * @ORM\Column(name="deuxieme_prenom", type="string", length=128, nullable=true)
     */
    private $deuxiemePrenom;

    /**
     * @var string $nomJeuneFille
     *
     * @ORM\Column(name="nom_jeune_fille", type="string", length=128, nullable=true)
     */
    private $nomJeuneFille;

    /**
     * @var string $civilite
     *
     * @ORM\Column(name="civilite", type="string", length=64, nullable=false)
     */
    private $civilite;


    /**
     * @var string $fonction
     *
     * @ORM\Column(name="fonction", type="string", length=128, nullable=true)
     */
    private $fonction;

    /**
     * @var string $service
     *
     * @ORM\Column(name="Service", type="string", length=128, nullable=true)
     */
    private $service;

    /**
     * @var string $adresseLigne1
     *
     * @ORM\Column(name="adresse_ligne_1", type="string", length=128, nullable=true)
     */
    private $adresseLigne1;

    /**
     * @var string $adresseLigne2
     *
     * @ORM\Column(name="adresse_ligne_2", type="string", length=128, nullable=true)
     */
    private $adresseLigne2;

    /**
     * @var string $adresseLigne3
     *
     * @ORM\Column(name="adresse_ligne_3", type="string", length=128, nullable=true)
     */
    private $adresseLigne3;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=64, nullable=true)
     */
    private $ville;

    /**
     * @var string $region
     *
     * @ORM\Column(name="region", type="string", length=64, nullable=true)
     */
    private $region;

    /**
     * @var string $cp
     *
     * @ORM\Column(name="cp", type="string", length=64, nullable=true)
     */
    private $cp;

    /**
     * @var string $pays
     *
     * @ORM\Column(name="pays", type="string", length=64, nullable=true)
     */
    private $pays;

    /**
     * @var string $telPro
     *
     * @ORM\Column(name="tel_pro", type="string", length=64, nullable=true)
     */
    private $telPro;

    /**
     * @var string $telDomicile
     *
     * @ORM\Column(name="tel_domicile", type="string", length=64, nullable=true)
     */
    private $telDomicile;


    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=true)
     */
    private $fax;

    /**
     * @var string $portablePro
     *
     * @ORM\Column(name="portable_pro", type="string", length=64, nullable=true)
     */
    private $portablePro;

    /**
     * @var string $portablePerso
     *
     * @ORM\Column(name="portable_perso", type="string", length=64, nullable=true)
     */
    private $portablePerso;

    /**
     * @var string $emailPro
     *
     * @ORM\Column(name="email_pro", type="string", length=64, nullable=true)
     */
    private $emailPro;

    /**
     * @var string $emailPerso
     *
     * @ORM\Column(name="email_perso", type="string", length=64, nullable=true)
     */
    private $emailPerso;

    /**
     * @var string $sitePerso
     *
     * @ORM\Column(name="site_perso", type="string", length=64, nullable=true)
     */
    private $sitePerso;

   
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
     * Set idOwner
     *
     * @param integer $idOwner
     * @return Contact
     */
    public function setIdOwner($idOwner)
    {
        $this->idOwner = $idOwner;
    
        return $this;
    }

    /**
     * Get idOwner
     *
     * @return integer 
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * Set dateCreation
     *
     * @param integer $dateCreation
     * @return Contact
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return integer 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set idModifier
     *
     * @param integer $idModifier
     * @return Contact
     */
    public function setIdModifier($idModifier)
    {
        $this->idModifier = $idModifier;
    
        return $this;
    }

    /**
     * Get idModifier
     *
     * @return integer 
     */
    public function getIdModifier()
    {
        return $this->idModifier;
    }

    /**
     * Set dateLastModified
     *
     * @param integer $dateLastModified
     * @return Contact
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->dateLastModified = $dateLastModified;
    
        return $this;
    }

    /**
     * Get dateLastModified
     *
     * @return integer 
     */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return Contact
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
    
        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

  

    /**
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set deuxiemePrenom
     *
     * @param string $deuxiemePrenom
     * @return Contact
     */
    public function setDeuxiemePrenom($deuxiemePrenom)
    {
        $this->deuxiemePrenom = $deuxiemePrenom;
    
        return $this;
    }

    /**
     * Get deuxiemePrenom
     *
     * @return string 
     */
    public function getDeuxiemePrenom()
    {
        return $this->deuxiemePrenom;
    }

    /**
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Contact
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;
    
        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string 
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Contact
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Contact
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    
        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set service
     *
     * @param string $service
     * @return Contact
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set adresseLigne1
     *
     * @param string $adresseLigne1
     * @return Contact
     */
    public function setAdresseLigne1($adresseLigne1)
    {
        $this->adresseLigne1 = $adresseLigne1;
    
        return $this;
    }

    /**
     * Get adresseLigne1
     *
     * @return string 
     */
    public function getAdresseLigne1()
    {
        return $this->adresseLigne1;
    }

    /**
     * Set adresseLigne2
     *
     * @param string $adresseLigne2
     * @return Contact
     */
    public function setAdresseLigne2($adresseLigne2)
    {
        $this->adresseLigne2 = $adresseLigne2;
    
        return $this;
    }

    /**
     * Get adresseLigne2
     *
     * @return string 
     */
    public function getAdresseLigne2()
    {
        return $this->adresseLigne2;
    }

    /**
     * Set adresseLigne3
     *
     * @param string $adresseLigne3
     * @return Contact
     */
    public function setAdresseLigne3($adresseLigne3)
    {
        $this->adresseLigne3 = $adresseLigne3;
    
        return $this;
    }

    /**
     * Get adresseLigne3
     *
     * @return string 
     */
    public function getAdresseLigne3()
    {
        return $this->adresseLigne3;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Contact
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Contact
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Contact
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Contact
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set telPro
     *
     * @param string $telPro
     * @return Contact
     */
    public function setTelPro($telPro)
    {
        $this->telPro = $telPro;
    
        return $this;
    }

    /**
     * Get telPro
     *
     * @return string 
     */
    public function getTelPro()
    {
        return $this->telPro;
    }

    /**
     * Set telDomicile
     *
     * @param string $telDomicile
     * @return Contact
     */
    public function setTelDomicile($telDomicile)
    {
        $this->telDomicile = $telDomicile;
    
        return $this;
    }

    /**
     * Get telDomicile
     *
     * @return string 
     */
    public function getTelDomicile()
    {
        return $this->telDomicile;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Contact
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set portablePro
     *
     * @param string $portablePro
     * @return Contact
     */
    public function setPortablePro($portablePro)
    {
        $this->portablePro = $portablePro;
    
        return $this;
    }

    /**
     * Get portablePro
     *
     * @return string 
     */
    public function getPortablePro()
    {
        return $this->portablePro;
    }

    /**
     * Set portablePerso
     *
     * @param string $portablePerso
     * @return Contact
     */
    public function setPortablePerso($portablePerso)
    {
        $this->portablePerso = $portablePerso;
    
        return $this;
    }

    /**
     * Get portablePerso
     *
     * @return string 
     */
    public function getPortablePerso()
    {
        return $this->portablePerso;
    }

    /**
     * Set emailPro
     *
     * @param string $emailPro
     * @return Contact
     */
    public function setEmailPro($emailPro)
    {
        $this->emailPro = $emailPro;
    
        return $this;
    }

    /**
     * Get emailPro
     *
     * @return string 
     */
    public function getEmailPro()
    {
        return $this->emailPro;
    }

    /**
     * Set emailPerso
     *
     * @param string $emailPerso
     * @return Contact
     */
    public function setEmailPerso($emailPerso)
    {
        $this->emailPerso = $emailPerso;
    
        return $this;
    }

    /**
     * Get emailPerso
     *
     * @return string 
     */
    public function getEmailPerso()
    {
        return $this->emailPerso;
    }

    /**
     * Set sitePerso
     *
     * @param string $sitePerso
     * @return Contact
     */
    public function setSitePerso($sitePerso)
    {
        $this->sitePerso = $sitePerso;
    
        return $this;
    }

    /**
     * Get sitePerso
     *
     * @return string 
     */
    public function getSitePerso()
    {
        return $this->sitePerso;
    }
    
 	/**
     * Get nomComplet
     *
     * @return string 
     */
    public function getNomComplet()
    {
        return $this->prenom.' '.$this->nom;
    }
}