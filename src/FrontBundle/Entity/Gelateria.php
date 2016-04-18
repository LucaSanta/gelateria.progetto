<?php

namespace FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gelateria
 *
 * @ORM\Table(name="gelateria")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\GelateriaRepository")
 */
class Gelateria
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
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var Citta
     *
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="gelateria")
     */
    private $idCitta;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="text")
     */
    private $indirizzo;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;

    /**
     * @var int
     *
     * @ORM\Column(name="gelatini", type="integer", unique=true)
     */
    private $gelatini;

    /**
     * @var boolean
     *
     * @ORM\Column(name="segnalazione", type="boolean")
     */
    private $segnalazione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lunedì", type="boolean")
     */
    private $lunedì;

    /**
     * @var boolean
     *
     * @ORM\Column(name="martedì", type="boolean")
     */
    private $martedì;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mercoledì", type="boolean")
     */
    private $mercoledì;

    /**
     * @var boolean
     *
     * @ORM\Column(name="giovedì", type="boolean")
     */
    private $giovedì;

    /**
     * @var boolean
     *
     * @ORM\Column(name="venerdì", type="boolean")
     */
    private $venerdì;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sabato", type="boolean")
     */
    private $sabato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="domenica", type="boolean")
     */
    private $domenica;


//RELAZIONI


    /**
     *
     * @ORM\ManyToMany(targetEntity="Gusti")
     * @ORM\JoinTable(name="ListaGusti",
     *      joinColumns={@ORM\JoinColumn(name="idGelateria", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idGusti", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gusti;

    public function __construct()
    {
        $this->gusti = new ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Gelateria
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
     * Set idCitta
     *
     * @param integer $idCitta
     *
     * @return Gelateria
     */
    public function setIdCitta($idCitta)
    {
        $this->idCitta = $idCitta;

        return $this;
    }

    /**
     * Get idCitta
     *
     * @return int
     */
    public function getIdCitta()
    {
        return $this->idCitta;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return Gelateria
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Gelateria
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Gelateria
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }



    public function setGusti($gusti)
    {
        $this->gusti = $gusti;

        return $this;
    }

    public function getGusti()
    {
        return $this->gusti;
    }

}
