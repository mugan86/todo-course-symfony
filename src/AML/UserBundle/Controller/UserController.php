<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AML\UserBundle\Entity\User;
use AML\UserBundle\Form\UserType;


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
      $user = new User();
      $form = $this->createCreateForm($user);
      //return new Response('Acción de añadir usuario');
      return $this->render('AMLUserBundle:Default:add.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(User $entity)
    {
      $form = $this->createForm(new UserType(), $entity, array(
          'action' => $this->generateUrl('aml_user_create'),
          'method' => 'POST'
      ));

      return $form;
    }

    public function createAction(Request $request)
    {
      $user = new User();
      $form = $this->createCreateForm($user);
      $form->handleRequest($request);

      if ($form->isValid())
      {
        $user->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        $user->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        //Encrypt password
        $password = $form->get('password')->getData();

        $encoder = $this->container->get('security.password_encoder');

        $encoded = $encoder->encodePassword($user, $password);

        $user->setPassword($encoded);


        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('aml_user_index');
      }

      return $this->render('AMLUserBundle:Default:add.html.twig', array('form' => $form->createView()));
    }

    public function viewAction($id)
    {
      $repository = $this->getDoctrine()->getRepository('AMLUserBundle:User');

      $user = $repository->find($id);

      if (!$user)
      {
          /*return new Response(
              'No user found for id '.$id
          );*/

      }

      return $this->render('AMLUserBundle:Default:view.html.twig', array('user' => $user));
      //return new Response('Usuario ' . $user->getUsername());
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
