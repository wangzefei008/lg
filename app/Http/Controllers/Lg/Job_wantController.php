<?php

namespace App\Http\Controllers\Lg;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class Job_wantController extends Controller
{
    // //求职信息首页
    // public function want_index()
    // {
    //     $resume=new \App\Models\Resume;
    //     $data=$resume->job_want();

    //     return view('lg.want_index', $data);
    // }
    //求职信息首页
    public function want_more()
    {
        $page = DB::table('Resume')->Paginate(8);
        $data['job']=$page;
        $data['status'] = 4;
        return view('lg.want_list', $data);
    }
    //求职信息查看更多
    public function want_info()
    {
        $id=$_GET['id'];
        $resume=new \App\Models\Resume;
        $info=$resume->wantInfo($id);
        return view('lg.wantinfo', $info[0]);//赋值
    }
    //求职信息搜索
    public function wantSearch(){
        $data=new \App\Models\Resume;
        $info['job']=$data->wantSearch($_GET);
        return view('lg.want_list', $info);

    }
}
