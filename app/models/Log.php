<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $primaryKey = 'logId';
    public $incremeting = true;

    public function request(){
        return $this->hasOne('App\Request');
    }

    public function response(){
        return $this->hasOne('App\Response');
    }

    public function route(){
        return $this->hasOne('App\Route');
    }

    public function service(){
        return $this->hasOne('App\Service');
    }

    public function latencie(){
        return $this->hasOne('App\Latencie');
    }



}
