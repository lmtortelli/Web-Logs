<?php

namespace App\Controllers;

interface iController {
    public function insert($data, $id);
    public function delete($data);
    public function update($data);
}

?>