<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function SearchAction()
    {
        return $this->render('FrontBundle:Search:search.html.twig', array(
            // ...
        ));
    }

}
