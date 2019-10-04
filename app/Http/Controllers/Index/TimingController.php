<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\DB;

class TimingController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getNews(){
        $url = "https://3g.163.com/touch/reconstruct/article/list/BD29MJTVwangning/0-10.html";
        $content = file_get_contents($url);
        $content = rtrim(str_replace('artiList(','',$content), ')');
        $news = json_decode($content, true);
        $data = [];
        foreach($news['BD29MJTVwangning'] as $val){
            $new = [
                'docid' => $val['docid'],//文章id
                'source' => $val['source'],//来源
                'title' => $val['title'],//标题
                'digest' => $val['digest'],//概要
                'imgsrc' => $val['imgsrc'],//文章图片
                'ptime' => strtotime($val['ptime']),//时间
                'url' => $val['url'],//详情地址
                'comment_count' => $val['commentCount'],//评论数量
            ];
            $data[] = $new;
        }
        foreach($data as $key => $val){
            $info = DB::table('news')->where('docid', $val['docid'])->first();
            if($info){
                unset($data[$key]);
            }
        }
        DB::table('news')->insert($data);

    }
}
