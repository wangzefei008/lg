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
    //查询一条
    public function get_one($id){
          return $this->join('members','members.uid','=','jobs.uid')
        ->join('company_profile','company_profile.uid','=','members.uid')
        ->where('jobs.id',$id)->first()->toArray();
    }
    //相关职位
    public function get_connect($trade_cn){
        return $this->join('members','members.uid','=','jobs.uid')
        ->join('company_profile','company_profile.uid','=','members.uid')
        ->where('jobs.trade_cn','like',"%$trade_cn%")->offset(0)->limit(5)->get()->toArray();
    }
}
