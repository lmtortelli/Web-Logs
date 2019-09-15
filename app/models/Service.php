<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $keyType = "string";
    protected $primary_key = "id_service";

    public function log()
    {
        return $this->belongsTo('App\Log');
    }
}
