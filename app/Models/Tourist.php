<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Libraries\MacAddr;

class Tourist extends BasicModel
{
    use SoftDeletes;
    public $table='visits';

    public $timestamps = false;

    public function recordRourist(){
        //self::toSave();

    }



}
