<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liencontactorganisation
 *
 * @ORM\Table(name="liencontactorganisation")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\LiencontactorganisationRepository")
 */
class Liencontactorganisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lien_contact_organisation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity="Organisation")
     * @ORM\JoinColumn(name="id_organisation", referencedColumnName="id_organisation")
     *
     */
    private $id_organisation;
    
     /**
     *
	 * @ORM\ManyToOne(targetEntity="Contact")
	 * @ORM\JoinColumn(name="id_contact", referencedColumnName="id_contact")
     *
     */
    private $id_contact;

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
     * Set id_organisation
     *
     * @param \Karudev\AppsBundle\Entity\Organisation $idOrganisation
     * @return Liencontactorganisation
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
     * Set id_contact
     *
     * @param \Karudev\AppsBundle\Entity\Contact $idContact
     * @return Liencontactorganisation
     */
    public function setIdContact(\Karudev\AppsBundle\Entity\Contact $idContact = null)
    {
        $this->id_contact = $idContact;
    
        return $this;
    }

    /**
     * Get id_contact
     *
     * @return \Karudev\AppsBundle\Entity\Contact 
     */
    public function getIdContact()
    {
        return $this->id_contact;
    }
}