<?php

namespace App\Models;

use App\Models\BasicModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends BasicModel
{
    use SoftDeletes;
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'comment';

    public $timestamps = false;


    /**
     * @var string 主键
     */
    protected $primaryKey = 'ID';


    /**
     * 获得与用户关联的电话记录。
     */
//    public function avatar()
//    {
//        return $this->hasOne('App\Models\Users', 'id', 'comm_uid');
//    }

    public function user() {
        return $this->belongsTo('App\User','comm_uid','id');
    }

}
