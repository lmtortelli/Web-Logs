<?php

namespace App\Services\File\Format;

use App\Services\File\Template\iFileService;

use App\Controllers\ControllerProvider;

    class FileJsonService implements iFileService {
        
        private $headers = array(
            "service",
            "response" ,
            "latencies",
            "request" ,
            "route",
        );

        

        public function addToDatabase ($data) {
            $log = array(
                "client_ip" => $data['client_ip'],
                "authenticated_entity" => $data['authenticated_entity']['consumer_id']['uuid'],
                "upstream_uri" => $data['upstream_uri'],
                "started_at" => $data['started_at']
            );

            $provider = new ControllerProvider();
            $idLog = $provider->builderController('client_ip',NULL)->insert($log,NULL);
            foreach($this->headers as $key){
                $provider->builderController($key)->insert($data[$key], $idLog);
            }
            
        }

    }


?>