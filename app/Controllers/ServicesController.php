<?php

namespace App\Controllers;

use App\Controllers\iController;
use DB;

class ServicesController implements iController {
    public function insert($data, $id) {
        $data['idLog'] = $id;
        unset($data['created_at']);
        unset($data['updated_at']);

        DB::table('services')->insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
}


?>


