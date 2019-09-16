<?php

namespace App\Controllers;

interface iController {
    public function insert($data);
    public function delete($data);
    public function update($data);
}

?>