<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
	protected  $table='members';
    protected  $primaryKey='uid';
    protected  $guarded=['uid'];
    public $timestamps=false;
    //添加注册信息
    public function insert($arr)
    {
    	$this->fill($arr);  		 // 设置值  data为数组
		$this->save();
        // return $this;
        return $this->attributes['uid'];  
    }
    //验证邮箱的唯一性
    public function email($email){
        return $this->where('email',$email)->get()->toArray();
    }
    //登录验证
    public function check_login($email,$password){
        return $this->where(['email'=>$email,'password'=>$password])->first();
    }
    //查询用户信息
    public function select($uid){
        return $this->find($uid)->toArray();
    }
    //重置密码
    public function reset_pwd($email,$password){
        return $this->where('email', $email)->update(['password' => $password]);
    }
}
