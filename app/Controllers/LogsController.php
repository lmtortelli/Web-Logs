<?php

namespace App\Controllers;

use App\Controllers\iController;
use DB;

class LogsController implements iController {
    public function insert($data, $id) {
        $data['authenticated_entity'] = json_encode($data['authenticated_entity']); 
        return DB::table('logs')->insertGetId($data);
    }
    public function delete($data) {}
    public function update($data) {}
}


?>


