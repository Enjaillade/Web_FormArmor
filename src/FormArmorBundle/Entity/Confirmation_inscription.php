<?php

namespace FormArmorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confirmation_inscription
 *
 * @ORM\Table(name="confirmation_inscription")
 * @ORM\Entity(repositoryClass="FormArmorBundle\Repository\Confirmation_inscriptionRepository")
 */
class Confirmation_inscription
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
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    /**
     * @var int
     *
     * @ORM\Column(name="session_formation_id", type="integer")
     */
    private $sessionFormationId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date")
     */
    private $dateInscription;


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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Confirmation_inscription
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set sessionFormationId
     *
     * @param integer $sessionFormationId
     *
     * @return Confirmation_inscription
     */
    public function setSessionFormationId($sessionFormationId)
    {
        $this->sessionFormationId = $sessionFormationId;

        return $this;
    }

    /**
     * Get sessionFormationId
     *
     * @return int
     */
    public function getSessionFormationId()
    {
        return $this->sessionFormationId;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Confirmation_inscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }
}
