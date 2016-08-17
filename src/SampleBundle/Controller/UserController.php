<?php

namespace SampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller {

    /**
     * @Route("/add",name="sb_user_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request) {
        $entity = new \SampleBundle\Entity\User();
        $form = $this->get('form.factory')->create(new \SampleBundle\Form\UserType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('sb_user_add', array('id' => $entity->getId())));
        }

        return $this->render('SampleBundle:User:add.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/update/{id}", name="sb_user_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request) {
        $entity = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Entities")->find($id);
        $form = $this->get('form.factory')->create(new \SampleBundle\Form\UserType(), $entity);

        if ($form->handleRequest($request)->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('sb_user_add', array('id' => $entity->getId())));
        }

        return $this->render('SampleBundle:User:update.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/list", name="sb_user_list")
     */
    public function ListAction() {
        $entities = $this->getDoctrine()->getManager()->getRepository("SampleBundle:User")->findAll();
        return $this->render('SampleBundle:User:list.html.twig', array(
                    'entities' => $entities
        ));
    }

    /**
     * @Route("/See/{id}", name="sb_user_see")
     */
    public function SeeAction($id) {
        $entity = $this->getDoctrine()
                ->getRepository('SampleBundle:User')
                ->find($id);


        return array(
            "entity" => $entity
                // ...
        );
    }

}
