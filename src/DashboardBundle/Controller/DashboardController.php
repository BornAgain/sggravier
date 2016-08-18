<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * @Route("/dashboard")
 */
class DashboardController extends Controller {

    /**
     * @Route("/add", name="db_dashboard_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request) {
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
    public function homeAction() {

        $returnData = array();
        $entity = new \DashboardBundle\Entity\Dashboard();
        $widget = new \DashboardBundle\Entity\Widget();

        $em2 = $this->getDoctrine()->getManager();
        $entity = $em2->getRepository("DashboardBundle:Dashboard")->find(1);
        foreach ($entity->getWidget() as $key => $widget) {
            
            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare($widget->getQuery());
            $statement->execute();
            $results = $statement->fetchAll();


            $data_array = array();

            foreach ($results as $value_d) {
                $data_array[] = intval($value_d['value_l']);
            }
            $ob = new Highchart();
            $ob->chart->renderTo($widget->getType());  // eg : "linechart"
            $ob->title->text($widget->getName());

            if ($widget->getType() === "linechart") {
                // Chart
                $series = array(
                    array("name" => "Data Serie Name", "data" => $data_array)
                );


                $ob->xAxis->title(array('text' => "Horizontal axis title"));
                $ob->yAxis->title(array('text' => "Vertical axis title"));
                $ob->series($series);
            }      
            
            $returnData['chart'.($key+1)] = $ob;
        }


        return $this->render('DashboardBundle:Dashboard:home.html.twig', $returnData);
    }

    /**
     * @Route("/list", name="db_dashboard_list")
     */
    public function listAction() {
        $entities = $this->getDoctrine()->getManager()->getRepository("DashboardBundle:Dashboard")->findAll();

        return $this->render('DashboardBundle:Dashboard:list.html.twig', array(
                    'entities' => $entities
        ));
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="db_dashboard_see")
     */
    public function seeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("DashboardBundle:Dashboard")->find($id);

        return $this->render('DashboardBundle:Dashboard:see.html.twig', array(
                    "entity" => $entity
        ));
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"}, name="db_dashboard_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request) {
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
