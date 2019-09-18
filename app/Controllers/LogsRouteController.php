<?php

namespace App\Controllers;

use DB;

use App\Controllers\iController;
use App\Model\Request;

class LogsRouteController implements iController {
    public function __constructor() {}
    public function insert($data, $id) {}
    public function delete($data) {}
    public function getCountByColumn ($key) {
        return DB::table('logs_routes')
            ->select(DB::raw('services.id,services.name, count(*)'))
            ->join('routes','routes.id', '=', 'logs_routes.idRoute')
            ->join('services','services.id', '=', 'routes.id_service')
            ->groupBy('logs_routes.'.$key)
            ->get();
    }
    public function update($data) {}
}

?>


