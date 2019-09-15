<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function log()
    {
        return $this->belongsTo('App\Log');
    }
}
