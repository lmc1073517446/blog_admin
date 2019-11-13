<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::match(['post','get'], '/to-login', 'Index\LoginController@login');
//首页
Route::get('/', 'Index\IndexController@index');

//文章列表-带排序
Route::get('/blog_{page?}_{type?}.html', function(App\Http\Controllers\Index\ArticlesController $index, $page=1, $type='1'){
    return $index->index($page, $type);
})->where('page','\d+');
//文章列表-不需要排序
Route::get('/blog_{page?}.html', function(App\Http\Controllers\Index\ArticlesController $index, $page=1, $order='id', $sort='desc'){
    return $index->index($page, $order, $sort);
})->where('page','\d+');
Route::get('/blog.html', 'Index\ArticlesController@index');

//文章详情
Route::get('/blog_detail_{id?}.html', 'Index\ArticlesController@blogDetail');
Route::get('/blog_content_{id?}.html', 'Index\ArticlesController@blogContent');

//发表评论
Route::post('/to_comment', 'Index\CommentsController@comment');

//关于我
Route::get('/contact.html', 'Index\ContactController@index');
Route::get('/contact', 'Index\IndexController@index');



Route::get('/swoole', 'Index\IndexController@swoole');

//登录
Route::get('/github-authorize', 'Index\LoginController@ghAuthorize');
Route::get('/github-login', 'Index\LoginController@ghLogin');












