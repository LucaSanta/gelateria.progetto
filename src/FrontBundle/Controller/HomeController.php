<?php
namespace FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class HomeController extends Controller
{
    public function HomeAction()
    {
        return $this->render('FrontBundle:Home:home.html.twig', array(
            
        ));
    }
    public function ComefunzionaAction()
    {
        return $this->render('FrontBundle:Home:comefunziona.html.twig');
    }
}