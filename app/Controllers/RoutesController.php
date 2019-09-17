<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Route;
use DB;

class RoutesController implements iController {
    public function insert($data, $id) {
        //$route = new Route();
       // $route::create($data->toArray());
       
       $data['methods'] = json_encode($data['methods']);
       $data['paths'] = json_encode($data['paths']);
       $data['protocols'] = json_encode($data['protocols']);
       $data['id_service'] = json_encode($data['service']['id']);
       $data['created_at'] = date('Y-m-d h:i:s',$data['created_at']);
       $data['updated_at'] = date('Y-m-d h:i:s',$data['updated_at']);
       $data['idRoute'] = $data['id'];
       $data['idLog'] = $id;

       unset($data['service']);
       unset($data['id']);

       print_r($data);
       DB::table('routes')->insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
}


?>


