<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_favorites extends Model
{
    protected  $table='personal_favorites';
    protected  $primaryKey='did';
    protected  $guarded=['did'];
    public $timestamps=false;
    //职位收藏夹信息
    public function select($uid){
        $data = $this
            ->join('jobs','personal_favorites.jobs_id','=','jobs.id')
            ->where(['personal_uid'=>$uid])->get()->toArray();
        return $data;
    }
    //删除
    public function del($did){
        $data=$this->find($did);
       return $data->delete();
       // return $data->_sql();die;
    }

}
