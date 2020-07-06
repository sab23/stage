<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\EtatRepository")
 */
class Etat
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
     * @ORM\Column(name="nom_etat", type="string", length=255)
     */
    private $nomEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="datetime")
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;


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
     * Set nomEtat
     *
     * @param string $nomEtat
     *
     * @return Etat
     */
    public function setNomEtat($nomEtat)
    {
        $this->nomEtat = $nomEtat;

        return $this;
    }

    /**
     * Get nomEtat
     *
     * @return string
     */
    public function getNomEtat()
    {
        return $this->nomEtat;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     *
     * @return Etat
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Etat
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }
}

