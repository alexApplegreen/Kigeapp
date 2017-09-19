<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/index", name="homepage1")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Home:index.html.twig');
    }

}
