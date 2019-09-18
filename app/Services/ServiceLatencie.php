<?php

namespace App\Services;

use App\Services\Template\iServiceModels;
use App\Controllers\LatenciesController;

    class ServiceLatencie implements iServiceModels {
        public function getAverageLatencies () {
            $latenciesController = new LatenciesController();
            return $latenciesController->getAverageLatencies();
        }

        public function getCountByColumn ($key) {}
    }

?>