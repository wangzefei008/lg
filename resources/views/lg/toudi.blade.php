<?php
$email=Session::get('email');
$utype=Session::get('utype');
?>
<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>产品经理-广州百田-拉勾网-最专业的互联网招聘平台</title>
<meta content="23635710066417756375" property="qc:admins">
<meta name="description" content="产品经理 广州 本科 1-3年 全职 产品经理 上市公司，快速发展空间，产品的话语权 广州百田 广州百田信息科技有限公司 专注于儿童互联网市场的发展和创新，为中国少年儿童提供互联网互动娱乐和学习服务。 拉勾网-最专业的互联网招聘平台">
<meta name="keywords" content="产品经理 广州 本科 1-3年 全职 产品经理 上市公司，快速发展空间，产品的话语权 广州百田 广州百田信息科技有限公司 专注于儿童互联网市场的发展和创新，为中国少年儿童提供互联网互动娱乐和学习服务。 拉勾网-最专业的互联网招聘平台">
<meta content="QIQ6KC1oZ6" name="baidu-site-verification">
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link href="h/images/favicon.ico" rel="Shortcut Icon">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>
<script src="style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="style/js/jquery-hbzx.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
            </a>
            <ul class="reset" id="navheader">
                <li class="current"><a href="index.html">首页</a></li>
                <li ><a href="companylist.html" >公司</a></li>
                <li ><a href="{{URL::to('job_list')}}" target="_blank">招聘信息</a></li>
                <li ><a href="#" target="_blank">求职信息</a></li>
            </ul>
            <!-- {{$email}} -->
             @if(!empty($email))
                <dl class="collapsible_menu">
                    <dt>
                        <span>{{$email}}</span> 
                        <span class="red dn" id="noticeDot-0"></span>
                        <i></i>
                    </dt>
                    @if(!empty($utype)&&$utype==2)
                        <dd><a rel="nofollow" href="">个人中心</a></dd>
                    @else
                        <dd><a rel="nofollow" href="{{URL::to('company')}}">企业中心</a></dd>
                    @endif
                    <dd class="logout"><a rel="nofollow" href="{{URL::to('logout')}}">退出</a></dd>
                </dl>
             @else               
            <ul class="loginTop">
                <li><a href="{{URL::to('login')}}" rel="nofollow">登录</a></li> 
                <li>|</li>
                <li><a href="{{URL::to('register')}}" rel="nofollow">注册</a></li>
            </ul>
            @endif
                                </div>
    </div><!-- end #header -->
    <div id="container">
        <div class="clearfix">
            <div class="content_l">
            	<dl class="job_detail">
                    <dt>
                        <h1 title="产品经理">
                            <em></em>
                            <div>{{$job['companyname']}}</div>
                           	{{$job['category_cn']}}
                        </h1>                                                                       	
                        <div class="jd_collection" id="jobCollection">
                       		<div class="jd_collection_success">
                       			<span>已成功收藏该职位，</span>
								<a class="jd_collection_page" href="collections.html">查看全部</a>								
								<a class="jd_collection_x" href="javascript:;"></a>
							</div>
                       	</div>
                    </dt>
                    <dd class="job_request">
                    	<span class="red">{{$job['salaryMin']}}k-{{$job['salaryMax']}}k</span>
                       	<span>{{$job['district_cn']}}</span> 
                       	<span>{{$job['experience_cn']}} </span>
                       	<span>{{$job['education_cn']}}</span> 
                       	<span>{{$job['nature_cn']}}</span><br>
                      	  职位诱惑 : {{$job['tag_cn']}}
                      	<div>发布时间：{{date('Y-m-d H:i:s',$job['addtime'])}}</div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">职位描述</h3>
                        <p><strong>工作职责：</strong>&nbsp;<br>1、挖掘公司互联网产品现有和预期的市场需求；&nbsp; <br>2、负责组织公司互联网新产品开发和产品改进；&nbsp; <br>3、发掘收集竞争对手信息，进行竞争对手分析，制定应对战略；&nbsp; <br>4、在产品运营中倾听用户声音，了解用户潜在需求，并在产品改进中满足；&nbsp; <br>5、在产品运营中整合已有的产品功能、用户资源、推广资源，策划运营活动；&nbsp; <br>6、与市场、运营、UI、开发、测试、公关、法务、客服等人员紧密合作，实现产品目标。 <br>&nbsp; <br> <strong>任职要求：</strong> <br>1、本科及以上学历，英语四级以上，专业不限；&nbsp; <br>2、对互联网产品有敏锐的直觉和良好的市场分析能力；&nbsp; <br>3、有严密的逻辑分析能力，有良好的沟通协作能力；&nbsp; <br>4、有很强的责任心、学习能力、文字表达能力；&nbsp; <br>5、具有很强的团队协助精神，善于总结和分享经验；&nbsp; <br>6、具有互联网产品规划和产品设计经验者优先。</p> 
						<p>&nbsp;</p> 
						<p><strong>其他：&nbsp;</strong></p> 
						<p>1、五险一金、商业综合医疗保险，节日慰问金、生日礼金、结婚礼金、年度体检、旅游；</p> 
						<p>2、工作时间为5天工作制，享受国家法定节假日、带薪年假7天、带薪病假、产假（陪产假）、婚假、丧假等；</p> 
						<p>3、每周定期举办足球、羽毛球、篮球及员工深度互动等文体活动。</p>
                    </dd>                    
                    <!-- 用户是否激活 0-否；1-是 -->
	                <dd class="resume resume_web">
				        <div>
							<span> 你已有可投递的在线简历：<a title="" target="_blank" href="jianli.html"><strong>{{$email}}</strong></a></span><br>
							<span>简历更新于2014-07-01 15:53</span>
				        </div>
                        <span class="setBtns">
                        	<a target="_blank" title="预览" href="h/resume/preview.html">预览</a> |
                        	<a title="修改" target="_blank" href="jianli.html">修改</a>
                        </span>
                    </dd>
				        <div class="saoma saoma_btm">
                      	<div class="dropdown_menu">
							<div class="drop_l">
								<img width="131" height="131" src="style/images/b533f6e729e74b418fcd6862bbde95dc_318969.jpg">
								<span>[仅限本人使用]</span>
							</div>
							<div class="drop_r">
								<div class="drop_title"></div>
								<p>
									想知道HR在看简历嘛？<br>
          							想在微信中收到面试通知？<br>
          							<span>&lt;&lt; 扫一扫，给你解决</span>
								</p>
							</div>
						</div>
                    </div>
                     <dd>
                     <!-- 用户是否激活 0-否；1-是 -->    				                   			
	                	<a title="投个简历" class="btn fr btn_apply inline cboxElement" href="#setResumeApply">投个简历</a>
					</dd>
                </dl>
            <div id="weibolist"></div>
            </div>	
            <div class="content_r">
                <dl class="job_company">
                    <dt>
                    	<a target="_blank" href="h/c/5004.html">
                            <img width="80" height="80" alt="广州百田信息科技有限公司" src="{{$job['logo']}}" class="b2">
                            <div>
                                <h2 class="fl">
                                	{{$job['companyname']}}
                                  	<img width="15" height="19" alt="拉勾认证企业" src="style/images/valid.png"> 
                                    <span class="dn">拉勾认证企业</span>                                                                       
                                </h2>
                            </div>
                        </a>
                    </dt>
                    <dd>
                    	<ul class="c_feature reset">
                        	<li><span>领域</span> {{$job['trade_cn']}}</li>
                        	<li><span>规模</span> {{$job['scale_cn']}}人</li>
                        	<li>
                        		<span>主页</span> 
                        		<a rel="nofollow" title="http://www.100bt.com" target="_blank" href="http://www.100bt.com">http://www.100bt.com</a>
           					</li>
                        </ul> 
                        <h4>发展阶段</h4>
                        <ul class="c_feature reset">
                        	<li><span>目前阶段</span> 上市公司</li>
                        </ul>
                       	 <h4>工作地址</h4>
                       	<div>广州市天河区科韵路信息港建中路36号裕桥商务大厦</div>                       
                     </dd>
                </dl>
                				<div id="myRecommend_jd">
            		<h2>可能适合你的职位 <i>匹配度</i></h2>
            		<ul class="reset">
            		@foreach($connect as $k=>$v)
            			<li>
            				<a target="_blank" href="h/jobs/148004.html">
								<span class="f14">{{$v['category_cn']}}</span>
								<span class="c7">{{$v['companyname']}}</span>
								<em>92%</em>
							</a>
            			</li>
            		@endforeach
            		</ul>
            		<a target="_blank" class="more" href="job_list">更多推荐职位&gt;&gt;</a>
            		</div><!--end #myRecommend-->
				    <a class="eventAd" target="_blank" href="h/subject/s_zhouyou.html?utm_source=BD__lagou&amp;utm_medium=&amp;utm_campaign=zhouyou">
                  <img width="280" height="135" src="style/images/zhouyou.jpg">
                </a>
            </div>
       	</div>                    
      <input type="hidden" id="userid" name="userid" value="68ad090107cb481fff4ef57dcc6681a1">
      <input type="hidden" id="resend_type" name="type" value="1">
      <input type="hidden" id="jobid" value="22194">
      <input type="hidden" id="companyid" value="5004">
      <input type="hidden" id="positionLng" value="">
      <input type="hidden" id="positionLat" value="">
	
		<div id="tipOverlay"></div>
<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<!-- 设置默认投递简历 -->
	<!-- <div style="height:280px;" class="popup" id="setResume">
	    <table width="100%">
	    	<tbody><tr>
	    		<td class="f18 c5">请选择你要投出去的简历：</td>
	    	</tr>
	    	<tr>
	        	<td>
                    <form class="resumeSetForm" id="resumeSetForm">
	            		<label class="radio">
	            			<input type="radio" value="1" class="resume1" name="resumeName">
	            			在线简历：
	            			<span title="jason的简历">{{$email}}</span>
	            		</label>
            			<div class="setBtns">
            				<a target="_blank" href="h/resume/preview.html">预览</a> |
	            			<a target="_blank" href="jianli.html">修改</a>
            			</div>
	            		<div class="clear"></div>
	            		<label class="radio">
	            			<input type="radio" value="0" class="resume0" name="resumeName">
	            			附件简历：
	            			<span class="uploadedResume red">暂无附件简历</span>
	            		</label>
	            		<div class="setBtns">
	            			<a class="downloadResume dn" href="h/nearBy/downloadResume">下载</a> <span class="dn">|</span>
            				<a class="reUpload" title="上传附件简历" target="_blank">上传附件简历</a>		            			
            				<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume1')" id="reUploadResume1" name="newResume" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
            			</div>
            			<div class="clear"></div>
            			<span style="display:none;" class="error">只支持word、pdf、ppt、txt、wps格式文件，请重新上传</span>
	            		<label class="bgPink">默认使用此简历直接投递，下次不再提示</label>
	            		<span class="setTip error"></span>
	            		<input type="submit" value="保存设置" class="btn_profile_save btn_s">
	            	</form>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#setResume--> -->

<!-- 投递简历时  - 设置默认投递简历 -->
	<div style="height:280px;" class="popup" id="setResumeApply">
	    <table width="100%">
	    	<tbody><tr>
	    		<td class="f18 c5">请选择你要投出去的简历：</td>
	    	</tr>
	    	<tr>
	        	<td>
                    <form class="resumeSetForm" id="resumeSendForm" >
                    	@foreach($resume as $k=>$v)
	            		<div class="clear"></div>
	            		<label class="radio">
	            			<input type="radio" value="{{$v['id']}}" class="resume0" name="resumeName">
	            			<span>{{$v['title']}}</span>
	            		</label>
	            		<div class="setBtns">
            				<a target="_blank" href="h/resume/preview.html">预览</a> |
	            			<a target="_blank" href="jianli.html">修改</a>
            			</div>
            			@endforeach
	            		<input type="button" value="确认投递简历" class="btn_profile_save btn_s" id="add_job">
	            	</form>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#setResumeApply-->	
	<!-- 登录框 -->
	<div style="height:240px;" class="popup" id="loginPop">
       	<form id="loginForm">
			<input type="text" placeholder="请输入登录邮箱地址" tabindex="1" name="email" id="email" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<input type="password" placeholder="请输入密码" tabindex="2" name="password" id="password" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<span id="beError" style="display:none;" class="error"></span>
		    <label for="remember" class="fl"><input type="checkbox" name="autoLogin" checked="checked" value="" id="remember"> 记住我</label>
		    <a class="fr" href="h/reset.html">忘记密码？</a>
		    <input type="submit" value="登 &nbsp; &nbsp; 录" id="submitLogin">
		</form>
		<div class="login_right">
			<div>还没有拉勾帐号？</div>
			<a class="registor_now" href="register.html">立即注册</a>
		    <div class="login_others">使用以下帐号直接登录:</div>
		    <a title="使用新浪微博帐号登录" class="icon_wb" target="_blank" href="h/ologin/auth/sina.html"></a>
		    <a title="使用腾讯QQ帐号登录" target="_blank" class="icon_qq" href="h/ologin/auth/qq.html"></a>
		</div>
    </div><!--/#loginPop-->    
     <!-- 投简历成功 -->
    <div style="width:440px;padding-bottom:10px;" class="popup" id="deliverResumesSuccess">
        <table width="100%">
            <tbody><tr class="drawGGJ">
                <td align="center">
                	<p class="font_16 count"></p>
                	<p class="font_16 share dn">邀请好友成功注册拉勾，可提升每日投递量 &nbsp;&nbsp; <a target="_blank" href="h/share/invite.html">邀请好友&gt;&gt;</a></p>
                </td>
            </tr>
        	<tr class="drawQD">
            	<td align="center"><a class="btn_s" href="javascript:top.location.reload();">确&nbsp;定</a></td>
            </tr>
            <tr class="weixinQR">
            	<td>
            		<div class="weixin">
                       	<div class="qr">
                       		<img width="120" height="120" src="style/images/b533f6e729e74b418fcd6862bbde95dc_318969.jpg">
                       		
                       		<div>[仅限本人使用]</div>
                       	</div>
                       	<div class="qr_text">
						              想知道HR是否看过你的简历？<br>
						              想在微信中收到面试通知？<br>
						    <span>&lt;&lt; 微信扫一扫，一并解决</span>
                       	</div>
                   	</div>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesSuccess-->
    
    <!-- 投递时，一个简历都没有弹窗 -->
	<div class="popup" id="sendNoResume">
	    <table width="100%">
	    	<tbody><tr>
	    		<td align="center" class="f18 c5">你还没有可以投递的简历呢</td>
	    	</tr>
	    	<tr>
	    		<td align="center" class="c5">请填写在线简历后再投递吧~</td>
	    	</tr>
	    	<tr>
	        	<td align="center">
                    <a target="_blank" href="jianli.html" class="btn">完善在线简历</a>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#sendNoResume-->
</div>
<!------------------------------------- end ----------------------------------------->

<script src="style/js/job_detail.js" type="text/javascript"></script>
<script src="style/js/count.js" type="text/javascript"></script>

<!-- <script type="text/javascript">
var options = {
    	"snsId": "snwb",
    	"uid": "",
    	"token": "",
    	"openId": "",
    	"appKey": "",
    	"merchantId": "11253",
    	"merchantType": "news",
    	"socialLoginUrl_sina": ctx+"/ologin/auth/sina.html",
    	"socialLoginUrl_qq": "",
    	"weiboId_sina": "3619164344010985",
    	"weiboId_qq": "",
    	"socialAllUrl": ctx+"/user/hbzx.html",
    	"productId": "22194",
    	"productCategory": "",
    	"productName": "产品经理",
    	"productArea": "广州",
    	"productPrice": "",
    	"productUrl": ctx+"/jobs/22194.html",
    	"productImage": ctx+"/upload/logo/ff8080814356e881014357741e5910f1.jpg",
    	"excerpt": "广州 / 全职 / 8k-15k / 经验1-3年 / 本科及以上 / 职位诱惑 : 上市公司，快速发展空间，产品的话语权",
    	"sendContent":"我觉得这个职位不错，你觉得咋样？",
    	"shareContent":"请输入你对此职位的评论",
    	"autoSend": false,
    	"load": true
　　}
</script>
<script src="style/js/common.js" type="text/javascript"></script> -->
<script>
$(function(){
	$('#weibolist .cookietxte').text('推荐本职位给好友');
	$(document).bind('cbox_complete', function(){ 
		hbzxJQ("#gaosutapt .pttui a").trigger("click"); 
		hbzxJQ("#mepingpt .pttui a").trigger("click"); 
	});
	$('#cboxOverlay').bind('click',function(){
		top.location.reload();
	});
	$('#colorbox').on('click','#cboxClose',function(){
		if($(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'deliverResumesSuccess' || $(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'uploadFileSuccess'){
			top.location.reload();
		}
	});
			popQR();
	})
</script>
			<div class="clear"></div>
			<input type="hidden" value="e789f5e7097b4c828e9d40ef39a6baf8" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="h/about.html">联系我们</a>
		    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>
<script>
$('#add_job').click(function(){
	var radio=$('.resume0');
	for(var i=0;i<radio.length;i++){
		if(radio.eq(i).prop('checked')){
			var resume_id=radio.eq(i).val();
			var resume_name=radio.eq(i).next().html();
		}
	}
	var jobs_id={{$job['id']}};
	// alert(company_name);
	$.ajax({
		type:'get',
		url:'toudi_add',
		data:{
			'resume_id':resume_id,
			'resume_name':resume_name,
			'jobs_id':jobs_id
		},
		success:function(msg){
			if(msg==1){
				alert('投递成功！');
				location.href='job_list';
				// $('#setResumeApply').attr('style','display:none');
			}else if(msg==2){
				alert('您已经投递过了！');
				// $('#setResumeApply').attr('style','display:none');
			}else{
				alert('投递失败！');
			}
		}
	})
	
})
</script>