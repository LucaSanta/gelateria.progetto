<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function UserloginAction()
    {
        return $this->render('FrontBundle:User:userlogin.html.twig', array(
            // ...
        ));
    }

 public function UserregistratiAction()
    {
        return $this->render('FrontBundle:User:userregistrati.html.twig', array(
            // ...
        ));
    }

 public function UserpswdimenticataAction()
    {
        return $this->render('FrontBundle:User:Userpswdimenticata.html.twig', array(
            // ...
        ));
    }

 public function UserimpostazioniutenteAction()
    {
        return $this->render('FrontBundle:User:Userimpostazioniutente.html.twig', array(
            // ...
        ));
    }
    
}
