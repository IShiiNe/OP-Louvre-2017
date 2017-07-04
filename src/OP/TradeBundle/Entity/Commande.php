<?php

namespace OP\TradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="OP\TradeBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commande_date", type="datetime")
     */
    private $commandeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="visite_date", type="string", length=255)
     */
    private $visiteDate;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="demi_journee", type="boolean")
     */
    private $demiJournee;

    /**
     * @ORM\OneToMany(targetEntity="OP\TradeBundle\Entity\Ticket", mappedBy="commande", cascade={"persist"})
     */
    private $tickets;

    public function __construct()
    {
        $this->commandeDate = new \Datetime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Commande
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set commandeDate
     *
     * @param \DateTime $commandeDate
     *
     * @return Commande
     */
    public function setCommandeDate($commandeDate)
    {
        $this->commandeDate = $commandeDate;

        return $this;
    }

    /**
     * Get commandeDate
     *
     * @return \DateTime
     */
    public function getCommandeDate()
    {
        return $this->commandeDate;
    }

    /**
     * Set visiteDate
     *
     * @param string $visiteDate
     *
     * @return Commande
     */
    public function setVisiteDate($visiteDate)
    {
        $this->visiteDate = $visiteDate;

        return $this;
    }

    /**
     * Get visiteDate
     *
     * @return string
     */
    public function getVisiteDate()
    {
        return $this->visiteDate;
    }

    /**
     * Set visiteDate
     *
     * @param int $prix
     *
     * @return Commande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set demiJournee
     *
     * @param boolean $demiJournee
     *
     * @return Commande
     */
    public function setDemiJournee($demiJournee)
    {
        $this->demiJournee = $demiJournee;

        return $this;
    }

    /**
     * Get demiJournee
     *
     * @return bool
     */
    public function getDemiJournee()
    {
        return $this->demiJournee;
    }

    public function addTicket(Ticket $ticket)
    {
        $this->tickets[] = $ticket;
    }

    public function removeTicket(Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    public function getTickets()
    {
        return $this->tickets;
    }

}

