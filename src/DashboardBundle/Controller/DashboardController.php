<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



/**
     * @Route("/dashboard")
     */



class DashboardController extends Controller
{
    /**
     * @Route("/add", name="db_dashboard_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \DashboardBundle\Entity\Dashboard();
        $form = $this->get('form.factory')->create(new \DashboardBundle\Form\DashboardType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setupdateDate(new \DateTime());
            $entity->setCreationDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('db_dashboard_list', array('id' => $entity->getId())));
        }
            
        return $this->render('DashboardBundle:Dashboard:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/home", name="db_dashboard_home")
     */
    public function homeAction()
    {
 // Chart
    $series = array(
        array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
    );

    $ob = new \Ob\HighchartsBundle\Highcharts\Highchart();
    $ob->chart->renderTo('piechart');  // The #id of the div where to render the chart
    $ob->title->text('Chart Title');
    $ob->xAxis->title(array('text'  => "Horizontal axis title"));
    $ob->yAxis->title(array('text'  => "Vertical axis title"));
    $ob->series($series);
        
        return $this->render('DashboardBundle:Dashboard:home.html.twig', array(
           'chart1' => $ob,
            'chart2' => $ob,
            'chart3' => $ob,
            'chart4' => $ob
                
        ));
    }
    
    /**
     * @Route("/list", name="db_dashboard_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("DashboardBundle:Dashboard")->findAll();
        
        return $this->render('DashboardBundle:Dashboard:list.html.twig', array(
           'entities' => $entities
        ));
    }
    
    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="db_dashboard_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("DashboardBundle:Dashboard")->find($id);
  
        return $this->render('DashboardBundle:Dashboard:see.html.twig', array(
            "entity" => $entity
        ));
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"}, name="db_dashboard_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("DashboardBundle:Dashboard")->find($id);
        $form = $this->get('form.factory')->create(new \DashboardBundle\Form\DashboardType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setupdateDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('db_dashboard_see', array('id' => $entity->getId())));
        }

        return $this->render('DashboardBundle:Dashboard:update.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
