<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class ContactController extends Controller
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
     * 关于我
     * */
    public function index(){
        //TDK
        $header['title'] = "关于我-MC的博客";
        $header['keywords'] = "";
        $header['description'] = "";
        $header['current_page'] = 'contact';

        return view('contact',['header'=> $header]);
    }
}
