<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotWords extends Model
{
	protected  $table='hotword';
    protected  $primaryKey='w_id';
    protected  $guarded=['w_id'];
    public $timestamps=false;
    public function get_word(){
    	return $this->orderBy('w_hot','desc')->offset(0)->limit(8)->get()->toArray();
    }
}