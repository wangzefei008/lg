<?php
namespace App\Http\Controllers\Lg;

use App\Http\Controllers\Controller;
use Session;
use Request;

class JobController extends Controller
{
	//招聘信息首页
	public function index()
	{
		$hot=new \App\Models\HotWords;
		$data['hot']=$hot->get_word();
		//热词
		$category=new \App\Models\Category;
		$category1=$category->select();
		$data['category']=$this->get_category($category1);
		//分类
		$district=new \App\Models\District;
		$data['district']=$district->get_province();
		//城市 顶级
		return view('lg.job_list',$data);
	}
	//处理分类数据 按类型分
	public function get_category($arr)
	{
		foreach($arr as $k=>$v){
			$info[$v['c_alias']]=array();
			foreach ($arr as $k1 => $v1) {
				if($v1['c_alias']==$v['c_alias']){
					$info[$v['c_alias']][]=$v1;
				}
			}
		}
		return $info;
	}
	public function get_district()
	{
		$parentid=Request::all()['parentid'];
		$district=new \App\Models\District;
		$res=$district->get_district($parentid);
		echo json_encode($res);
	}
}