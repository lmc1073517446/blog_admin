<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BasicModel extends Model
{
    /**
     * 获取分页列表数据
     * @params $condition array 查询条件 [['id','=',10]]
     * @params $pageUrl string 分页url
     * @params $size int 查询条数
     * @params $orderBy string 排序字段
     * @params $sort string 排序方式 asc/desc
     * */
    public function getPageList($inputs){
        $fields    = '*';
        $page      = 1;
        $size      = 10;
        $with      = [];
        $condition = [];
        $whereRaw = '';
        $orderBy   = 'id';
        $sort      = 'desc';
        $isAsArray = true;
        $pageUrl = 'index_';
        $params = [];

        extract($inputs);
        $builder = self::query();
        //构建查询条件
        foreach($condition as $value){
            $builder->where($value);
        }
        if(!empty($whereRaw)){
            $builder->whereRaw($whereRaw);
        }

        $builder->orderBy($orderBy, $sort);
        if(!empty($params)){
            $builder->select($fields)->paginate($size, ['*'], 'page', $page)->type = $params['type'];
        }

        return $builder->select($fields)->paginate($size, ['*'], 'page', $page)->withUrl($pageUrl, '.html');
    }

    /**
     * 获取列表数据
     * @params $condition array 查询条件 [['id','=',10]]
     * @params $pageUrl string 分页url
     * @params $size int 查询条数
     * @params $orderBy string 排序字段
     * @params $sort string 排序方式 asc/desc
     * */
    public function getList($params){

        $fields    = '*';
        $size      = 10;
        $with      = [];
        $condition = [];
        $orderBy   = 'id';
        $sort      = 'desc';
        $isAsArray = false;

        extract($params);
        $builder = self::query();
        //构建查询条件
        if(isset($condition[0]) && $condition[0]=='AND'){
            array_shift($condition);
            foreach($condition as $value){
                if(count($value)==3){
                    $builder->where(array_shift($value), array_shift($value), array_shift($value));
                }
            }
        }else{
            foreach($condition as $key=>$value){
                $builder->where([$key=>$value]);
            }
        }

        $builder->orderBy($orderBy, $sort);

        $builder->select($fields)->limit($size);

        if($isAsArray == true){
            return $builder->get()->toArray();
        }
        return $builder->get();
    }
    /**
     * 查询单条数据
     * @params $condition array 查询条件 [['id','=',10]]
     * @params $pageUrl string 分页url
     * @params $size int 查询条数
     * @params $orderBy string 排序字段
     * @params $sort string 排序方式 asc/desc
     * */
    public function getOne($params){
        $with      = [];
        $condition = [];
        $orderBy   = 'id';
        $sort      = 'desc';
        extract($params);
        $builder = self::query();

        //构建查询条件
        if(isset($condition[0]) && $condition[0]=='AND'){
            array_shift($condition);
            foreach($condition as $value){
                if(count($value)==3){
                    $builder->where(array_shift($value), array_shift($value), array_shift($value));
                }
            }
        }else{
            foreach($condition as $key=>$value){
                $builder->where([$key=>$value]);
            }
        }

        return $builder->select('*')->orderBy($orderBy,$sort)->first();
    }

    /**
     * 新增数据
     * @params $attribute array 新增的记录
     * */
    public function addOne($attribute){
        return self::insertGetId($attribute);
    }

    /**
     * 保存数据
     * @params $params array 条件
     * @params $attribute array 保存的数据
     * */
    public function toSave($params, $attribute){
        $condition = [];

        extract($params);
        $builder = self::query();
        //构建查询条件
        if(isset($condition[0]) && $condition[0]=='AND'){
            array_shift($condition);
            foreach($condition as $value){
                if(count($value)==3){
                    $builder->where(array_shift($value), array_shift($value), array_shift($value));
                }
            }
        }else{
            foreach($condition as $key=>$value){
                $builder->where([$key=>$value]);
            }
        }
        $info = $builder->first();
        if(empty($info)){
            return $builder->insert($attribute);
        }else{
            return $builder->update($attribute);
        }

    }


}
