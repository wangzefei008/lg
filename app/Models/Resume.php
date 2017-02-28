<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected  $table='resume';
    protected $fillable = [
        'title',
        'uid',
        'fullname',
        'sex_cn',
        'birthdate',
        'residence',
        'education_cn',
        'major_cn',
        'experience_cn',
        'telephone',
        'email',
        'height',
        'householdaddress',
        'marriage_cn',
        'trade_cn',
        'wage_cn',
        'intention_jobs'
    ];
    public $timestamps=false;
    //添加注册信息
    public function insert($arr)
    {
    	$this->fill($arr);  		 // 设置值  data为数组
        return $this->save();
    }
    //查询简历
    public function select($uid){
    return $this->where('uid',$uid)->get()->toArray();
    }
    //删除简历
    public function del($uid){
        $resumes= $this->where('uid',$uid)->get()->toArray();
      //  print_r($resumes);die;
        $resume=$this->find($resumes[0]['id']);
        return $resume->delete();
    }
    //修改简历
    public function updates($data,$uid){
       // print_r($data);die;
        $resume= $this->where('uid',$uid);
        return $resume->update($data);
    }
}
