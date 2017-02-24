<?php

namespace App\Http\Controllers\Lg;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Members;
use Session;
use App\Models\Jobs;
use App\Models\CategoryJobs;
use Illuminate\Support\Facades\Input;
use App\Models\CompanyProfile;

class CompanyController extends Controller
{
    //展示企业主页
    public function index()
    {
    	//获取用户名
    	$email = session('email');
    	$uid = session('uid');
    	//实例化model
    	$model = new Members;
    	//根据uid查询对应信息
    	$data = $model->select($uid);
    	$data['email'] = $email;
    	$data['data'] = $data;
    	return view('lg.positions',$data);
    }

    //职位招聘添加
    public function add()
    {
    	$email = session('email');
    	$model = new CategoryJobs;
    	$data = $model->select();
    	$cat_list = $this->cat_list($data);
    	$arr['data'] = $cat_list;
    	$arr['email'] = $email;
    	return view('lg.create',$arr);

    }

    //处理数据（职位分类）
    public function cat_list($data)
    {

    	foreach($data as $k=>$v)
    	{
    		if($v['parentid'] == 0)
    		{
    			$cat_list[$v['categoryname']] = array();
    			foreach($data as $kk=>$vv)
    			{
    				if($vv['parentid'] == $v['id'])
    				{
    					$cat_list[$v['categoryname']][$vv['categoryname']] = array();
    					foreach($data as $kkk=>$vvv)
    					{
    						if($vvv['parentid'] == $vv['id'])
    						{
    							$cat_list[$v['categoryname']][$vv['categoryname']][] = $vvv['categoryname'];
    						}
    					}
    				}
    			}
    		}
    	}
    	return $cat_list;
    }

    //接收需要添加的招聘信息
    public function add_pro()
    {
    	$data = Input::all();
    	$data['addtime'] = time();
    	$model = new Jobs;
    	$info = $model->add($data);
    	if($info)
    	{
    		return redirect('company');
    	}
    	else
    	{
    		return redirect('company_create');
    	}
    }

    //展示企业信息
    public function mymessage()
    {
    	echo 'ok';
    }

    //完善信息
    public function my_message()
    {
    	return view('lg.my_message');
    }

    //接收完善好的信息
    public function my_message_pro()
    {
    	$data = Input::all();
    	$file = $data['logo'];
    	if(isset($file))
    	{
    		// dd($file);
    		// 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            // $realPath = $file->getRealPath();   //临时文件的绝对路径
            // $type = $file->getClientMimeType();     // image/jpeg
 			
			// 上传文件
			$filename = date('Ymd_His') . '_' . uniqid() . '.' . $ext;
			// 使用我们新建的uploads本地存储空间（目录）
			$file -> move('uploads',$filename);
			$logo = '/public/uploads/'.$filename;
    		$data['logo'] = $logo;
    	}
    	$data = array_filter($data);
    	//获取uid
    	$uid = session('uid');
    	$data['uid'] = $uid;
    	//实例化model
    	$model = new CompanyProfile;
    	//判断uid是否存在
    	$info = $model->selectUid($uid);
    	if($info)
    	{
    		$bloon = $model->updateUid($uid,$data);
    		if($bloon)
    		{
    			return redirect('company_mymessage');
    		}
    		else
    		{
    			return redirect('company_my_message');
    		}

    	}
    	else
    	{
    		$bloon = $model->add($data);
    		if($bloon)
    		{
    			return redirect('company_mymessage');
    		}
    		else
    		{
    			return redirect('company_my_message');
    		}
    	}

    }
}


