<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
    protected $article;

    public function __construct(Comment $comment)
    {
        $this->commentModel = $comment;
    }
    /**
     * 获取一篇文章的评论列表
     * @params $id int 文章id
     * */
    public function articleCommentLists($id){
        $comment_list = Comment::with('user')->where('a_id', $id)->get()->toArray();
        $master_comment = [];
        foreach($comment_list as $key=>$val){
            //提取出主评论
            if($val['master_slave'] == 0){
                $master_comment[$key] = $val;
                $master_comment[$key]['slave'] = [];
            }
            //将从评论对应到主评论中
            foreach($comment_list as $key1=> $val1){
                if($val1['master_slave'] == $val['id']){
                    $master_comment[$key]['slave'][] = $val1;
                }
            }
        }
        return $master_comment;
    }
    /**
     * 添加评论
     * */
    public function toComment($inputs){
        //生成游客名称
        $data = [
            'user_name' => $inputs['user_name'],//评论人用户名
            'content' => $inputs['content'],//评论内容
            'comm_uid' => session('user')['id'],//评论人uid
            'pid' => $inputs['pid'],//回复的最顶级评论id
            'a_id' => $inputs['a_id'],//评论的文章id
            'add_time' => time(),//评论时间
            'reply_uid' => 0,//回复对象uid，回复评论时使用
            'reply_user_name'=> !empty($inputs['reply_user_name'])?$inputs['reply_user_name']:'',//回复对象用户名，回复评论时使用
            'master_slave' => $inputs['master_slave']
        ];
        $data['id'] = $this->commentModel->addOne($data);

        return $data;
    }

}
