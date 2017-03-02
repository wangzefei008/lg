<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    //表名
    protected $table = 'company_profile';
    //指定主键
    protected $primaryKey = 'c_id';
    //被重写的字段
    protected $guarded = ['c_id'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;

    //添加信息
    public function add($data)
    {
    	$this->fill($data);
    	$info = $this->save();
    	return $info;
    }

    //根据uid查询
    public function selectUid($uid)
    {
    	$data = $this->where('uid', $uid )->get()->toArray();
    	return $data;
    }

    //根据uid执行修改
    public function updateUid($uid,$data)
    {
    	$arr = $this->where('uid',$uid);
    	$info = $arr->update($data);
    	return $info;
    }


    //查询全部数据（未到期）
    public function selectAll()
    {
        $data = $this->paginate(9);
        // $data = $this->simplePaginate(9);
        return $data;
    }


     //根据c_id查询
    public function selectCid($c_id)
    {
        $data = $this->where('c_id', $c_id )->first()->toArray();
        return $data;
    }

    
}
