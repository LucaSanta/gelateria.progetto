<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ProvinciaRepository")
 */
class Provincia
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


//RELAZIONE

    /**
     *
     * @ORM\OneToMany(targetEntity="Citta", mappedBy="idProvincia")
     * 
     */
    private $citta;


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
     * @return Provincia
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
        $this->citta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cittum
     *
     * @param \FrontBundle\Entity\Citta $cittum
     *
     * @return Provincia
     */
    public function addCittum(\FrontBundle\Entity\Citta $cittum)
    {
        $this->citta[] = $cittum;

        return $this;
    }

    /**
     * Remove cittum
     *
     * @param \FrontBundle\Entity\Citta $cittum
     */
    public function removeCittum(\FrontBundle\Entity\Citta $cittum)
    {
        $this->citta->removeElement($cittum);
    }

    /**
     * Get citta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCitta()
    {
        return $this->citta;
    }
}
