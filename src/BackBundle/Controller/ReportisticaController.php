<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportisticaController extends Controller
{
    public function tabellaAction()
    {
        return $this->render('BackBundle:Reportistica:tabella.html.twig', array(
            // ...
        ));
    }

}
