<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $inputs = $request->all();
//            $name = '我发的第一份邮件';
//            // Mail::send()的返回值为空，所以可以其他方法进行判断
//            Mail::raw('邮件测试',function($message)use($inputs){
//                $to = '15711383303@163.com';
//                $message ->to($to)->subject('邮件测试');
//            });
            // 返回的一个错误数组，利用此可以判断是否发送成功
//            dd(Mail::failures());
            $user = DB::table('users')->where(['email'=>$inputs['email'],'passwd'=>MD5($inputs['passwd'])])->first();
            if(!empty($user)){
                session(['user_id'=>$user->id, 'user_name'=>$user->username]);
                $result = [
                    'code' => 200,
                    'msg' => '登录成功',
                    'data' => session('jump_url'),
                ];
            }else{
                $result = [
                    'code' => 1001,
                    'msg' => '邮箱或者密码有误',
                    'data' => '',
                ];
            }
            echo json_encode($result);
        }else{
            $url_previous = url()->previous();
            $url_current = url()->current();
            if($url_previous == $url_current){//当前url和上一步url相同，则跳转到首页
                $jump_url = '/';
            }else{
                $jump_url = $url_previous;
            }
            session(['jump_url'=>$jump_url]);
            return view('login');
        }
    }

    //设置滑动验证码
    public function slideCode(){
        echo 233;die;
    }
}