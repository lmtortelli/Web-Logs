<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function log()
    {
        return $this->belongsTo('App\Log');
    }
}
