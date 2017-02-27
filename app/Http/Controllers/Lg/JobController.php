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
		$arr=Request::all();
		$category=isset($arr['kd'])?$arr['kd']:'';
		$salary=isset($arr['yx'])?$arr['yx']:'';
		$experience=isset($arr['gj'])?$arr['gj']:'';
		$nature=isset($arr['gx'])?$arr['gx']:'';
		$education=isset($arr['xl'])?$arr['xl']:'';
		$show_time=isset($arr['st'])?$arr['st']:'';
		$city=isset($arr['city'])?$arr['city']:'';
		
		
		// echo $show_time;
		$where='1=1';
		if(!empty($experience)){
			$where.=" and qs_jobs.experience_cn='$experience'";
		}
		if(!empty($nature)){
			$where.=" and qs_jobs.nature_cn='$nature'";
		}
		if(!empty($education)){
			$where.=" and qs_jobs.education_cn='$education'";
		}
		if(!empty($show_time)){
			$time=time();
			// echo $time;
			if($show_time=='3天内'){
				$time1=$time-3*24*60*60;
				$where.=" and qs_jobs.addtime>'$time1'";
			}elseif($show_time=='一周内'){
				$time1=$time-7*24*60*60;
				$where.=" and qs_jobs.addtime>'$time1'";
			}elseif($show_time=='一月内'){
				$time1=$time-30*24*60*60;
				$where.=" and qs_jobs.addtime>'$time1'";
			}			
		}
		if(!empty($category)){
			$where.=" and qs_jobs.category_cn like '%$category%'";
		}
		if(!empty($city)){
			// $city1=explode('/', $city);
			// $province=$city1[0];
			// $place=$city1[1];
			$where.=" and qs_jobs.district_cn = '$city'";
		}
		// dd($where);
		$job=new \App\Models\Jobs;
		$data['job']=$job->select($where);
		//职位加公司
		// dd($data['job']);
		$data['job']->gj=$experience;
		$data['job']->gx=$nature;
		$data['job']->xl=$education;
		$data['job']->kd=$category;
		$data['job']->st=$show_time;
		$data['job']->city=$city;
		$data['job']->yx=$salary;
		//分页传参
		// $data['job']->experience=$experience;
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
	//地区联动
	public function get_district()
	{ 
		$parentid=Request::all()['parentid'];
		$district=new \App\Models\District;
		$res=$district->get_district($parentid);
		echo json_encode($res);
	}
}