<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpenseType
 *
 * @ORM\Table(name="expensetype")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\ExpenseTypeRepository")
 */
class ExpenseType {

    /**
     * @var integer
     *
     * @ORM\Column(name="expensetype_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $expenseTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=128)
     */
    private $designation;

    public function __toString() {
        return $this->designation;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getExpenseTypeId() {
        return $this->expenseTypeId;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return ExpenseType
     */
    public function setDesignation($designation) {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation() {
        return $this->designation;
    }

}
