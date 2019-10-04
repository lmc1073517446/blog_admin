<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
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
