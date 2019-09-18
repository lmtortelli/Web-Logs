<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Model\Latencie;
use DB;

class LatenciesController implements iController {
    public function insert($data, $id) {
        $data['idLog'] = $id;
        Latencie::insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
    public function getCountByColumn ($key) {}
    public function getAverageLatencies () {
        return DB::table('latencies')
        ->select(DB::raw('AVG(proxy), AVG(request), AVG(kong)'))
        ->get();
    }
}


?>


