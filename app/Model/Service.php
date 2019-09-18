<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $keyType = "string";
    protected $primary_key = "id";
    protected $fillable = ['id'];
    protected $id;


    public function log()
    {
        return $this->belongsTo('App\Log');
    }
}
