<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AMLUserBundle:User')->findAll();

        /*$res = 'Lista de usuarios: <br />';

        foreach ($users as $user) {
          # code...
          $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br/>';
        }
        //return new Response($res);
        */
        return $this->render('AMLUserBundle:Default:list.html.twig', array('users' => $users));
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
      //return new Response('Acción de añadir usuario');
      return $this->render('AMLUserBundle:Default:add.html.twig');
    }

    public function viewAction($id)
    {
      $repository = $this->getDoctrine()->getRepository('AMLUserBundle:User');

      $user = $repository->find($id);

      if (!$user)
      {
          return new Response(
              'No user found for id '.$id
          );
      }
      return new Response('Usuario ' . $user->getUsername());
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
