<?php

namespace FormArmorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session_formation
 *
 * @ORM\Table(name="session_formation")
 * @ORM\Entity(repositoryClass="FormArmorBundle\Repository\Session_formationRepository")
 */
class Session_formation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
	private $dateDebut;

	 /**
	 * @ORM\ManyToOne (targetEntity="FormArmorBundle\Entity\Formation")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $formation;
	
    /**
     * @var int
     *
     * @ORM\Column(name="nb_places", type="smallint")
     */
    private $nbPlaces;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_inscrits", type="smallint")
     */
    private $nbInscrits;

    /**
     * @var bool
     *
     * @ORM\Column(name="close", type="boolean")
     */
    private $close;


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
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     *
     * @return Session_formation
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return int
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set nbInscrits
     *
     * @param integer $nbInscrits
     *
     * @return Session_formation
     */
    public function setNbInscrits($nbInscrits)
    {
        $this->nbInscrits = $nbInscrits;

        return $this;
    }

    /**
     * Get nbInscrits
     *
     * @return int
     */
    public function getNbInscrits()
    {
        return $this->nbInscrits;
    }

    /**
     * Set close
     *
     * @param boolean $close
     *
     * @return Session_formation
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return bool
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set formation
     *
     * @param \FormArmorBundle\Entity\Formation $formation
     *
     * @return Session_formation
     */
    public function setFormation(\FormArmorBundle\Entity\Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \FormArmorBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Session_formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
}
