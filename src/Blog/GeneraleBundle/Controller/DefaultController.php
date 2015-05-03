<?php

namespace Blog\GeneraleBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blog\GeneraleBundle\Entity\Animal;
use Blog\GeneraleBundle\Form\AnimalType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $animaux = $em->getRepository('GeneraleBundle:Animal')->findAll();
        return $this->render('GeneraleBundle:Default:index.html.twig', array(
            'animaux' => $animaux
        ));
    }

    public function ajouterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $a = new Animal();

        /*$a->setTitre("MIMI_1")
          ->setDescription("un chat méchant")
          ->setUrl("http://blogs.ne10.uol.com.br/social1/files/2014/10/grumpy8.jpg")
          ->setDate(new \DateTime());*/

        $a = new Animal();
        $form = $this->createForm(new AnimalType(), $a);

        $request = $this->getRequest();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            $data = $form->getData();

            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl("generale_homepage"));
        }

        /*$form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $registration = $form->getData();

            $em->persist($registration->getUser());
            $em->flush();

            return $this->redirect(...);
        }*/

        //$em->persist($a);
        //$em->flush();

        return $this->render('GeneraleBundle:Default:ajouter.html.twig', array(
            'form' => $form->createView()

        ));
    }
}