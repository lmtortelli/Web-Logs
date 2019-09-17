<?php

namespace App\Controllers;

use App\Controllers\iController;

use DB;

class ResponsesController implements iController {
    public function insert($data, $id) {
        $data['idLog'] = $id;        
        $data['headers'] = json_encode($data['headers']);
        print_r($data);

        return DB::table('responses')->insert($data);


    }
    public function delete($data) {}
    public function update($data) {}
}


?>


