<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends BasicModel
{
    use SoftDeletes;
    public $table='article';

    public $timestamps = false;


    public function getTagAttribute($value)
    {
        return explode(',', $value);
    }


}
