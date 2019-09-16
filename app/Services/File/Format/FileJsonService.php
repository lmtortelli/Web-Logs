<?php

namespace App\Services\File\Format;

use App\Services\File\Template\iFileService;

use App\Controllers\LatenciesController;
use App\Controllers\LogsController;
use App\Controllers\RequestController;
use App\Controllers\ResponsesController;
use App\Controllers\RoutesController;
use App\Controllers\ServicesController;

    class FileJsonService implements iFileService {

        // private $headers = array(
        //     "client_ip" => new LogsController(),
        //     "latencies" => new LatenciesController(),
        //     "service" => new ServicesController(),
        //     "route" => new RoutesController(),
        //     "response" => new ResponsesController(),
        //     "request" => new RequestController(),
        // );


        public function addToDatabase ($data) {
            foreach($this->headers as $key => $value){
                echo (var_dump($data[$key]));
            }
            
        }

    }


?>