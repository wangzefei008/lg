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
    //搜索职位
    public function select($where){
        return $this->join('members','members.uid','=','jobs.uid')
        ->join('company_profile','company_profile.uid','=','members.uid')
        ->whereRaw($where)->paginate(6);
    }
    //最新职位
     public function get_new(){
        return $this->join('members','members.uid','=','jobs.uid')
        ->join('company_profile','company_profile.uid','=','members.uid')
        ->orderBy('jobs.addtime')->offset(0)->limit(10)->get()->toArray();
    }
    //最热职位
     public function get_hot($where){
        return $this->join('members','members.uid','=','jobs.uid')
        ->join('company_profile','company_profile.uid','=','members.uid')
        ->whereRaw($where)->offset(0)->limit(10)->get()->toArray();
    }
}
