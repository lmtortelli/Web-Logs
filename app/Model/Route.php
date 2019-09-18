<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{

    protected $fillable = ['created_at'];

    public function log()
    {
        return $this->belongsTo('App\Log');
    }

    public function service()
    {
        return $this->hasOne('App\Service');
    }
}
