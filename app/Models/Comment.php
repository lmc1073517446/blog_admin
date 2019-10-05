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

    /**
     * @var string 主键
     */
    protected $primaryKey = 'ID';


}
