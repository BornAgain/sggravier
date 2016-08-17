<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Entities;


/**
     * @Route("/entities")
     */


class EntitiesController extends Controller
{
    /**
     * @Route("/add",name="ab_entities_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {   
        $entity = new \AdminBundle\Entity\Entities();
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\EntitiesType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ab_entities_list', array('id' => $entity->getId())));
        }
        return $this->render('AdminBundle:Entities:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    

    /**
     * @Route("/list", name="ab_entities_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Entities")->findAll();
        
        return $this->render('AdminBundle:Entities:list.html.twig', array(
           'entities' => $entities
        ));
    }

    
    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="ab_entities_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Entities")->find($id);
  
        return $this->render('AdminBundle:Entities:see.html.twig', array(
            "entity" => $entity
        ));
    }
    
    
    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"},name="ab_entities_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Entities")->find($id);
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\EntitiesType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setUpdateDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ab_entities_update', array('id' => $entity->getId())));
        }

        return $this->render('AdminBundle:Entities:update.html.twig', array(
            'form' => $form->createView()
        ));
    }


}