<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_jobs_apply extends Model
{
    protected  $table='personal_jobs_apply';
    protected  $primaryKey='did';
    protected  $guarded=['did'];
    public $timestamps=false;
    //查询已经申请职位信息
    public function select($uid){
        return $this->where('personal_uid',$uid)->get()->toArray();
    }
    //删除
    public function del($did){
        $data=$this->find($did);
       return $data->delete();
    }

}
