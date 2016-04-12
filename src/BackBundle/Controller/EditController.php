<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditController extends Controller
{
    public function editAction()
    {
        return $this->render('BackBundle:Edit:edit.html.twig', array(
            // ...
        ));
    }

    public function editgustoAction()
    {
        return $this->render('BackBundle:Edit:editgusto.html.twig', array(
            // ...
        ));
    }

}
