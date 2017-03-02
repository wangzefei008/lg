<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_interview extends Model
{
    protected  $table='company_interview';
    protected  $primaryKey='did';
    protected  $guarded=['did'];
    public $timestamps=false;
    //查询邀请信息
    public function select($uid){
        return $this->where('resume_uid',$uid)->get()->toArray();
    }
    //删除我的简历
    public function del($did){
        $data=$this->find($did);
       return $data->delete();
    }

}
