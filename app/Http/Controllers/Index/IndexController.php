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
        //\Redis::zAdd('article', 2, 'ceshi');
        //\Redis::zIncrby('article',1, 'string:article_like:1');
        //echo \Redis::zScore('article','string:article_like:1');

        return view('index');
    }

    public function swoole(){
//        $curl = curl_init();
//        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1:9502");
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curl, CURLOPT_HEADER, 1);
//        curl_setopt($curl, CURLOPT_POST, 1);
//        curl_setopt($curl, CURLOPT_POSTFIELDS, ['info'=>'ahhhhhhh']);
//        curl_exec($curl);
//        curl_close($curl);

        $client = new swoole_client(SWOOLE_SOCK_TCP);
        //连接到服务器
        if (!$client->connect('127.0.0.1', 9501, 5)) {
            exit("connect failed. Error: {$client->errCode}\n");
        }
        $res = $client->send("hello world\n");

        echo $client->recv();
        $client->close();
    }
}
