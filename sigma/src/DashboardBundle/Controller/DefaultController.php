<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ob\HighchartsBundle\Highcharts\Highchart;

class DefaultController extends Controller {

    /**
     * @Route("/",name="dh_dashboard")
     */
    public function indexAction() {

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


            $ob = new Highchart();
            $ob->chart->renderTo('widget' . ($key + 1));  // eg : "linechart"
            $ob->title->text($widget->getName());

            if ($widget->getType() === "linechart") {

                foreach ($results as $value_d) {
                    $data_array[] = intval($value_d['value_l']);
                }
                // Chart
                $series = array(
                    array("name" => "Data Serie Name", "data" => $data_array)
                );

                $ob->xAxis->title(array('text' => "Horizontal axis title"));
                $ob->yAxis->title(array('text' => "Vertical axis title"));
                $ob->series($series);
            } elseif ($widget->getType() === "piechart") {
                $ob->plotOptions->pie(array(
                    'allowPointSelect' => true,
                    'cursor' => 'pointer',
                    'dataLabels' => array('enabled' => false),
                    'showInLegend' => true
                ));

                foreach ($results as $value_d) {
                    $data_array[] = array($value_d['name'], intval($value_d['value_l']));
                }

                $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data_array)));
            }

            $returnData['chart' . ($key + 1)] = $ob;
        }


        $returnData['countWidgets'] = \count($entity->getWidget());



        return $this->render('DashboardBundle:Dashboard:home.html.twig', $returnData);
    }

}
