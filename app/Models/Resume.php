<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Resume extends Model
{
    protected  $table='resume';

    protected  $primaryKey='id';
    protected  $guarded=['id'];
    public $timestamps=false;
    //添加
    public function insert($arr)
    {
      //  dd($arr);
//        DB::enableQueryLog();
    	$this->fill($arr);   // 设置值  data为数组

       return  $this->save();

       // dd(response()->json(DB::getQueryLog()));
    }
    //查询简历
    public function select($uid){
    return $this->where('uid',$uid)->get()->toArray();
    }
    //做修改简历的查询
    public function select2($id){
        return $this->where('id',$id)->get()->toArray();
    }
    //删除简历
    public function del($id){
        $data=$this->find($id);
        return $data->delete();
        // return $data->_sql();die;
    }
    //修改简历
    public function updates($data,$id){
       // print_r($data);die;
        $resume= $this->where('id',$id);
        return $resume->update($data);
    }
    //求职信息查看更多
    public function job_want()
    {

           $data['new']= $this->orderBy('addtime','desc')->limit(2)->get()->toArray();//toArray();转化为数组  limit为限制条数
           $data['hot']= $this->limit(2)->get()->toArray();
           return $data;                                          //返回数组
    }
    //求职信息查看更多
    public function hotmore()
    {
        return $this->get()->toArray();
    }
    //求职信息查看详情
    public function wantInfo($id)
    {
        return $this->where('id','=',$id)->get()->toArray();
    }
    //求职信息搜索
    public function wantSearch($data)
    {
        $spc=isset($data['spc'])?$data['spc']:null;
        if($spc==1){
            $intention_jobs=isset($data['kd'])?$data['kd']:null;
        }elseif($spc==4){
            $major_cn=isset($data['kd'])?$data['kd']:null;
        }

        $city=isset($data['city'])?$data['city']:null;
        $wage_cn=isset($data['yx'])?$data['yx']:null;
        $experience_cn=isset($data['gj'])?$data['gj']:null;
        $education_cn=isset($data['xl'])?$data['xl']:null;
        $nature_cn=isset($data['gx'])?$data['gx']:null;

        $sql='1=1';
        if(!empty($major_cn)){
            $sql.=" and major_cn  like  '%$major_cn%' ";
        }
        if(!empty($intention_jobs)){
            $sql.=" and intention_jobs  like  '%$intention_jobs%' ";
        }
        if($city=='全国'){
            $city='residence';
            $sql.=" and residence = $city";
        }else{
            $sql.=" and residence  like  '%$city%' ";
        }
        if($wage_cn=='不限')
        {
            $city='wage_cn';
            $sql.=" and wage_cn = $city";
        }else{
            $sql.= " and wage_cn like '%$wage_cn%' ";
        }
        if($experience_cn=='不限')
        {
            $experience_cn='experience_cn';
            $sql.=" and experience_cn = $experience_cn";
        }else{
            $sql.= " and experience_cn like '%$experience_cn%' ";
        }

        if($education_cn=='不限')
        {
            $education_cn='education_cn';
            $sql.=" and education_cn = $education_cn";
        }else{
            $sql.=" and education_cn like '%$education_cn%'";
        }
        if($nature_cn=='不限')
        {
            $nature_cn='nature_cn';
            $sql.=" and nature_cn = $nature_cn";
        }else{
            $sql.=" and nature_cn like '%$nature_cn%' ";
        }

        $page = DB::table('Resume')->whereRaw($sql)->Paginate(8);

        return $page;

}
}
