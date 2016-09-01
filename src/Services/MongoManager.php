<?php

namespace Services;

/**
 * Description of mongoManager
 *
 * @author itss
 */
class MongoManager {

    public function importCsv($database, $collection, $type, $path) {
        echo exec("python /var/www/html/sigmareports/scripts/mongo_import.py $database $collection $type $path");
    }

}
