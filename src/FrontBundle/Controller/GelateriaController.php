<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GelateriaController extends Controller
{
    public function rottaAction()
    {
        return $this->render('FrontBundle:Gelateria:rotta.html.twig', array(
        ));
    }

     public function gelateriaAction()
    {
        return $this->render('FrontBundle:Gelateria:GelateriaShop.html.twig', array(
        ));
    }

     public function segnalagelateriaAction()
    {
        return $this->render('FrontBundle:Gelateria:segnala.html.twig', array(
        ));
    }




}
