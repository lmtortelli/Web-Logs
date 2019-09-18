<?php

namespace App\Controllers;

use App\Controllers\iController;
use App\Model\Latencie;

class LatenciesController implements iController {
    public function insert($data, $id) {
        $data['idLog'] = $id;
        Latencie::insert($data);
    }
    public function delete($data) {}
    public function update($data) {}
}


?>


