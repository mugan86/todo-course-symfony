<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new Response('Bienvenido a mi módulo de usuarios');
    }
    public function showUserAction($id)
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => '---> Show user ' . $id . ' info!'));
    }

    public function articlesAction($page)
    {
      return new Response('Este es mi artículo de la página ' . $page);
    }

    public function addAction()
    {
      return new Response('Acción de añadir usuario');
    }

    public function viewAction($id)
    {
      return new Response('Acción de ver usuario con ID ' . $id);
    }

    public function editAction($id)
    {
      return new Response('Acción de editar usuario con ID ' . $id);
    }

    public function deleteAction($id)
    {
      return new Response('Acción de eliminar usuario con ID ' . $id);
    }
}
