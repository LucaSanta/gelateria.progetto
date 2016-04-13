<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaGusti
 *
 * @ORM\Table(name="lista_gusti")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ListaGustiRepository")
 */
class ListaGusti
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
     * @var Gelateria
     *
     * @ORM\OneToOne(targetEntity="Gelateria")
     */
    private $idGelateria;

    /**
     * @var Gusti
     *
     * @ORM\OneToOne(targetEntity="Gusti")
     */
    private $idGusto;


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
     * Set idGelateria
     *
     * @param integer $idGelateria
     *
     * @return ListaGusti
     */
    public function setIdGelateria($idGelateria)
    {
        $this->idGelateria = $idGelateria;

        return $this;
    }

    /**
     * Get idGelateria
     *
     * @return int
     */
    public function getIdGelateria()
    {
        return $this->idGelateria;
    }

    /**
     * Set idGusto
     *
     * @param integer $idGusto
     *
     * @return ListaGusti
     */
    public function setIdGusto($idGusto)
    {
        $this->idGusto = $idGusto;

        return $this;
    }

    /**
     * Get idGusto
     *
     * @return int
     */
    public function getIdGusto()
    {
        return $this->idGusto;
    }
}
