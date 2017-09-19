<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ServicesController extends Controller
{
    /**
     * @Route("/services")
     */
    public function servicesAction()
    {
        return $this->render('AppBundle:Services:services.html.twig', array(
            // ...
        ));
    }

}
