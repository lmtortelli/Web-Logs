<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Model\Service;
use DB;

class ServicesController implements iController {

    public function insert($data, $id) {
        $data['created_at'] = date('Y-m-d h:i:s',$data['created_at']);
        $data['updated_at'] = date('Y-m-d h:i:s',$data['updated_at']);
        
        if (Service::find($data['id']) == null ) {
            Service::insert($data);
        }
    }
    public function delete($data) {}
    public function update($data) {}
}


?>


