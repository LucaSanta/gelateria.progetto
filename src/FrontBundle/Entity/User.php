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
    }


}

