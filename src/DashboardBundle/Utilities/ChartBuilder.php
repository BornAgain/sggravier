<?php

namespace DashboardBundle\Utilities;

use Ob\HighchartsBundle\Highcharts\Highchart;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChartBuilder
 *
 * @author itss
 */
class ChartBuilder {

    public function generate(\DashboardBundle\Entity\Widget $widget) {
        $ob = new Highchart();
        $ob->chart->renderTo($widget->getType());  // eg : "linechart"
        $ob->title->text($widget->getName());
        if ($widget->getType() === "linechart") {
            
            
            $series = array(
                array("name" => "Data Serie Name", "data" => array(1, 2, 4, 5, 6, 3, 8))
            );

            $ob->xAxis->title(array('text' => "Horizontal axis title"));
            $ob->yAxis->title(array('text' => "Vertical axis title"));
            $ob->series($series);
        }




        return $ob;
    }

}
