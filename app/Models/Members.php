<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
	protected  $table='members';
    protected  $primaryKey='uid';
    protected  $guarded=['uid'];
    public $timestamps=false;
    //添加注册信息
    public function insert($arr)
    {
    	$this->fill($arr);  		 // 设置值  data为数组
		return $this->save();  
    }
}
