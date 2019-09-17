<?php

namespace App\Controllers;

use DB;

use App\Controllers\iController;

class RequestController implements iController {
    public function __constructor() {}
    public function insert($data, $id) {
        
        $data['idLog'] = $id;
        $data['headers'] = json_encode($data['headers']);
        $data['querystring'] = json_encode($data['querystring']);

        DB::table('requests')->insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
}

?>


