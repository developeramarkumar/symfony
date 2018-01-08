<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function loginAction()
    {
        return $this->render('WebBundle:Auth:login.html.twig', array(
            // ...
        ));
    }

    public function registerAction()
    {
        return $this->render('WebBundle:Auth:register.html.twig', array(
            // ...
        ));
    }

}
