@include('components.head')	
<div id="container">        
    <div class="sidebar">
       	<div id="options" class="greybg">
            <dl >
                <dt>月薪范围 <em ></em></dt>
	            <dd >
                	@foreach($category['QS_wage'] as $k=>$v)
                		<div>{{$v['c_name']}}</div>
                	@endforeach
	            </dd> 
            </dl>
            <dl >
                <dt>工作经验 <em ></em></dt>
	            <dd >
                	@foreach($category['QS_experience'] as $k=>$v)
                		<div>{{$v['c_name']}}</div>
                	@endforeach
            	</dd> 
            </dl>
            <dl >
                <dt>最低学历 <em ></em></dt>
	            <dd >
                	@foreach($category['QS_education'] as $k=>$v)
                		<div>{{$v['c_name']}}</div>
                	@endforeach
           		</dd> 
            </dl>
            <dl >
                <dt>工作性质 <em ></em></dt>
	            <dd >
                	@foreach($category['QS_jobs_nature'] as $k=>$v)
                		<div>{{$v['c_name']}}</div>
                	@endforeach
            	</dd> 
            </dl>
            <dl>
                <dt>发布时间 <em ></em></dt>
	            <dd >               	
                	<div>3天内</div>                	
                	<div>一周内</div>                	
                	<div>一月内</div>                	
           		</dd> 
            </dl>
        </div>           
    </div>
    <div class="content">
    	<div id="search_box">
			<form id="searchForm" name="searchForm" action="{{URL::to('job_list')}}" method="get">
			    <ul id="searchType">
			    	<li data-searchtype="1" class="type_selected">职位</li>
			    	<li data-searchtype="4">公司</li>
			    </ul>
			    <div class="searchtype_arrow"></div>
			    <input type="text" id="search_input" name = "kd"  tabindex="1" value=""/>
			    <input type="hidden" name="city" id="cityInput" value="全国"/>
			    <input type="submit" id="search_button" value="搜索" />
		    </form>
		</div>
<style>
.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
.ui-menu-item a{display:block;overflow:hidden;}
</style>
<script type="text/javascript" src="style/js/search.min.js"></script>
<dl class="hotSearch">
	<dt>热门搜索：</dt>
	@foreach($hot as $k=>$v)
		<dd><a href="job_list?kd={{$v['w_word']}}">{{$v['w_word']}}</a></dd>
	@endforeach
</dl>			
<div class="breakline"></div>
    <dl class="workplace" id="workplaceSelect">
        <dt class="fl">工作地点：</dt>
       	<dd >
       		省份：
        	<select id="change">
        	<option value="" selected>全国</option>
			@foreach($district as $k=>$v)
				<option value="{{$v['id']}}">{{$v['categoryname']}}</option>
			@endforeach
        	</select>
        </dd> 
        <dd>
		地区：
		<select id="aa">
			<option id='bb' class='aa'>请选择</option>
        </select> 
        </dd>
    </dl>
          
            <div id="tip_didi" class="dn">
            	<span>亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~</span>
            	<a href="javascript:;">我知道了</a>
            </div>            
            <ul class="hot_pos reset">
            	@foreach($job as $k=>$v)
	            <li class="odd clearfix">
			        <div class="hot_pos_l">
			            <div class="mb10">
			                <a href="h/jobs/86989.html" title="前端开发" target="_blank">{{$v['category_cn']}}</a> 
			                &nbsp;
			                <span class="c9">{{$v['district_cn']}}</span>
			            </div>
			            <span><em class="c7">月薪：</em>{{$v['salaryMin']}}-{{$v['salaryMax']}}</span>
			            <span><em class="c7">经验：</em>{{$v['experience_cn']}}</span>
                        <span><em class="c7">最低学历： </em>{{$v['education_cn']}}</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>{{$v['tag_cn']}}</span>
                        <br />
                        <span>{{date('Y-m-d H:i:s',$v['addtime'])}}</span>
			        </div> 
					<div class="hot_pos_r">
			            <div class="apply">
			                <a href="toudi.html" target="_blank">投个简历</a>
			            </div>
			            <div class="mb10"><a href="h/c/1712.html" title="紫色医疗" target="_blank">{{$v['companyname']}}</a></div>
                        <span><em class="c7">领域： </em>{{$v['trade_cn']}}</span>
                        <span><em class="c7">创始人：</em> {{$v['contact']}}</span><br /> 
                        <span><em class="c7">规模： </em>{{$v['scale_cn']}}</span>
			        </div>
			    </li>
			    @endforeach			                
			</ul>
	        <div class="Pagination">
			{!! $job->appends(array('kd'=>$job->kd,'gx'=>$job->gx,'xl'=>$job->xl,'gj'=>$job->gj,'st'=>$job->st,'city'=>$job->city,'yx'=>$job->yx))->render() !!}
	        </div>
        </div>	
<script>
$(function(){	
	$('#options dd div').click(function(){
		var firstName = $(this).parents('dl').children('dt').text();
		var fn = $.trim(firstName);
		if (fn=="月薪范围"){
			var val=$(this).html();
			$('#yxInput').attr('value',val);
			var par=window.location.search;
			if(par==''){
				location.href='job_list'+par+'?yx='+val;
			}else{
				location.href='job_list'+par+'&yx='+val;
			}			
		}
		else if(fn=="工作经验"){
			var val=$(this).html();
			var par=window.location.search;
			if(par==''){
				location.href='job_list'+par+'?gj='+val;
			}else{
				location.href='job_list'+par+'&gj='+val;
			}	
		}
		else if(fn=="最低学历"){
			var val=$(this).html();
			var par=window.location.search;
			if(par==''){
				location.href='job_list'+par+'?xl='+val;
			}else{
				location.href='job_list'+par+'&xl='+val;
			}	
		}
		else if(fn=="工作性质"){
			var val=$(this).html();
			var par=window.location.search;
			if(par==''){
				location.href='job_list'+par+'?gx='+val;
			}else{
				location.href='job_list'+par+'&gx='+val;
			}	
		}
		else if(fn=="发布时间"){
			var val=$(this).html();
			var par=window.location.search;
			if(par==''){
				location.href='job_list'+par+'?st='+val;
			}else{
				location.href='job_list'+par+'&st='+val;
			}	
		}
	});	
	/* search结果飘绿	*/
	(function($) {
		var searchVal = $('#search_input').val();
		var reg = /\s/g;     
		searchVal = searchVal.replace(reg, "").split(""); 
		
		var resultL = '';
		var resultR = '';
		$('.hot_pos li').each(function(){
			resultL = $('.hot_pos_l a',this).text().split("");
			$.each(resultL,function(i,v){
				if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
					resultL[i] = '<span>'+ v +'</span>';
				}
			});
			$('.hot_pos_l a',this).html(resultL.join(''));
			
			resultR = $('.hot_pos_r .mb10 a',this).text().split("");
			$.each(resultR,function(i,v){
				if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
					resultR[i] = '<span>'+ v +'</span>';
				}
			});
			$('.hot_pos_r .mb10 a',this).html(resultR.join(''));
		});
		
	})(jQuery);
	
	//didi tip
   	if($.cookie('didiTip') != 1 && false){
		$('#tip_didi').show();
	}
	$('#tip_didi a').click(function(){
		$(this).parent().remove();
		$.cookie('didiTip',1,{ expires: 30, path: '/'});
	});
	//城市联动
	$('#change').change(function()
	{
		$('#aa').nextAll().remove();
		var obj=$(this);
		var parentid=obj.val();
		$.ajax({
			type:'post',
			url:'get_district',
			data:{
				'parentid':parentid
			},
			dataType:'json',
			success:function(msg){
				var str='';
				$.each(msg,function(k,v){
					str+='<option value="'+v.categoryname+'">'+v.categoryname+'</option>';					
				})
				$('#bb').after(str);
			}
		})
	})
	$('#aa').change(function(){
		var obj=$(this);
		var option=$('#change option');
		for(var i=0;i<option.length;i++){
			if(option.eq(i).prop('selected')){
				var province=option.eq(i).html();
			}
		}
		var option1=$('#aa option');
		for(var i=0;i<option1.length;i++){
			if(option1.eq(i).prop('selected')){
				var place=option1.eq(i).html();
			}
		}
		var city=province+'/'+place;
		var par=window.location.search;
		if(par==''){
			location.href='job_list'+par+'?city='+city;
		}else{
			location.href='job_list'+par+'&city='+city;
		}	
	})	
});

function editForm(inputId,inputValue){
	$("#"+inputId).val(inputValue);
	var keyword = $.trim($('#search_input').val());
	var reg =  /[`~!@\$%\^\&\*\(\)_<>\?:"\{\},\\\/;'\[\]]/ig;
	var re = /#/g;
	var r = /\./g;
	var kw = keyword.replace(reg," ");
	if(kw == ''){
		$('#searchForm').attr('action','').submit();	
	}else{
		kw = kw.replace(re,'井');
		kw = kw.replace(r,'。');
		$('#searchForm').attr('action','').submit();
	}
	// $("#searchForm").submit();
}
</script>

		<div class="clear"></div>
		<input type="hidden" id="resubmitToken" value="" />
		<a id="backtop" title="回到顶部" rel="nofollow"></a>
    </div><!-- end #container -->
</div><!-- end #body -->
<div id="footer">
	<div class="wrapper">
		<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
	    <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
	    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
	    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
		<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
	</div>
</div>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>

<!--  -->

</body>
</html>