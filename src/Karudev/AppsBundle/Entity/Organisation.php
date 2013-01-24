<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lea\PrestaBundle\Entity\Organisation
 *
 * @ORM\Table(name="Organisation")
 * @ORM\Entity()
 */
class Organisation
{
    /**
     * @var integer $idOrganisation
     *
     * @ORM\Column(name="id_organisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="Contrat", mappedBy="Organisation")
     */
    private $idOrganisation;

	

    /**
     * @var integer $idOwner
     *
     * @ORM\Column(name="id_owner", type="integer", nullable=false)
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
     * @ORM\Column(name="id_modifier", type="integer", nullable=false)
     */
    private $idModifier;

    /**
     * @var integer $idDirecteur
     *
     * @ORM\Column(name="id_directeur", type="integer", nullable=true)
     */
    private $idDirecteur;

    /**
     * @var integer $dateLastModified
     *
     * @ORM\Column(name="date_last_modified", type="bigint", nullable=false)
     */
    private $dateLastModified;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=128, nullable=false)
     */
    private $nom;


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
     * @var string $cp
     *
     * @ORM\Column(name="cp", type="string", length=64, nullable=false)
     */
    private $cp;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=64, nullable=false)
     */
    private $ville;

    /**
     * @var string $region
     *
     * @ORM\Column(name="region", type="string", length=64, nullable=false)
     */
    private $region;

    /**
     * @var string $pays
     *
     * @ORM\Column(name="pays", type="string", length=64, nullable=false)
     */
    private $pays;

    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string", length=64, nullable=true)
     */
    private $tel;

    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=true)
     */
    private $fax;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=false)
     */
    private $email;

    /**
     * @var string $siteWeb
     *
     * @ORM\Column(name="site_web", type="string", length=64, nullable=false)
     */
    private $siteWeb;

    /**
     * @var string $idSecteurActivite
     *
     * @ORM\Column(name="id_secteur_activite", type="string", length=64, nullable=true)
     */
    private $idSecteurActivite;

	public function __construct()
	{
	$this->idOrganisation = new ArrayCollection();
	}

    /**
     * Get idOrganisation
     *
     * @return integer 
     */
    public function getIdOrganisation()
    {
        return $this->idOrganisation;
    }

    /**
     * Set idOwner
     *
     * @param integer $idOwner
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * Set idDirecteur
     *
     * @param integer $idDirecteur
     * @return Organisation
     */
    public function setIdDirecteur($idDirecteur)
    {
        $this->idDirecteur = $idDirecteur;
    
        return $this;
    }

    /**
     * Get idDirecteur
     *
     * @return integer 
     */
    public function getIdDirecteur()
    {
        return $this->idDirecteur;
    }

    /**
     * Set dateLastModified
     *
     * @param integer $dateLastModified
     * @return Organisation
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
     * Set nom
     *
     * @param string $nom
     * @return Organisation
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
     * Set adresseLigne1
     *
     * @param string $adresseLigne1
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * Set cp
     *
     * @param string $cp
     * @return Organisation
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
     * Set ville
     *
     * @param string $ville
     * @return Organisation
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
     * @return Organisation
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
     * Set pays
     *
     * @param string $pays
     * @return Organisation
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
     * Set tel
     *
     * @param string $tel
     * @return Organisation
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Organisation
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
     * Set email
     *
     * @param string $email
     * @return Organisation
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Organisation
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set idSecteurActivite
     *
     * @param string $idSecteurActivite
     * @return Organisation
     */
    public function setIdSecteurActivite($idSecteurActivite)
    {
        $this->idSecteurActivite = $idSecteurActivite;
    
        return $this;
    }

    /**
     * Get idSecteurActivite
     *
     * @return string 
     */
    public function getIdSecteurActivite()
    {
        return $this->idSecteurActivite;
    }
}