<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members_info extends Model
{
	protected  $table='members_info';
    protected  $primaryKey='id';
    protected  $guarded=['id'];
    public $timestamps=false;
    //添加
    public function insert($arr)
    {
    	$this->fill($arr);  		 // 设置值  data为数组
        return $this->save();
    }
    //查询用户信息
    public function select($uid){
        return $this->where('uid',$uid)->get()->toArray();
    }
    //修改个人资料
    public function updates($data,$uid){
        // print_r($data);die;
        $resume= $this->where('uid',$uid);
        return $resume->update($data);
    }

}
