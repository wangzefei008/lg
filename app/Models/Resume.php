<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Resume extends Model
{
    protected  $table='resume';
    protected  $primaryKey='id';
    protected  $guarded=['id'];
    public $timestamps=false;
    //添加
    public function insert($arr)
    {
      //  dd($arr);
//        DB::enableQueryLog();
    	$this->fill($arr);   // 设置值  data为数组

       return  $this->save();

       // dd(response()->json(DB::getQueryLog()));

    }
    //查询简历
    public function select($uid){
    return $this->where('uid',$uid)->get()->toArray();
    }
    //做修改简历的查询
    public function select2($id){
        return $this->where('id',$id)->get()->toArray();
    }
    //删除简历
    public function del($id){
        $data=$this->find($id);
        return $data->delete();
        // return $data->_sql();die;
    }
    //修改简历
    public function updates($data,$id){
       // print_r($data);die;
        $resume= $this->where('id',$id);
        return $resume->update($data);
    }
}
