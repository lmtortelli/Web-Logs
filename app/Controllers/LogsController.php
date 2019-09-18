<?php

namespace App\Controllers;

use App\Controllers\iController;
USE DB;

class LogsController implements iController {
    public function insert($data, $id) {
        $data['authenticated_entity'] = $data['authenticated_entity']; 
        $data['started_at'] = date('Y-m-d h:i:s',$data['started_at']);
        return DB::table('logs')->insertGetId($data);
    }
    public function delete($data) {}

    public function update($data) {}


    public function getCountByColumn ($key) {
        return DB::table('logs')
            ->select(DB::raw($key.',count(*)'))
            ->groupBy($key)
            ->get();
    }
}


?>


