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
use App\Models\CompanyLabelResume;

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
        $data['count'] = '';
        // $data['status'] = '';
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
        $data['deadline'] = time()+30*24*60*60;
    	$data['uid'] = session('uid');
    	// dd($data);
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
        //获取当前公司信息
        $uid = session('uid');
        $model = new CompanyProfile;
        $data = $model->selectUid($uid);
        $arr['data'] = $data;
         $arr['status'] = '';
        // dd($data);
    	return view('lg.myhome',$arr);
    }

    //完善信息
    public function my_message()
    {
        $arr['status'] = 6;
    	return view('lg.my_message',$arr);
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
			$logo = 'uploads/'.$filename;
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

    //待处理简历
    public function labelresume()
    {
    	$uid = session('uid');
    	$resume_state = 0;
    	$model = new CompanyLabelResume;
    	$data = $model->resumeProcessed($uid,$resume_state);
        $count = $model->count($uid,$resume_state);
    	$arr['data'] = $data;
    	$arr['count'] = $count;
        $arr['status'] = 1;
    	return view('lg.labelresume',$arr);
    }

    //已通知简历
    public function notice()
    {
        $uid = session('uid');
        $resume_state = 1;
        $model = new CompanyLabelResume;
        $data = $model->resumeProcessed($uid,$resume_state);
        $count = $model->count($uid,$resume_state);
        $arr['data'] = $data;
        $arr['count'] = $count;
        $arr['status'] = 2;
        return view('lg.notice',$arr);
    }

    //不合适简历
    public function unnotice()
    {
        $uid = session('uid');
        $resume_state = 2;
        $model = new CompanyLabelResume;
        $data = $model->resumeProcessed($uid,$resume_state);
        $count = $model->count($uid,$resume_state);
        $arr['data'] = $data;
        $arr['count'] = $count;
        $arr['status'] = 3;
        return view('lg.unnotice',$arr);
    }

    //有效职位
    public function effective()
    {
        $uid = session('uid');
        $deadline = time();
        $model = new Jobs;
        $data = $model->selectYes($uid,$deadline);
        $count = $model->countYes($uid,$deadline);
        $arr['data'] = $data;
        $arr['count'] = $count;
        $arr['status'] = 4;
        return view('lg.effective',$arr);
    }

    //失效职位
    public function online()
    {
        $uid = session('uid');
        $deadline = time();
        $model = new Jobs;
        $data = $model->selectNo($uid,$deadline);
        $count = $model->countNo($uid,$deadline);
        $arr['data'] = $data;
         $arr['count'] = $count;
        $arr['status'] = 5;
        return view('lg.online',$arr);
    }
}


