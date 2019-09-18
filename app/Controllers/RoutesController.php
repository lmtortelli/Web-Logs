<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Model\Route;
use App\Model\LogsRoute;
use DB;

class RoutesController implements iController {
    public function insert($data, $id) {
        //$route = new Route();
       // $route::create($data->toArray());
       
       $data['methods'] = serialize(json_encode($data['methods']));
       $data['paths'] = json_encode($data['paths']);
       $data['protocols'] = serialize(json_encode($data['protocols']));
       $data['id_service'] = ($data['service']['id']);
       $data['created_at'] = date('Y-m-d h:i:s',$data['created_at']);
       $data['updated_at'] = date('Y-m-d h:i:s',$data['updated_at']);

       unset($data['service']);



        if (Route::find($data['id']) == null ) {
            Route::insert($data);
        }

        $d = array(
            'idLog' => $id,
            'idRoute' => $data['id']
        );
        LogsRoute::insert($d);

    }
    public function delete($data) {}
    public function update($data) {}
    public function getCountByColumn ($key) {}
}


?>


