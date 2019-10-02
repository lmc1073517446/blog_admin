<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */

    public function index(Request $request)
    {
        if ($request->isMethod('POST')) { //判断文件是否是 POST的方式上传
            $tmp = $request->file('editormd-image-file');
            $path = '/article'; //public下的article
            if ($tmp->isValid()) { //判断文件上传是否有效
                $FileType = $tmp->getClientOriginalExtension(); //获取文件后缀

                $FilePath = $tmp->getRealPath(); //获取文件临时存放位置

                $FileName = date('Y-m-d') . uniqid() . '.' . $FileType; //定义文件名

                Storage::disk('article')->put($FileName, file_get_contents($FilePath)); //存储文件

                return response()->json([
                    'success' =>1,
                    'message' => '上传成功',
                    'url' => $path . '/' . $FileName //文件路径
                ]);
            }
        }
    }
}
