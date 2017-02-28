<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyLabelResume extends Model
{
     //表名
    protected $table = 'company_label_resume';
    //指定主键
    protected $primaryKey = 'id';
    //被重写的字段
    protected $guarded = ['id'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;

    //根据uid和resume_state查询待处理简历
    public function resumeProcessed($uid,$resume_state)
    {
    	$data = $this
    	->join('resume','company_label_resume.resume_id','=','resume.id')
    	->where(['clr_uid'=>$uid,'resume_state'=>$resume_state])->Paginate(3);
    	return $data;
    }

    //统计总数
    public function count($uid,$resume_state)
    {
        $count = $this
        ->join('resume','company_label_resume.resume_id','=','resume.id')
        ->where(['clr_uid'=>$uid,'resume_state'=>$resume_state])->count();
        return $count;


    }
}
