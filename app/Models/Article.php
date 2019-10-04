<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;


class Article extends BasicModel
{
    public $table='article';

    public $timestamps = false;

    public function getlabelAttribute($value)
    {
        return explode(',', $value);
    }

    public function setlabelAttribute($value)
    {
        $this->attributes['label'] = implode(',', $value);
    }

}
