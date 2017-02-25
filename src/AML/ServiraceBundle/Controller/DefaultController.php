<?php

namespace AML\ServiraceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AML\ServiraceBundle\Entity\Town;

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
        $em = $this->getDoctrine()->getManager();

        //Show alls towns (not recommended!)
        //$towns = $em->getRepository('AMLServiraceBundle:Town')->findAll();

        // query for multiple products matching the given name, ordered by price
        $towns = $em->getRepository('AMLServiraceBundle:Town')->findBy(
            array('probintzia' => 'Gipuzkoa'),
            array('izena' => 'ASC')
        );


        /*$query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Product p
            WHERE p.price > :price
            ORDER BY p.price ASC'
        )->setParameter('price', 19.99);

        $town = $query->getResult();*/

        return $this->render('AMLServiraceBundle:Default:towns.html.twig', array('towns' => $towns));
    }
}
