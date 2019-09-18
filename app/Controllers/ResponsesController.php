<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Model\Response;

use DB;

class ResponsesController implements iController {
    public function insert($data, $id) {
        $data['idLog'] = $id;        
        $data['headers'] = json_encode($data['headers']);

        Response::insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
    public function getCountByColumn ($key) {}
}


?>


