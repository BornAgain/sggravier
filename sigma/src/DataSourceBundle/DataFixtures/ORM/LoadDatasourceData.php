<?php

namespace DataSourceBundle\DataFixtures\ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediaFixture
 *
 * @author inouss
 */
class LoadDatasourceData implements \Doctrine\Common\DataFixtures\FixtureInterface
{

    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $tads = array(
            "balgen"=>"Balance Général",
            "product"=>"Product",
        );
        
        
        $tabData = "";
        
        foreach ($tads as $key => $value) {
            $obj = new \DataSourceBundle\Entity\Datasource();
            $obj->setUpdateDate(new \DateTime());
            $obj->setCreateDate(new \DateTime());
            $obj->setTitle($key);
            $obj->setName($value);
            $obj->setEnabled(true);
            $manager->persist($obj);
            $manager->flush();
            
            $tabData = $obj;
        }
        
        $details = new \DataSourceBundle\Entity\DatasourceDetail();
        $details->setName("Contract");
        $details->setEnabled(TRUE);
        $details->setRank(1);
        $details->setType("string");
        $details->setDate(new \DateTime());
        $details->setDatasource($tabData);
        $manager->persist($details);
        $manager->flush();
        
    }

}
