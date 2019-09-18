<?php

namespace App\Services;

use App\Services\Template\iServiceModels;
use App\Controllers\LogsController;

    class ServiceLogs implements iServiceModels {
        public function getCountByColumn ($key) {
            $logsController = new LogsController();
            return $logsController->getCountByColumn($key);
        }
    }

?>