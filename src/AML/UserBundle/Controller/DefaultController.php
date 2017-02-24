<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Admin:index.html.twig');
    }
    public function helloNameAction($name)
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function blankAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Admin:blank.html.twig');
    }

    public function loginAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Admin:login.html.twig');
    }

    public function buttonsAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Admin:buttons.html.twig');
    }

    public function formsAction()
    {
      //, array('name' => 'AMLUserBundle')
        return $this->render('AMLUserBundle:Admin:forms.html.twig');
    }
}
