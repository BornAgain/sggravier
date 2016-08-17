<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Repository\UsersRepository;
use AdminBundle\Entity\Users;



/**
     * @Route("/users")
     */

class UsersController extends Controller
{
    /**
     * @Route("/add", name="ab_users_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \AdminBundle\Entity\Users();
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\UsersType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setUpdateDate(new \DateTime());
            $entity->setCreateDate(new \DateTime());
            $entity->setChangedPassword(true);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ab_users_list', array('id' => $entity->getId())));
        }
        return $this->render('AdminBundle:Users:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/list", name="ab_users_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Users")->findAll();
        
        return $this->render('AdminBundle:Users:list.html.twig', array(
           'entities' => $entities
        ));
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="ab_users_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Users")->find($id);
  
        return $this->render('AdminBundle:Users:see.html.twig', array(
            "entity" => $entity
        ));
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"}, name="ab_users_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Users")->find($id);
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\UsersType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setUpdateDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ab_users_see', array('id' => $entity->getId())));
        }

        return $this->render('AdminBundle:Users:update.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
