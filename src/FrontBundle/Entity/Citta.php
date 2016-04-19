<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Citta
 *
 * @ORM\Table(name="citta")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\CittaRepository")
 */
class Citta
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
     * @var Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="citta")
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;


//RELAZIONI

    /**
     * @var Gelateria
     *
     * @ORM\OneToMany(targetEntity="Gelateria", mappedBy="idCitta")
     * 
     */
    private $gelateria;

    /**
     * @var Ricerca
     *
     * @ORM\OneToMany(targetEntity="Ricerca", mappedBy="idCitta")
     * 
     */
    private $ricerca;





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
     * Set idProvincia
     *
     * @param integer $idProvincia
     *
     * @return Citta
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return int
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Citta
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gelateria = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ricerca = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gelaterium
     *
     * @param \FrontBundle\Entity\Gelateria $gelaterium
     *
     * @return Citta
     */
    public function addGelaterium(\FrontBundle\Entity\Gelateria $gelaterium)
    {
        $this->gelateria[] = $gelaterium;

        return $this;
    }

    /**
     * Remove gelaterium
     *
     * @param \FrontBundle\Entity\Gelateria $gelaterium
     */
    public function removeGelaterium(\FrontBundle\Entity\Gelateria $gelaterium)
    {
        $this->gelateria->removeElement($gelaterium);
    }

    /**
     * Get gelateria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGelateria()
    {
        return $this->gelateria;
    }

    /**
     * Add ricerca
     *
     * @param \FrontBundle\Entity\Ricerca $ricerca
     *
     * @return Citta
     */
    public function addRicerca(\FrontBundle\Entity\Ricerca $ricerca)
    {
        $this->ricerca[] = $ricerca;

        return $this;
    }

    /**
     * Remove ricerca
     *
     * @param \FrontBundle\Entity\Ricerca $ricerca
     */
    public function removeRicerca(\FrontBundle\Entity\Ricerca $ricerca)
    {
        $this->ricerca->removeElement($ricerca);
    }

    /**
     * Get ricerca
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }
}
