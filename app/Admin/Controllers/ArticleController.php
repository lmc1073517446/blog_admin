<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use App\Models\Article;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class ArticleController extends AdminController
{
    /**
     * 页面主题
     *
     * @var string
     */
    protected $title = '文章列表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        //https://laravel-admin.org/docs/zh/model-grid
        $grid = new Grid(new Article);
        //隐藏查看按钮
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->disableExport();//禁用导出按钮
        $grid->disableColumnSelector();//禁用行选择器按钮


        $grid->column('id', 'ID');
        $grid->column('title', '标题');
//        $grid->column('content', __('Content'));
        $grid->column('author_name', '作者');
        $grid->column('add_time', '发布时间');
        $grid->column('read_num', '月度数');
        $grid->column('love_num', '点赞数');
        $grid->column('collect_num', '收藏数');


        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            //$filter->disableIdFilter();
            $filter->like('title','标题');
            $filter->like('content','内容');
        });

        //$grid->expandFilter();//搜索默认展开
        return $grid;
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */

    protected function form($id=null)
    {
        $form = new Form(new Article);

        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();//禁用查看按钮
        });

        $form->text('title', __('标题'))->rules('required');
        $form->editormd('content','内容')->rules('required');
        $form->text('author_name', __('作者'))->rules('required');
        $form->number('read_num', __('阅读数量'))->default(0)->rules('required');
        //$form->multipleSelect('label','标签')->options(config('constants.ARTICLE_TYPE'))->rules('required');
        $form->tags('label');
        $form->number('love_num', __('点赞数'))->default(0)->rules('required');
        $form->number('collect_num', __('收藏数'))->default(0)->rules('required');
       // $form->number('add_time')->hide();
        $form->datetime('add_time', __('发布时间'))->default(date('Y-m-d H:i:s'))->rules('required');
        //$form->ignore(['column1', 'column2', 'column3']);

        return $form;
    }

}
