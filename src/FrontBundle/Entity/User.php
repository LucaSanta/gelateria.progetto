<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

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

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;


    /**
     * @var string
     *
     * @ORM\Column(name="città", type="string", length=255, nullable=true)
     */
    private $città;

    /**
     * @var bool
     *
     * @ORM\Column(name="isadmin", type="boolean")
     */
    private $isadmin;


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
     * @return Utente
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
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Utente
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utente
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set città
     *
     * @param string $città
     *
     * @return Utente
     */
    public function setCittà($città)
    {
        $this->città = $città;

        return $this;
    }

    /**
     * Get città
     *
     * @return string
     */
    public function getCittà()
    {
        return $this->città;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Utente
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set isadmin
     *
     * @param boolean $isadmin
     *
     * @return Utente
     */
    public function setIsadmin($isadmin)
    {
        $this->isadmin = $isadmin;

        return $this;
    }

    /**
     * Get isadmin
     *
     * @return bool
     */
    public function getIsadmin()
    {
        return $this->isadmin;
    }

    /**
     * User constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


}

