<?php

namespace AML\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AML\UserBundle\Entity\Contact;
use AML\UserBundle\Form\ContactType;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('AMLUserBundle:Default:index.html.twig', array('name' => 'AMLUserBundle'));
    }
    public function addAction()
    {
        $contact = new Contact();
        $form = $this->createCreateForm($contact);

        return $this->render('AMLUserBundle:Contact:add.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Contact $entity)
    {
      $form = $this->createForm(ContactType::class, $entity, array(
          'action' => $this->generateUrl('aml_contact_create'),
          'method' => 'POST'
      ));

      return $form;
    }

    public function createAction(Request $request)
    {
      $contact = new Contact();
      $form = $this->createCreateForm($contact);
      $form->handleRequest($request);

      if ($form->isValid())
      {
        $contact->setDatetime(new \DateTime(date('Y-m-d H:i:s')));

        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        return $this->redirectToRoute('aml_user_index');
      }

      return $this->render('AMLUserBundle:Contact:add.html.twig', array('form' => $form->createView()));
    }
}
