<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latencie extends Model
{
    public function log()
    {
        return $this->belongsTo('App\Log');
    }
}
