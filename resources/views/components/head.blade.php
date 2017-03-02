<?php
$email=Session::get('email');
$utype=Session::get('utype');
?>
<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <style>
        li{list-style: none}
    </style>
<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="" name="description">
<meta content="" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">

// var ctx = "h";
console.log(1);

</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="style/css/popup.css"/>
<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/additional-methods.js"></script>

<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
<style>
.Pagination ul li{
    list-style-type:none;
}
</style>
</head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
            </a>
            <ul class="reset" id="navheader">
                <li @if($status == 1) class="current" @endif><a href="{{URL::to('/')}}">首页</a></li>
                <li @if($status == 2) class="current" @endif ><a href="{{ URL::to('companylist') }}" >公司</a></li>
                <li @if($status == 3) class="current" @endif><a href="{{URL::to('job_list')}}" >招聘信息</a></li>
                <li @if($status == 4) class="current" @endif><a href="{{URL::to('hotmore')}}" >求职信息</a></li>
            </ul>
             @if(!empty($email))
                <dl class="collapsible_menu">
                    <dt>
                        <span>{{$email}}</span> 
                        <span class="red dn" id="noticeDot-0"></span>
                        <i></i>
                    </dt>
                    @if(!empty($utype)&&$utype==2)
                        <dd><a rel="nofollow" href="person">个人中心</a></dd>
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