<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Default:admin.html.twig');
    }
    public function helloNameAction($name)
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
