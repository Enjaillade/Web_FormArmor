<?php

namespace FormArmorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="FormArmorBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=40)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="type_form", type="string", length=50)
     */
    private $typeForm;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="diplomante", type="boolean")
     */
    private $diplomante;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="coutrevient", type="float")
     */
    private $coutrevient;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Formation
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Formation
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set typeForm
     *
     * @param string $typeForm
     *
     * @return Formation
     */
    public function setTypeForm($typeForm)
    {
        $this->typeForm = $typeForm;

        return $this;
    }

    /**
     * Get typeForm
     *
     * @return string
     */
    public function getTypeForm()
    {
        return $this->typeForm;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Formation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set diplomante
     *
     * @param boolean $diplomante
     *
     * @return Formation
     */
    public function setDiplomante($diplomante)
    {
        $this->diplomante = $diplomante;

        return $this;
    }

    /**
     * Get diplomante
     *
     * @return bool
     */
    public function getDiplomante()
    {
        return $this->diplomante;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Formation
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set coutrevient
     *
     * @param float $coutrevient
     *
     * @return Formation
     */
    public function setCoutrevient($coutrevient)
    {
        $this->coutrevient = $coutrevient;

        return $this;
    }

    /**
     * Get coutrevient
     *
     * @return float
     */
    public function getCoutrevient()
    {
        return $this->coutrevient;
    }
	
	/**
     *
     *
     * @return string
     */
    public function affichage()
    {
        return ($this->libelle . "-" . $this->niveau);
    }
}

