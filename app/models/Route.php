<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function log()
    {
        return $this->belongsTo('App\Log');
    }

    public function service()
    {
        return $this->hasOne('App\Service');
    }
}
