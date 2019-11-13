<?php

namespace App\Services;

use App\Models\Article;
use Parsedown;

class ArticleService
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->articleModel = $article;
    }
    /**
     * 获取分页文章列表
     * @params $page int 页码
     * @params $type int 标签
     * */
    public function getPageBlogList($page, $type){
        if($type>0){
            $whereRaw = "find_in_set($type, label)";
            $params = ['type'=>$type];
        }

        //文章列表
        return $this->articleModel->getPageList([
            'whereRaw' => isset($whereRaw)?$whereRaw:'',
            'orderBy' => 'id',
            'sort' => 'desc',
            'size' => 12,
            'pageUrl' => 'blog_',
            'page' => $page,
            'params' => isset($params)?$params:[],
        ]);
    }
    /**
     * 获取解析好的文章详情数据
     * @params int id 文章id
     * */
    public function getBlogDetail($id){
        //获取文章详情数据
        $article = $this->articleModel->getOne(['condition'=>['id'=>$id]]);
        //解析makrdown语法
        $article->content = $this->analysisMarkdown($article->content);

        return $article;
    }
    /**
     * 解析markdown语法
     * @params string content markdown内容
     * */
    public function analysisMarkdown($content){
        $Parsedown = new Parsedown();
        return  $Parsedown->setBreaksEnabled(true)->text($content); # prints: <p>Hello <em>Parsedown</em>!</p>
    }

}
