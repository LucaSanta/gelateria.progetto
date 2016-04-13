<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SegnalazioneGelateria
 *
 * @ORM\Table(name="segnalazione_gelateria")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\SegnalazioneGelateriaRepository")
 */
class SegnalazioneGelateria
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
     * @ORM\Column(name="utente", type="string", length=255)
     */
    private $utente;

    /**
     * @var string
     *
     * @ORM\Column(name="nomegelateria", type="string", length=255)
     */
    private $nomegelateria;

    /**
     * @var string
     *
     * @ORM\Column(name="cittàgelateria", type="string", length=255)
     */
    private $cittàgelateria;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=2, unique=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="gustigelateria", type="string", length=100)
     */
    private $gustigelateria;

    /**
     * @var array
     *
     * @ORM\Column(name="giorniapertura", type="array")
     */
    private $giorniapertura;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;


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
     * Set utente
     *
     * @param string $utente
     *
     * @return SegnalazioneGelateria
     */
    public function setUtente($utente)
    {
        $this->utente = $utente;

        return $this;
    }

    /**
     * Get utente
     *
     * @return string
     */
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * Set nomegelateria
     *
     * @param string $nomegelateria
     *
     * @return SegnalazioneGelateria
     */
    public function setNomegelateria($nomegelateria)
    {
        $this->nomegelateria = $nomegelateria;

        return $this;
    }

    /**
     * Get nomegelateria
     *
     * @return string
     */
    public function getNomegelateria()
    {
        return $this->nomegelateria;
    }

    /**
     * Set cittàgelateria
     *
     * @param string $cittàgelateria
     *
     * @return SegnalazioneGelateria
     */
    public function setCittàgelateria($cittàgelateria)
    {
        $this->cittàgelateria = $cittàgelateria;

        return $this;
    }

    /**
     * Get cittàgelateria
     *
     * @return string
     */
    public function getCittàgelateria()
    {
        return $this->cittàgelateria;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return SegnalazioneGelateria
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set gustigelateria
     *
     * @param string $gustigelateria
     *
     * @return SegnalazioneGelateria
     */
    public function setGustigelateria($gustigelateria)
    {
        $this->gustigelateria = $gustigelateria;

        return $this;
    }

    /**
     * Get gustigelateria
     *
     * @return string
     */
    public function getGustigelateria()
    {
        return $this->gustigelateria;
    }

    /**
     * Set giorniapertura
     *
     * @param array $giorniapertura
     *
     * @return SegnalazioneGelateria
     */
    public function setGiorniapertura($giorniapertura)
    {
        $this->giorniapertura = $giorniapertura;

        return $this;
    }

    /**
     * Get giorniapertura
     *
     * @return array
     */
    public function getGiorniapertura()
    {
        return $this->giorniapertura;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return SegnalazioneGelateria
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
}
