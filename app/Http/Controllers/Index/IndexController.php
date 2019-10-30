<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

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
        $ws = new \swoole_websocket_server("0.0.0.0", 9502);
        $ws->push(1, "asfafaf");
    }
}
