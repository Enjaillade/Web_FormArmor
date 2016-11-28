<?php

namespace FormArmorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * plan_formation
 *
 * @ORM\Table(name="plan_formation")
 * @ORM\Entity(repositoryClass="FormArmorBundle\Repository\plan_formationRepository")
 */
class Plan_formation
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
	 * @ORM\ManyToOne (targetEntity="FormArmorBundle\Entity\Client")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $client;
	
	/**
	 * @ORM\ManyToOne (targetEntity="FormArmorBundle\Entity\Formation")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $formation;

    /**
     * @var bool
     *
     * @ORM\Column(name="effectue", type="boolean")
     */
    private $effectue;


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
     * Set effectue
     *
     * @param boolean $effectue
     *
     * @return plan_formation
     */
    public function setEffectue($effectue)
    {
        $this->effectue = $effectue;

        return $this;
    }

    /**
     * Get effectue
     *
     * @return bool
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * Set client
     *
     * @param \FormArmorBundle\Entity\Client $client
     *
     * @return Plan_formation
     */
    public function setClient(\FormArmorBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \FormArmorBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set formation
     *
     * @param \FormArmorBundle\Entity\Formation $formation
     *
     * @return Plan_formation
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
}
