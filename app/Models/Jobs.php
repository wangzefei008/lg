<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //表名
    protected $table = 'jobs';
    //指定主键
    protected $primaryKey = 'id';
    //被重写的字段
    protected $guarded = ['id'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;

    //添加招聘职位
    public function add($data)
    {
    	$this->fill($data);
    	$info = $this->save();
    	return $info;
    }

    //根据uid及deadline查询 有效
    public function selectYes($uid,$deadline)
    {
       $data = $this->where('uid',$uid)->where('deadline','>',$deadline)->paginate(2);
       return $data;
    }

    //根据uid及deadline查询 失效
    public function selectNo($uid,$deadline)
    {
       $data = $this->where('uid',$uid)->where('deadline','<',$deadline)->paginate(2);
       return $data;
    }

    //统计有效总数
    public function countYes($uid,$deadline)
    {
        $count = $this->where('uid',$uid)->where('deadline','>',$deadline)->count();
        return $count;
    }

    //统计失效总数
    public function countNo($uid,$deadline)
    {
        $count = $this->where('uid',$uid)->where('deadline','<',$deadline)->count();
        return $count;
    }
}
