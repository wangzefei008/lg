﻿<!DOCTYPE HTML>
<html>
<head>
<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录-拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>

<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script type="text/javascript" src="style/js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="h/"><img src="style/images/logo_white.png" width="285" height="62" alt="拉勾招聘" /></a>
            <div id="cloud_s"><img src="style/images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="style/images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>
        
    	<input type="hidden" id="resubmitToken" value="" />		
		 <div class="login_box">
        	<form id="loginForm"> 
				<input type="text" id="email" name="email" value="" tabindex="1" placeholder="请输入登录邮箱地址" />
			  	<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
				<span class="error" style="display:none;" id="beError"></span>
			    <label class="fl" for="remember"><input type="checkbox" id="remember"  checked="checked" name="autoLogin" /> 记住我</label>
			    <a href="reset" class="fr">忘记密码？</a>
			    
				<input type="button" id="submitLogin" value="登 &nbsp; &nbsp; 录" />
				<!-- <a style="color:#fff;" href="" class="submitLogin" title="登 &nbsp; &nbsp; 录"/>登 &nbsp; &nbsp; 录</a> -->
			</form>
			<div class="login_right">
				<div>还没有拉勾帐号？</div>
				<a  href="{{URL::to('register')}}"  class="registor_now">立即注册</a>
			    <div class="login_others">使用以下帐号直接登录:</div>
			    <a  href="h/ologin/auth/sina.html"  class="icon_wb" title="使用新浪微博帐号登录"></a>
			    <a  href="qq"  class="icon_qq"  title="使用腾讯QQ帐号登录"></a>
			</div>
        </div>
        <div class="login_box_btm"></div>
    </div>

<script type="text/javascript">
$(function(){
	//验证表单
	 	$("#loginForm").validate({
	 		/* onkeyup: false,
	    	focusCleanup:true, */
	        rules: {
	    	   	email: {
	    	    	required: true,
	    	    	email: true,

	    	   	},
	    	   	password: {
	    	    	required: true
	    	   	}
	    	},
	    	messages: {
	    	   	email: {
	    	    	required: "请输入登录邮箱地址",
	    	    	email: "请输入有效的邮箱地址，如：vivi@lagou.com"
	    	   	},
	    	   	password: {
	    	    	required: "请输入密码"
	    	   	}
	    	}	         
		});
		$('#submitLogin').click(function(event){

			var email=$('#email').val();
			var password=$('#password').val();
			if($('#remember').prop('checked')){
				var remember=1;
			}else{
				var remember=0;
			}
			$.ajax({
				type:'post',
				url:'{{URL::to("login_do")}}',
				data:{
					'email':email,
					'password':password,
					'remember':remember
				},
				success:function(msg){
					if(msg==1){
						location.href='{{URL::to("/")}}';
					}else{
						alert("用户名或密码错误");
					}
				}
			})
		})

})

</script>
</body>
</html>