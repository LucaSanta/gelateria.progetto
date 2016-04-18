<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ricerca
 *
 * @ORM\Table(name="ricerca")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\RicercaRepository")
 */
class Ricerca
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
     * @ORM\Column(name="data", type="datetime", unique=true)
     */
    private $data;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ricerca")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="idGusto", type="integer")
     */
    private $idGusto;

    /**
     * @var Citta
     *
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="ricerca")
     */
    private $idCitta;



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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Ricerca
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Ricerca
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idGusto
     *
     * @param string $idGusto
     *
     * @return Ricerca
     */
    public function setIdGusto($idGusto)
    {
        $this->idGusto = $idGusto;

        return $this;
    }

    /**
     * Get idGusto
     *
     * @return string
     */
    public function getIdGusto()
    {
        return $this->idGusto;
    }

    /**
     * Set idCitta
     *
     * @param integer $idCitta
     *
     * @return Ricerca
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

