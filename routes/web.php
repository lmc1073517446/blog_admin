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
Route::get('/index_{page?}_{type?}.html', function(App\Http\Controllers\Index\IndexController $index, $page=1, $type='1'){
    return $index->blog($page, $type);
})->where('page','\d+');
//文章列表-不需要排序
Route::get('/index_{page?}.html', function(App\Http\Controllers\Index\IndexController $index, $page=1, $order='id', $sort='desc'){
    return $index->blog($page, $order, $sort);
})->where('page','\d+');
Route::get('/index.html', 'Index\IndexController@blog');
//文章详情
Route::get('/blog_detail_{id?}.html', 'Index\IndexController@blogDetail');
//发表评论
Route::post('/to_comment', 'Index\IndexController@comment');
//关于我
Route::get('/contact.html', 'Index\IndexController@contact');
Route::get('/contact', 'Index\IndexController@contact');









