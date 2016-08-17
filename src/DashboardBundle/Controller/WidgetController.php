<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DashboardBundle\Entity\Dashboard;



/**
     * @Route("/widget")
     */



class WidgetController extends Controller
{
    /**
     * @Route("/add", name="db_widget_add")
     */
    
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \DashboardBundle\Entity\Widget();
        $form = $this->get('form.factory')->create(new \DashboardBundle\Form\WidgetType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('db_widget_list', array('id' => $entity->getId())));
        }
            
        return $this->render('DashboardBundle:Widget:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/list", name="db_widget_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("DashboardBundle:Widget")->findAll();
        
        return $this->render('DashboardBundle:Widget:list.html.twig', array(
           'entities' => $entities
        ));
    }
    
    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="db_widget_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("DashboardBundle:Widget")->find($id);
  
        return $this->render('DashboardBundle:Widget:see.html.twig', array(
            "entity" => $entity
        ));
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"}, name="db_widget_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("DashboardBundle:Widget")->find($id);
        $form = $this->get('form.factory')->create(new \DashboardBundle\Form\WidgetType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('db_widget_list', array('id' => $entity->getId())));
        }

        return $this->render('DashboardBundle:Widget:update.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
