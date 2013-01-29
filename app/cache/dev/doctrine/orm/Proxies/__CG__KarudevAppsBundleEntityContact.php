<?php

namespace Proxies\__CG__\Karudev\AppsBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Contact extends \Karudev\AppsBundle\Entity\Contact implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setIdOwner($idOwner)
    {
        $this->__load();
        return parent::setIdOwner($idOwner);
    }

    public function getIdOwner()
    {
        $this->__load();
        return parent::getIdOwner();
    }

    public function setDateCreation($dateCreation)
    {
        $this->__load();
        return parent::setDateCreation($dateCreation);
    }

    public function getDateCreation()
    {
        $this->__load();
        return parent::getDateCreation();
    }

    public function setIdModifier($idModifier)
    {
        $this->__load();
        return parent::setIdModifier($idModifier);
    }

    public function getIdModifier()
    {
        $this->__load();
        return parent::getIdModifier();
    }

    public function setDateLastModified($dateLastModified)
    {
        $this->__load();
        return parent::setDateLastModified($dateLastModified);
    }

    public function getDateLastModified()
    {
        $this->__load();
        return parent::getDateLastModified();
    }

    public function setCatId($catId)
    {
        $this->__load();
        return parent::setCatId($catId);
    }

    public function getCatId()
    {
        $this->__load();
        return parent::getCatId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setDeuxiemePrenom($deuxiemePrenom)
    {
        $this->__load();
        return parent::setDeuxiemePrenom($deuxiemePrenom);
    }

    public function getDeuxiemePrenom()
    {
        $this->__load();
        return parent::getDeuxiemePrenom();
    }

    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->__load();
        return parent::setNomJeuneFille($nomJeuneFille);
    }

    public function getNomJeuneFille()
    {
        $this->__load();
        return parent::getNomJeuneFille();
    }

    public function setCivilite($civilite)
    {
        $this->__load();
        return parent::setCivilite($civilite);
    }

    public function getCivilite()
    {
        $this->__load();
        return parent::getCivilite();
    }

    public function setFonction($fonction)
    {
        $this->__load();
        return parent::setFonction($fonction);
    }

    public function getFonction()
    {
        $this->__load();
        return parent::getFonction();
    }

    public function setService($service)
    {
        $this->__load();
        return parent::setService($service);
    }

    public function getService()
    {
        $this->__load();
        return parent::getService();
    }

    public function setAdresseLigne1($adresseLigne1)
    {
        $this->__load();
        return parent::setAdresseLigne1($adresseLigne1);
    }

    public function getAdresseLigne1()
    {
        $this->__load();
        return parent::getAdresseLigne1();
    }

    public function setAdresseLigne2($adresseLigne2)
    {
        $this->__load();
        return parent::setAdresseLigne2($adresseLigne2);
    }

    public function getAdresseLigne2()
    {
        $this->__load();
        return parent::getAdresseLigne2();
    }

    public function setAdresseLigne3($adresseLigne3)
    {
        $this->__load();
        return parent::setAdresseLigne3($adresseLigne3);
    }

    public function getAdresseLigne3()
    {
        $this->__load();
        return parent::getAdresseLigne3();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setRegion($region)
    {
        $this->__load();
        return parent::setRegion($region);
    }

    public function getRegion()
    {
        $this->__load();
        return parent::getRegion();
    }

    public function setCp($cp)
    {
        $this->__load();
        return parent::setCp($cp);
    }

    public function getCp()
    {
        $this->__load();
        return parent::getCp();
    }

    public function setPays($pays)
    {
        $this->__load();
        return parent::setPays($pays);
    }

    public function getPays()
    {
        $this->__load();
        return parent::getPays();
    }

    public function setTelPro($telPro)
    {
        $this->__load();
        return parent::setTelPro($telPro);
    }

    public function getTelPro()
    {
        $this->__load();
        return parent::getTelPro();
    }

    public function setTelDomicile($telDomicile)
    {
        $this->__load();
        return parent::setTelDomicile($telDomicile);
    }

    public function getTelDomicile()
    {
        $this->__load();
        return parent::getTelDomicile();
    }

    public function setFax($fax)
    {
        $this->__load();
        return parent::setFax($fax);
    }

    public function getFax()
    {
        $this->__load();
        return parent::getFax();
    }

    public function setPortablePro($portablePro)
    {
        $this->__load();
        return parent::setPortablePro($portablePro);
    }

    public function getPortablePro()
    {
        $this->__load();
        return parent::getPortablePro();
    }

    public function setPortablePerso($portablePerso)
    {
        $this->__load();
        return parent::setPortablePerso($portablePerso);
    }

    public function getPortablePerso()
    {
        $this->__load();
        return parent::getPortablePerso();
    }

    public function setEmailPro($emailPro)
    {
        $this->__load();
        return parent::setEmailPro($emailPro);
    }

    public function getEmailPro()
    {
        $this->__load();
        return parent::getEmailPro();
    }

    public function setEmailPerso($emailPerso)
    {
        $this->__load();
        return parent::setEmailPerso($emailPerso);
    }

    public function getEmailPerso()
    {
        $this->__load();
        return parent::getEmailPerso();
    }

    public function setSitePerso($sitePerso)
    {
        $this->__load();
        return parent::setSitePerso($sitePerso);
    }

    public function getSitePerso()
    {
        $this->__load();
        return parent::getSitePerso();
    }

    public function getNomComplet()
    {
        $this->__load();
        return parent::getNomComplet();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'idOwner', 'dateCreation', 'idModifier', 'dateLastModified', 'catId', 'nom', 'prenom', 'deuxiemePrenom', 'nomJeuneFille', 'civilite', 'fonction', 'service', 'adresseLigne1', 'adresseLigne2', 'adresseLigne3', 'ville', 'region', 'cp', 'pays', 'telPro', 'telDomicile', 'fax', 'portablePro', 'portablePerso', 'emailPro', 'emailPerso', 'sitePerso');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}