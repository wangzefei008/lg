<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    //表名
    protected $table = 'personal_jobs_apply';
    //指定主键
    protected $primaryKey = 'did';
    //被重写的字段
    protected $guarded = ['did'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;
    //投递简历
    public function add($data)
    {
    	$this->fill($data);
    	$info = $this->save();
    	return $info;
    }
    public function select($jobs_id,$resume_id){
        return $this->whereRaw("jobs_id='$jobs_id' and resume_id='$resume_id'")->count();
    }
}
