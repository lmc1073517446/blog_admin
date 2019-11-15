<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\CommentService;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{

    public $articleModel;
    public $articleService;
    public $commentService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CommentService $commentService, ArticleService $articleService)
    {
        $this->articleModel = new Article();
        $this->articleService = $articleService;
        $this->commentService = $commentService;
    }
    /**
     * 文章列表
     * @params int page 页码
     * @params int type 标签
     * */
    public function index($page=1, $type=0){
        //TDK
        $header['title'] = "文章列表-MC的博客";
        $header['keywords'] = "博客,个人博客,MC个人博客,满成的个人博客,PHP,Laravel,Lara博客";
        $header['description'] = "";
        $header['current_page'] = 'blog_list';
        $user = session('user');
        //获取文章列表数据
        $articles = $this->articleService->getPageBlogList($page, $type);
        //热门文章列表
        $hot_articles = $this->articleModel->getList([
            'orderBy' => 'read_num',
            'sort' => 'desc',
            'size' => 10,
        ]);

        return view('blog', ['header'=> $header, 'articles' => $articles, 'article_type' => getArticleLabel(),'hot_article'=>$hot_articles]);
    }
    /**
     * 文章详情页
     * @params int id 文章id
     * */
    public function blogDetail($id, Request $request){
        //        echo \Redis::zScore('article','string:article_like:1');
        //获取当前文章内容
        $article = $this->articleService->getBlogDetail($id);
        $request->session()->flash('articleContent_'.$id, $article);//将数据闪存到session
        //获取下一篇文章
        $articleNext = $this->articleModel->getOne(['condition'=>[ 'AND',['id', '>', $id]],'sort' => 'asc']);
        //获取上一篇文章
        $articlePrev = $this->articleModel->getOne(['condition'=>['AND',['id', '<', $id]]]);
        //获取评论列表
        $masterComment = $this->commentService->articleCommentLists($id);
        //热门文章列表
        $hot_articles = $this->articleModel->getList([
            'orderBy' => 'read_num',
            'sort' => 'desc',
            'size' => 10,
        ]);

        //TDK
        $header['title'] = $article['title']."-MC的博客";
        $header['keywords'] = $article['title'];
        $header['description'] = $article['title'];
        $header['current_page'] = 'blog_list';

        return view('blog_detail',[
            'header'=> $header,
            'article'=>$article,
            'article_next'=>$articleNext,
            'article_prev'=>$articlePrev,
            'comment_list' => $masterComment,
            'article_type' => getArticleLabel(),
            'hot_article' => $hot_articles,
        ]);
    }

    public function blogContent($id, Request $request){
        //取出闪存的文章信息
        $article = $request->session()->get('articleContent_'.$id);
        $content = $this->articleService->analysisMarkdown(isset($article->content)?$article->content:'');
        return view('blog_content',['content'=>$content]);
    }
    /**
     * 文章点赞阅读
     * @id  文章id
     * @type 操作类型 like-点赞 read-阅读
     * */
    public function articleOperate(Request $request){
        $inputs = $request->all();
        $rules = [
            'id' => 'required|numeric',
            'type' =>'required|string',
        ];
        $validator = Validator::make($inputs,$rules,['参数有误']);
        if($validator->fails()){
            return ['message'=>$validator->errors()->all()[0],'code'=>40001];
        }

        $this->articleService->articleOperate($inputs['id'], $inputs['type']);
    }
}
