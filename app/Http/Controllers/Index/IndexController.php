<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\CommentService;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public $article_model;
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
    public function index(){
        return view('index');
    }
    /**
     * 首页
     * @params int page 页码
     * */
    public function blog($page=1, $type=0){
        //TDK
        $header['title'] = "文章列表-MC的博客";
        $header['keywords'] = "博客,个人博客,MC个人博客,满成的个人博客,PHP,Laravel,Lara博客";
        $header['description'] = "";
        $header['current_page'] = 'blog_list';
        if($type>0){
            $whereRaw = "find_in_set($type, label)";
            $params = ['type'=>$type];
        }

        //文章列表
        $articles = $this->articleModel->getPageList([
            'whereRaw' => isset($whereRaw)?$whereRaw:'',
            'orderBy' => 'id',
            'sort' => 'desc',
            'size' => 4,
            'pageUrl' => 'blog_',
            'page' => $page,
            'params' => isset($params)?$params:[],
        ]);

        return view('blog', ['header'=> $header, 'articles' => $articles, 'article_type' => getArticleLabel()]);
    }
    /**
     * 文章详情页
     * @params int id 文章id
     * */
    public function blogDetail($id){
        //TDK
        $header['title'] = "文章详情-MC的博客";
        $header['keywords'] = "";
        $header['description'] = "";
        $header['current_page'] = 'blog_list';

        //获取当前文章内容
        $article = $this->articleModel->getOne(['condition'=>['id'=>$id]]);
        $article->content = \EnjellyDown::markdown($article->content);//解析markdown语法
        //获取下一篇文章
        $articleNext = $this->articleModel->getOne(['condition'=>[ 'AND',['id', '>', $id]],'sort' => 'asc']);
        //获取上一篇文章
        $articlePrev = $this->articleModel->getOne(['condition'=>['AND',['id', '<', $id]]]);
        //获取评论列表
        $masterComment = $this->commentService->articleCommentLists($id);

        return view('blog_detail',[
            'header'=> $header,
            'article'=>$article,
            'article_next'=>$articleNext,
            'article_prev'=>$articlePrev,
            'comment_list' => $masterComment,
            'article_type' => getArticleLabel(),
        ]);
    }
    /**
     * 关于我
     * */
    public function contact(){
        //TDK
        $header['title'] = "关于我-MC的博客";
        $header['keywords'] = "";
        $header['description'] = "";
        $header['current_page'] = 'contact';

        return view('contact',['header'=> $header]);
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
            'content' =>'required|numeric',
            'pid' =>'required',
            'master_slave' =>'required|numeric',
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
