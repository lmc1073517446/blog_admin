<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends BasicModel
{
    use SoftDeletes;
    public $table='users';

    public $timestamps = false;

}
