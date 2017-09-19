<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SignupController extends Controller
{
    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction()
    {
        return $this->render('AppBundle:Signup:signup.html.twig');
    }

}
