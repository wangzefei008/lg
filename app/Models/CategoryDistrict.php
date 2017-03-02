<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDistrict extends Model
{
    //表名
    protected $table = 'category_district';
    //指定主键
    protected $primaryKey = 'id';
    //被重写的字段
    protected $guarded = ['id'];
    //隐藏字段
    protected $hidden = [];
    //默认添加开始时间和结束时间，默认开启ture
    public $timestamps = false;

    //查询全部城市数据
    public function selectAll()
    {
    	$data = $this->get()->toArray();
    	return $data;
    }
}
