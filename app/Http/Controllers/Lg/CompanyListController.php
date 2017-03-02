<?php

namespace App\Http\Controllers\Lg;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CategoryDistrict;
use App\Models\Category;
use App\Models\CompanyProfile;


class CompanyListController extends Controller
{
    //全部公司展示
    public function index()
    {
        //获取城市信息
    	$model_city = new CategoryDistrict;
    	$data_city = $model_city->selectAll();
    	$data_city = $this->tree($data_city);
    	//获取行业领域信息
        $model_category = new Category;
        $c_alias = 'QS_trade';
        $data_category = $model_category->selectCategory($c_alias);
        //获取公司相关信息
        $model_profile = new CompanyProfile;
        $data_profile = $model_profile->selectAll();
        //将数据加入数组
    	$arr['data_city'] = $data_city;
        $arr['data_category'] = $data_category;
        $arr['data_profile'] = $data_profile;
        // dd($data_profile);
    	return view('lg.companylist',$arr);
    }

    //将得到的全部城市进行分类
    public function tree($data,$parent_id=0,$level=0)
    {
    	static $tree = array();
    	//定义静态变量以便重复加值
    	foreach($data as $k=>$v)
    	{
    		if($v['parentid'] == $parent_id)
    		{
    			$v['level'] = $level;
    			$tree[] = $v;
    			$this->tree($data,$v['id'],$level+1);
    		}
    	}
    	return $tree;
    }

   
}
