<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PartnersController extends Controller
{
    /**
     * @Route("/partners")
     */
    public function partnersAction()
    {
        return $this->render('AppBundle:Partners:partners.html.twig', array(
            // ...
        ));
    }

}
