<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//表名
    protected $table = 'category';
    //指定主键
    protected $primaryKey = 'c_id';
    //被重写的字段
    protected $guarded = ['c_id'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;
    //查询全部数据
	public function select()
	{
		$data = $this->all()->toArray();
		return $data;
	}

    //根据$c_alias查询行业领域
    public function selectCategory($c_alias)
    {
        $data = $this->where('c_alias',$c_alias)->get()->toArray();
        return $data;
    }
}
