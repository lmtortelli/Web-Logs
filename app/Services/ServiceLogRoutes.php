<?php

namespace App\Services;

use App\Services\Template\iServiceModels;
use App\Controllers\LogsRouteController;

    class ServiceLogRoutes implements iServiceModels {
        public function getCountByColumn ($key) {
            $logsRouteController = new LogsRouteController();
            return $logsRouteController->getCountByColumn($key);
        }
    }

?>