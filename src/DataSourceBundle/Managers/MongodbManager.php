<?php
namespace DataSourceBundle\Managers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MongodbManager
 *
 * @author inouss
 */
class MongodbManager {
    
    private $connection;
    private $db;
    
    public function connect() {
        $url = "mongodb://example.com";
        $database ="sigmareports_db";
        
        
        $this->connection = new \MongoClient( $url );
        $db = $this->connection->selectDB($database);
        
        
    }
    
    
}
