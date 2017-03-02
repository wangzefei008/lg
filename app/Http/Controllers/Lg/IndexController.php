<?php
namespace App\Http\Controllers\Lg;

use App\Http\Controllers\Controller;
use Session;

class IndexController extends Controller
{
	//首页
	public function index(){
		$hot=new \App\Models\HotWords;
		$data['hot']=$hot->get_word();
		// dd($data['hot']);
		$job=new \App\Models\CategoryJobs;
		$job1=$job->select();
		$data['job']=$this->get_job($job1);
		// dd($data['job']);
        $jobs=new \App\Models\Jobs;
        $where='';
        foreach ($data['hot'] as $k => $v) {
            $w_word=$v['w_word'];
           $where.=" or qs_jobs.category_cn like '%$w_word%'";
        }
        $where1=substr($where,4);
        // dd($where1);
        $data['hot_job']=$jobs->get_hot($where1);
        $data['new']=$jobs->get_new();
        // dd($data['hot_job']); 
		return view('lg.index',$data);
	}
	//职位分类重新排序
	public function get_job($job)
    {
        foreach ($job as $k => $v) {
            if($v['parentid']==0){
                $arr[$v['categoryname']] = array();
                foreach ($job as $k1 => $v1) {
                    if ($v['id'] == $v1['parentid']) {
                        $arr[$v['categoryname']][$v1['categoryname']] = array();
                        foreach ($job as $k2 => $v2) {
                            if ($v1['id'] == $v2['parentid']) {
                                $arr[$v['categoryname']][$v1['categoryname']][] = $v2['categoryname'];
                            }
                        }
                    }
                }
            }
        }
        return $arr;
    }
}