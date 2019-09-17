<?php

namespace App\Controllers;

use App\Controllers\LatenciesController;
use App\Controllers\LogsController;
use App\Controllers\RequestController;
use App\Controllers\ResponsesController;
use App\Controllers\RoutesController;
use App\Controllers\ServicesController;

class ControllerProvider {
    public function builderController($header){
        if($header ==='client_ip'){
            return new LogsController();
        } else if($header === 'latencies') {
            return new LatenciesController();
        } else if($header === 'service') {
            return new ServicesController();
        } else if($header === 'response') {
            return new ResponsesController();
        } else if($header === 'route') {
            return new RoutesController();
        } else if($header === 'request') {
            return new RequestController();
        }
    }
}

?>