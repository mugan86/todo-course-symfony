<?php

namespace AML\ServiraceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMLServiraceBundle:Default:index.html.twig');
    }

    public function racesAction()
    {
        return $this->render('AMLServiraceBundle:Default:races.html.twig');
    }

    public function servicesAction()
    {
        return $this->render('AMLServiraceBundle:Default:services.html.twig');
    }

    public function townsAction()
    {
        return $this->render('AMLServiraceBundle:Default:towns.html.twig');
    }
}
