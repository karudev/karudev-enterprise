<?php

namespace Karudev\AppsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expense
 *
 * @ORM\Table(name="expense")
 * @ORM\Entity(repositoryClass="Karudev\AppsBundle\Entity\ExpenseRepository")
 */
class Expense {

    /**
     * @var integer
     *
     * @ORM\Column(name="expense_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $expenseId;

    /**
     * @ORM\ManyToOne(targetEntity="ExpenseType")
     * @ORM\JoinColumn(name="expensetype_id", referencedColumnName="expensetype_id")
     */
    private $expensetype_id;

    /**
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id_compte")
     */
    private $owner_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="date")
     */
    private $date_created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_last_updated", type="date")
     */
    private $date_last_updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expense_date", type="date")
     */
    private $expense_date;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_tva", type="decimal",scale=2 , nullable=true)
     */
    private $amount_tva;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_ht", type="decimal",scale=2,nullable=true)
     */
    private $amount_ht;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_ttc", type="decimal",scale=2)
     */
    private $amount_ttc;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text")
     */
    private $comments;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getExpenseId() {
        return $this->expenseId;
    }

   

  
    /**
     * Set date_created
     *
     * @param \DateTime $dateCreated
     * @return Expense
     */
    public function setDateCreated($dateCreated) {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Set date_last_updated
     *
     * @param \DateTime $dateLastUpdated
     * @return Expense
     */
    public function setDateLastUpdated($dateLastUpdated) {
        $this->date_last_updated = $dateLastUpdated;

        return $this;
    }

    /**
     * Get date_last_updated
     *
     * @return \DateTime 
     */
    public function getDateLastUpdated() {
        return $this->date_last_updated;
    }

    /**
     * Set expense_date
     *
     * @param \DateTime $expenseDate
     * @return Expense
     */
    public function setExpenseDate($expenseDate) {
        $this->expense_date = $expenseDate;

        return $this;
    }

    /**
     * Get expense_date
     *
     * @return \DateTime 
     */
    public function getExpenseDate() {
        return $this->expense_date;
    }

    /**
     * Set amount_tva
     *
     * @param float $amountTva
     * @return Expense
     */
    public function setAmountTva($amountTva) {
        $this->amount_tva = $amountTva;

        return $this;
    }

    /**
     * Get amount_tva
     *
     * @return float 
     */
    public function getAmountTva() {
        return $this->amount_tva;
    }

    /**
     * Set amount_ht
     *
     * @param float $amountHt
     * @return Expense
     */
    public function setAmountHt($amountHt) {
        $this->amount_ht = $amountHt;

        return $this;
    }

    /**
     * Get amount_ht
     *
     * @return float 
     */
    public function getAmountHt() {
        return $this->amount_ht;
    }

    /**
     * Set amount_ttc
     *
     * @param float $amountTtc
     * @return Expense
     */
    public function setAmountTtc($amountTtc) {
        $this->amount_ttc = $amountTtc;

        return $this;
    }

    /**
     * Get amount_ttc
     *
     * @return float 
     */
    public function getAmountTtc() {
        return $this->amount_ttc;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Expense
     */
    public function setComments($comments) {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments() {
        return $this->comments;
    }


    /**
     * Set expensetype_id
     *
     * @param \Karudev\AppsBundle\Entity\ExpenseType $expensetypeId
     * @return Expense
     */
    public function setExpensetypeId(\Karudev\AppsBundle\Entity\ExpenseType $expensetypeId = null)
    {
        $this->expensetype_id = $expensetypeId;
    
        return $this;
    }

    /**
     * Get expensetype_id
     *
     * @return \Karudev\AppsBundle\Entity\ExpenseType 
     */
    public function getExpensetypeId()
    {
        return $this->expensetype_id;
    }


    /**
     * Set owner_id
     *
     * @param \Karudev\AppsBundle\Entity\Compte $ownerId
     * @return Expense
     */
    public function setOwnerId(\Karudev\AppsBundle\Entity\Compte $ownerId = null)
    {
        $this->owner_id = $ownerId;
    
        return $this;
    }

    /**
     * Get owner_id
     *
     * @return \Karudev\AppsBundle\Entity\Compte 
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }
}