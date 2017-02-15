<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => 'AMLUserBundle'));
    }
    public function helloNameAction($name)
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
