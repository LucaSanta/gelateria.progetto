<?php

namespace FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @var int
     *
     * @ORM\Column(name="gelatini", type="integer", unique=false)
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
     * @ORM\Column(name="lunedi", type="boolean")
     */
    private $lunedi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="martedi", type="boolean")
     * @Assert\Blank()
     */
    private $martedi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mercoledi", type="boolean")
     * @Assert\Blank()
     */
    private $mercoledi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="giovedi", type="boolean")
     * @Assert\Blank()
     */
    private $giovedi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="venerdi", type="boolean")
     * @Assert\Blank()
     */
    private $venerdi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sabato", type="boolean")
     * @Assert\Blank()
     */
    private $sabato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="domenica", type="boolean")
     * @Assert\Blank()
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


    /**
     * Set gelatini
     *
     * @param integer $gelatini
     *
     * @return Gelateria
     */
    public function setGelatini($gelatini)
    {
        $this->gelatini = $gelatini;

        return $this;
    }

    /**
     * Get gelatini
     *
     * @return integer
     */
    public function getGelatini()
    {
        return $this->gelatini;
    }

    /**
     * Set segnalazione
     *
     * @param boolean $segnalazione
     *
     * @return Gelateria
     */
    public function setSegnalazione($segnalazione)
    {
        $this->segnalazione = $segnalazione;

        return $this;
    }

    /**
     * Get segnalazione
     *
     * @return boolean
     */
    public function getSegnalazione()
    {
        return $this->segnalazione;
    }

    /**
     * Set lunedi
     *
     * @param boolean $lunedi
     *
     * @return Gelateria
     */
    public function setLunedi($lunedi)
    {
        $this->lunedi = $lunedi;

        return $this;
    }

    /**
     * Get lunedi
     *
     * @return boolean
     */
    public function getLunedi()
    {
        return $this->lunedi;
    }

    /**
     * Set martedi
     *
     * @param boolean $martedi
     *
     * @return Gelateria
     */
    public function setMartedi($martedi)
    {
        $this->martedi = $martedi;

        return $this;
    }

    /**
     * Get martedi
     *
     * @return boolean
     */
    public function getMartedi()
    {
        return $this->martedi;
    }

    /**
     * Set mercoledi
     *
     * @param boolean $mercoledi
     *
     * @return Gelateria
     */
    public function setMercoledi($mercoledi)
    {
        $this->mercoledi = $mercoledi;

        return $this;
    }

    /**
     * Get mercoledi
     *
     * @return boolean
     */
    public function getMercoledi()
    {
        return $this->mercoledi;
    }

    /**
     * Set giovedi
     *
     * @param boolean $giovedi
     *
     * @return Gelateria
     */
    public function setGiovedi($giovedi)
    {
        $this->giovedi = $giovedi;

        return $this;
    }

    /**
     * Get giovedi
     *
     * @return boolean
     */
    public function getGiovedi()
    {
        return $this->giovedi;
    }

    /**
     * Set venerdi
     *
     * @param boolean $venerdi
     *
     * @return Gelateria
     */
    public function setVenerdi($venerdi)
    {
        $this->venerdi = $venerdi;

        return $this;
    }

    /**
     * Get venerdi
     *
     * @return boolean
     */
    public function getVenerdi()
    {
        return $this->venerdi;
    }

    /**
     * Set sabato
     *
     * @param boolean $sabato
     *
     * @return Gelateria
     */
    public function setSabato($sabato)
    {
        $this->sabato = $sabato;

        return $this;
    }

    /**
     * Get sabato
     *
     * @return boolean
     */
    public function getSabato()
    {
        return $this->sabato;
    }

    /**
     * Set domenica
     *
     * @param boolean $domenica
     *
     * @return Gelateria
     */
    public function setDomenica($domenica)
    {
        $this->domenica = $domenica;

        return $this;
    }

    /**
     * Get domenica
     *
     * @return boolean
     */
    public function getDomenica()
    {
        return $this->domenica;
    }

    /**
     * Add gusti
     *
     * @param \FrontBundle\Entity\Gusti $gusti
     *
     * @return Gelateria
     */
    public function addGusti(\FrontBundle\Entity\Gusti $gusti)
    {
        $this->gusti[] = $gusti;

        return $this;
    }

    /**
     * Remove gusti
     *
     * @param \FrontBundle\Entity\Gusti $gusti
     */
    public function removeGusti(\FrontBundle\Entity\Gusti $gusti)
    {
        $this->gusti->removeElement($gusti);
    }
}
