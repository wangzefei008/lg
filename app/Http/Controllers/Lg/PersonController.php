<?php
namespace App\Http\Controllers\Lg;
header('content-type:text/html;charset=unicode');

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Request;
use Validator;
use App\User;
use Auth;
use Session;
use DB;

class PersonController extends Controller
{
    public function index(){//个人首页展示方法
        $uid= Session::get('uid');//拿用户id
        $email=Session::get('email');//拿用户账号
        $members_info=new \App\Models\Members_info;//实例化个人详细信息
        $data=$members_info->select($uid);
       // print_r($data);die;
        if($data){//如果能查出详细信息
            return view("person.personindex",$data[0]);
        }else{//去到让完善个人的页面
            return view("person.personindex2",compact('email'));
        }
    }
    public function create_resume(){//个人创建简历
          $uid= Session::get('uid');//拿用户id
         //print_r($uid);die;
          $email=Session::get('email');//拿用户账号
            $data=[
                'uid'=> $uid,
                'email'=>$email
            ];
       // print_r($data);die;
       return view("person.create_resume",$data);
    }
    public function create_resume_do(){//个人创建简历接值
        $data=Input::all();//接表单的值
       // dd($data);die;
      //print_r($data);die;
        $validator=Validator::make($data,[
            'title'=>'required',
            'uid'=>'required',
            'fullname'=>'required',
            'sex_cn'=>'required',
            'birthdate'=>'required',
            'residence'=>'required',
            'education_cn'=>'required',
            'major_cn'=>'required',
            'experience_cn'=>'required',
            'telephone'=>'required | numeric',
            'email'=>'email',
            'height'=>'required | numeric',
            'householdaddress'=>'required',
            'marriage_cn'=>'required',
            'trade_cn'=>'required',
            'wage_cn'=>'required',
            'intention_jobs'=>'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
       // return "验证成功";
        //添加验证数据
        $resume=new \App\Models\Resume;
       if($resume->insert($data)){//如果入库成功
           return redirect('/person');//跳转到个人首页
       }else{
           echo "创建简历失败";
       };
    }
    public function my_resume(){//我的简历
        $uid= Session::get('uid');//拿用户id
        $email=Session::get('email');//拿用户账号
        $resume=new \App\Models\Resume;
        $data= $resume->select($uid);
//        print_r($data);
//        die;
        if($data= $resume->select($uid)){
            return view("person.my_resume",compact('data'));
        }
        return view("person.my_resume2",compact('email'));
    }
    public function del_resume(){//删除简历
    $id=Request::get('id');//简历id
       // print_r($id);die;
    $resume=new \App\Models\Resume;
    $resume->del($id);
    return redirect('/my_resume');//跳转到我的简历
}
    public function update_resume(){//修改简历
        $id=Request::get('id');//简历id
        $resume=new \App\Models\Resume;
        $data= $resume->select2($id);
       // print_r($data);die;
        return view("person.update_resume",$data[0]);
    }
    public function update_resume_do(){//修改简历执行
        //$uid= Session::get('uid');//拿用户id
        $data=Input::all();//接表单的值
        //print_r($data);die;
        $validator=Validator::make($data,[
            'title'=>'required',
            'id'=>'required',
            'fullname'=>'required',
            'sex_cn'=>'required',
            'birthdate'=>'required',
            'residence'=>'required',
            'education_cn'=>'required',
            'major_cn'=>'required',
            'experience_cn'=>'required',
            'telephone'=>'required | numeric',
            'email'=>'email',
            'height'=>'required | numeric',
            'householdaddress'=>'required',
            'marriage_cn'=>'required',
            'trade_cn'=>'required',
            'wage_cn'=>'required',
            'intention_jobs'=>'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        //添加验证数据
        $resume=new \App\Models\Resume;
        if($resume->updates($data,$data['id'])){//如果修改简历成功
            return redirect('/my_resume');//跳转到我的简历
        }else{
            echo "修改简历失败";
        };
    }
    public function preview_resume(){//简历预览
        $id=Request::get('id');//简历id
        //print_r($id);die;
        $resume=new \App\Models\Resume;
        $data=$resume->select2($id);
       // print_r($data);die;
        return view('person.preview_resume',$data[0]);
    }
    public function person_add(){//添加个人资料
        $uid= Session::get('uid');//拿用户id
        $email=Session::get('email');//拿用户账号
        $data=[
            'uid'=> $uid,
            'email'=>$email
        ];
        return view("person.person_add",$data);
    }
    public function person_adddo(){//添加个人资料执行
        $data=Input::all();//接表单的值
        // print_r($data);die;
        $validator=Validator::make($data,[
            'uid'=>'required',
            'realname'=>'required',
            'sex_cn'=>'required',
            'birthday'=>'required',
            'residence'=>'required',
            'education_cn'=>'required',
            'major_cn'=>'required',
            'experience_cn'=>'required',
            'phone'=>'required | numeric',
            'email'=>'email',
            'height'=>'required | numeric',
            'householdaddress'=>'required',
            'marriage_cn'=>'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        //添加验证数据
        $members_info=new \App\Models\Members_info();
        if($members_info->insert($data)){//如果添加数据成功
            return redirect('/person');//跳转到
        }else{
            echo "添加个人资料失败";
        };
    }
    public function person_update(){//修改个人资料
        $uid= Session::get('uid');//拿用户id
        $members_info=new \App\Models\Members_info();
        $data=$members_info->select($uid);
        //print_r($data);die;
        return view("person.person_update",$data[0]);
    }
    public function person_updatedo(){//修改个人资料执行
        $uid= Session::get('uid');//拿用户id
        $data=Input::all();//接表单的值
        // print_r($data);die;
        $validator=Validator::make($data,[
            'uid'=>'required',
            'realname'=>'required',
            'sex_cn'=>'required',
            'birthday'=>'required',
            'residence'=>'required',
            'education_cn'=>'required',
            'major_cn'=>'required',
            'experience_cn'=>'required',
            'phone'=>'required | numeric',
            'email'=>'email',
            'height'=>'required | numeric',
            'householdaddress'=>'required',
            'marriage_cn'=>'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        //添加验证数据
        $members_info=new \App\Models\Members_info();
        if($members_info->updates($data,$uid)){//如果修改数据成功
            return redirect('/person');//跳转到
        }else{
            echo "修改个人资料失败";
        };
    }
    public function company_interview(){//我的邀请（有分页）
//        $uid= Session::get('uid');//拿用户id
//        $company_interview=new \App\Models\Company_interview;
//        $data=$company_interview->select($uid);
//       // print_r($data);die;
//        return view("person.company_interview",compact('data'));
        $uid= Session::get('uid');//拿用户id
        $data = DB::table('company_interview')->where('resume_uid',$uid)->Paginate(3);
       // print_r($data);die;
        return view('person.company_interview', ['data' => $data]);
    }
    public function del_inter(){//删除我的邀请
        $did=Request::get('did');
       // print_r($did);
        $company_interview=new \App\Models\Company_interview;
        if($company_interview->del($did)){//如果删除
            return redirect('/company_interview');//跳转到
        }else{
            echo "删除失败";
        }
    }
    public function jobs_apply(){//已经申请职位的方法
        $uid= Session::get('uid');//拿用户id
        $personal_jobs_apply=new \App\Models\Personal_jobs_apply();
        $data=$personal_jobs_apply->select($uid);
       // print_r($data);die;
        return view("person.personal_jobs_apply",compact('data'));
    }
    public function del_apply(){//删除已经申请职位
        $did=Request::get('did');
        // print_r($did);
        $personal_jobs_apply=new \App\Models\Personal_jobs_apply();
        if($personal_jobs_apply->del($did)){//如果删除
            return redirect('/jobs_apply');//跳转到
        }else{
            echo "删除失败";
        }
    }
    public function personal_favorites(){//职位收藏夹
        header("content-type:text/html;charset=utf-8");
        $uid= Session::get('uid');//拿用户id
        $personal_favorites=new \App\Models\Personal_favorites();
        $data=$personal_favorites->select($uid);
       // print_r($data);die;
        return view("person.personal_favorites",compact('data'));
    }
    public function del_favorites(){//删除职位收藏夹
        $did=Request::get('did');
        // print_r($did);die;
        $personal_favorites=new \App\Models\Personal_favorites();
        if($personal_favorites->del($did)){//如果删除
            return redirect('/personal_favorites');//跳转到
        }else{
            echo "删除失败";
        }
    }
    public function pms_sys(){//我的消息
        $uid= Session::get('uid');//拿用户id
       // print_r($did);die;
        $pms=new \App\Models\Pms();
        $data=$pms->select($uid);
       // print_r($data);die;
        return view('person.pms',compact('data'));
    }
    public function del_pms(){//删除我的消息
        $did=Request::get('pmid');
        // print_r($did);die;
        $pms=new \App\Models\Pms();
        if($pms->del($did)){//如果删除
            return redirect('/pms_sys');//跳转到
        }else{
            echo "删除失败";
        }
    }

}