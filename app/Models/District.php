<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
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
    //查询全部数据
	public function get_province()
	{
		$data = $this->where('parentid','0')->get()->toArray();
		return $data;
	}
    public function get_district($parentid)
    {
        $data = $this->where('parentid',$parentid)->get()->toArray();
        return $data;
    }
}