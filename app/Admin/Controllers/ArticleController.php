<?php

namespace App\Admin\Controllers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Models\Article;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\article';

    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('文章列表');
            $content->description('文章列表');

            $content->body($this->grid());
        });
    }
    public function edit($id){
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }
    public function create(){

    }
    public function show($id){
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new article);

        $grid->column('id', 'ID');
        $grid->column('title', '标题');
//        $grid->column('content', __('Content'));
        $grid->column('author_id', '作者');
        $grid->column('add_time', '发布时间')->display(function($add_time){
            return date('Y-m-d H:i:s', $add_time);
        });
        $grid->column('read_num', '月度数');
        $grid->column('love_num', '点赞数');
        $grid->column('collect_num', '收藏数');

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
        return Admin::form(article::class, function (Form $form) {

            $form->text('title', __('Title'));
           // $form->textarea('content', __('Content'));
            $form->simplemde('content');
            $form->number('author_id', __('Author id'));
//            $form->datetime('add_time', '发布时间')->with(function($add_time){
//               return $add_time;
//            })->disable();
            $form->display('add_time', '发布时间')->with(function($add_time){
                return date('Y-m-d H:i:s',$add_time);
            });
            $form->number('read_num', __('Read num'));
            $form->multipleSelect('label','标签')->options(config('constants.ARTICLE_TYPE'));
            $form->number('love_num', __('Love num'));
            $form->number('collect_num', __('Collect num'));
        });
    }
}
