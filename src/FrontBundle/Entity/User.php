<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Utente
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


//RELAZIONI

    /**
     *
     * @ORM\OneToMany(targetEntity="Ricerca", mappedBy="idUser")
     * 
     *
     */
    private $ricerca;


    /**
     *
     * @ORM\ManyToMany(targetEntity="Gelateria")
     * @ORM\JoinTable(name="Preferiti",
     *      joinColumns={@ORM\JoinColumn(name="idGelateria2", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idUser2", referencedColumnName="id", unique=true)}
     * )
     *
     */
    private $preferiti;


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
     * User constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->preferiti = new ArrayCollection();
    }


    public function setPreferiti($preferiti)
    {
        $this->preferiti = $preferiti;

        return $this;
    }

    public function getPreferiti()
    {
        return $this->preferiti;
    }

}

