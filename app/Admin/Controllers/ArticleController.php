<?php

namespace App\Admin\Controllers;

use App\Models\article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Content;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\article';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new article);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
//        $grid->column('content', __('Content'));
        $grid->column('author_id', __('Author id'));
        $grid->column('add_time', __('Add time'))->display(function($add_time){
            return date('Y-m-d H:i:s', $add_time);
        });
        $grid->column('read_num', __('Read num'));
        $grid->column('love_num', __('Love num'));
        $grid->column('collect_num', __('Collect num'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {

        $show = new Show(article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('author_id', __('Author id'));
        $show->field('add_time', __('Add time'));
        $show->field('read_num', __('Read num'));
        $show->field('love_num', __('Love num'));
        $show->field('collect_num', __('Collect num'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new article);

        $form->text('title', __('Title'));
        $form->textarea('content', __('Content'));
        $form->number('author_id', __('Author id'));
        $form->number('add_time', __('Add time'));
        $form->number('read_num', __('Read num'));
        $form->number('love_num', __('Love num'));
        $form->number('collect_num', __('Collect num'));

        return $form;
    }
}
