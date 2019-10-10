<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\CommentService;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{

    public $articleModel;
    public $commentService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CommentService $commentService)
    {
        $this->articleModel = new Article();
        $this->commentService = $commentService;
    }
    /**
     * 发表评论
     * @param int a_id 文章id
     * @param string content 评论内容
     * @param int pid 评论父id
     * @param int reply_uid 回复对象uid
     * @param string reply_user_name 回复对象用户名
     * @param int master_slave 主从评论  主评论-0  从评论为主评论id
     * */
    public function comment(Request $request){
        $inputs = $request->all();
        $rules = [
            'a_id' => 'required|numeric',
            'content' =>'required',
            'pid' =>'required|numeric',
            'master_slave' =>'required|numeric',
           // 'reply_user_name'=>'',
        ];
        $validator = Validator::make($inputs,$rules,['参数有误']);
        if($validator->fails()){
            return ['message'=>$validator->errors()->all()[0],'code'=>40001];
        }

        $data = $this->commentService->toComment($inputs);
        if($data['id']){
            return ['message'=>'成功','code'=>200, 'data'=> $data];
        }
        return ['message'=>'失败','code'=>40001];

    }
}
