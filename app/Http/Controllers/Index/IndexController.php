<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use swoole_client;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //nothing...
    }
    /**
     * 首页
     * */
    public function index(){
        return view('index');
    }

    public function swoole(){
        $client = new swoole_client(SWOOLE_SOCK_TCP);
        //连接到服务器
        if (!$client->connect('127.0.0.1', 9502, 0.5))
        {
            die("connect failed.");
        }
        //向服务器发送数据
        if (!$client->send("hello world"))
        {
            echo '发送失败';
        }
    }
}
