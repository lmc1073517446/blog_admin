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
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1:9502");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, '啊哈哈哈哈哈');
        curl_exec($curl);
        curl_close($curl);
    }
}
