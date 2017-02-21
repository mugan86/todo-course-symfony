<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => 'AMLUserBundle'));
    }
    public function addAction($name)
    {
        return $this->render('AMLUserBundle:Contact:add.html.twig', array('form' => $form->createView()));
    }
}
