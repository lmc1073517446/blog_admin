<?php

namespace App\Admin\Controllers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Article;
use App\Http\Controllers\Controller;



class ArticleController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('文章列表');
            $content->description('文章列表');

            $content->body($this->grid());
        });
    }

    protected function grid()
    {
        return Admin::grid(Article::class, function (Grid $grid) {

            // 直接通过字段名`username`添加列
            $grid->title('标题');
//            // 效果和上面一样
            $grid->column('add_time','发布时间')->display(function($add_time){
                return date('Y-m-d H:i:s', $add_time);
            });
//            //若需要经过复杂逻辑，可使用display方法修改输出
//            $grid->gender('性别')->display(function($data){
//                $result = '';
//                $result = Article::$genderGroup[$data];
//                return $result;
//            });
//            $grid->mobile_phone('手机');
//            $grid->address('通讯地址');
        });
    }
}
