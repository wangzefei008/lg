<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pms extends Model
{
    protected  $table='pms';
    protected  $primaryKey='pmid';
    protected  $guarded=['pmid'];
    public $timestamps=false;
    //我的消息
    public function select($uid){
      return $this->where('msgtouid',$uid)->get()->toArray();
    }
    //删除
    public function del($did){
        $data=$this->find($did);
       return $data->delete();
       // return $data->_sql();die;
    }

}
