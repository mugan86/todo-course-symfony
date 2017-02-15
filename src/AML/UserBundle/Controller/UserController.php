<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => 'AMLUserBundle/UserController Index!'));
    }
    public function showUserAction($id)
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => '---> Show user ' . $id . ' info!'));
    }
}
