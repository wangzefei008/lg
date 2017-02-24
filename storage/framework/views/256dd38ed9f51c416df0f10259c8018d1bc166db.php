<?php echo $__env->make('components.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
<div id="container">        
    <div class="sidebar">
       	<div id="options" class="greybg">
            <dl >
                <dt>月薪范围 <em ></em></dt>
	            <dd >
                	<?php foreach($category['QS_wage'] as $k=>$v): ?>
                		<div><?php echo e($v['c_name']); ?></div>
                	<?php endforeach; ?>
	            </dd> 
            </dl>
            <dl >
                <dt>工作经验 <em ></em></dt>
	            <dd >
                	<?php foreach($category['QS_experience'] as $k=>$v): ?>
                		<div><?php echo e($v['c_name']); ?></div>
                	<?php endforeach; ?>
            	</dd> 
            </dl>
            <dl >
                <dt>最低学历 <em ></em></dt>
	            <dd >
                	<?php foreach($category['QS_education'] as $k=>$v): ?>
                		<div><?php echo e($v['c_name']); ?></div>
                	<?php endforeach; ?>
           		</dd> 
            </dl>
            <dl >
                <dt>工作性质 <em ></em></dt>
	            <dd >
                	<?php foreach($category['QS_jobs_nature'] as $k=>$v): ?>
                		<div><?php echo e($v['c_name']); ?></div>
                	<?php endforeach; ?>
            	</dd> 
            </dl>
            <dl >
                <dt>发布时间 <em ></em></dt>
	            <dd >
                	<div>今天</div>                	
                	<div>3天内</div>                	
                	<div>一周内</div>                	
                	<div>一月内</div>                	
           		</dd> 
            </dl>
        </div>           
<!-- QQ群 -->
	    <div class="qq_group">
        	加入<span>前端</span>QQ群
        	<div class="f18">跟同行聊聊</div>
        	<p>160541839</p>
        </div>
                            
<!-- 对外合作广告位  -->
    	<a href="http://www.w3cplus.com/" target="_blank" class="partnersAd">
			<img src="style/images/w3cplus.png" width="230" height="80" alt="w3cplus" />
		</a>
		<a href="" target="_blank" class="partnersAd">
			<img src="style/images/jquery_school.jpg" width="230" height="80" alt="JQ学校" />
		</a>
		<a href="http://linux.cn/" target="_blank" class="partnersAd">
	        <img src="style/images/linuxcn.png" width="230" height="80" alt="Linux中文社区"  />
	    </a>
	    <a href="http://zt.zhubajie.com/zt/makesite? utm_source=lagou.com&utm_medium=referral&utm_campaign=BD-yl" target="_blank" class="partnersAd">
	        <img src="style/images/zhubajie.jpg" width="230" height="80" alt="猪八戒" />
	    </a>
        <a href="http://www.imooc.com" target="_blank" class="partnersAd">
        	<img src="style/images/muke.jpg" width="230" height="80" alt="幕课网" />
        </a>
    </div>
    <div class="content">
    	<div id="search_box">
			<form id="searchForm" name="searchForm" action="list.html" method="get">
			    <ul id="searchType">
			    	        	<li data-searchtype="1" class="type_selected">职位</li>
			    	<li data-searchtype="4">公司</li>
			    	        </ul>
			    <div class="searchtype_arrow"></div>
			    <input type="text" id="search_input" name = "kd"  tabindex="1" value="前端开发"  placeholder="请输入职位名称，如：产品经理"  />
			    <input type="hidden" name="spc" id="spcInput" value="1"/>
			    <input type="hidden" name="pl" id="plInput" value=""/>
			    <input type="hidden" name="gj" id="gjInput" value=""/>
			    <input type="hidden" name="xl" id="xlInput" value=""/>
			    <input type="hidden" name="yx" id="yxInput" value=""/>
			    <input type="hidden" name="gx" id="gxInput" value="" />
			    <input type="hidden" name="st" id="stInput" value="" />
			    <input type="hidden" name="labelWords" id="labelWords" value="label" />
			    <input type="hidden" name="lc" id="lc" value="" />
			    <input type="hidden" name="workAddress" id="workAddress" value=""/>
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
	<?php foreach($hot as $k=>$v): ?>
		<dd><a href=""><?php echo e($v['w_word']); ?></a></dd>
	<?php endforeach; ?>
</dl>			
<div class="breakline"></div>
    <dl class="workplace" id="workplaceSelect">
        <dt class="fl">工作地点：</dt>
       	<dd >
       		省份：
        	<select id="change">
        	<option value="" selected>全国</option>
			<?php foreach($district as $k=>$v): ?>
				<option value="<?php echo e($v['id']); ?>"><?php echo e($v['categoryname']); ?></option>
			<?php endforeach; ?>
        	</select>
        </dd> 
        <dd>
		地区：
		<select>
			<option id="aa">请选择</option>
        </select> 
        </dd>
    </dl>
          
            <div id="tip_didi" class="dn">
            	<span>亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~</span>
            	<a href="javascript:;">我知道了</a>
            </div>            
            <ul class="hot_pos reset">
	            <li class="odd clearfix">
			        <div class="hot_pos_l">
			            <div class="mb10">
			                <a href="h/jobs/86989.html" title="前端开发" target="_blank">前端开发</a> 
			                &nbsp;
			                <span class="c9">[北京]</span>
			            </div>
			            <span><em class="c7">月薪：</em>10k-20k</span>
			            <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>借移动医疗大势享受坐直升飞机的职场发展</span>
                        <br />
                        <span>1天前发布</span>
			        </div> 
					<div class="hot_pos_r">
			             <div class="apply">
			                <a href="toudi.html" target="_blank">投个简历</a>
			            </div>
			            <div class="mb10"><a href="h/c/1712.html" title="紫色医疗" target="_blank">紫色医疗</a></div>
                        <span><em class="c7">领域： </em>移动互联网 ,健康医疗</span>
                        <span><em class="c7">创始人：</em> Lu</span><br />
                        <span><em class="c7">阶段： </em>成长型(A轮)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
			                <li>五险一金</li>
			                <li>股票期权</li>
			                <li>年度旅游</li>
			            </ul>
			        </div>
			    </li>			                
			</ul>
	        <div class="Pagination"></div>
        </div>	

<script>
$(function(){
	/***************************
 	 * 分页
 	 */
 	 	$('.Pagination').pager({
		      currPage: 1,
		      pageNOName: "pn",
		      form: "searchForm",
		      pageCount: 30,
		      pageSize:  5 
		});
		
	$(".workplace dd").not('.more').children('a').click(function(){
		$('#lc').val(1);
		editForm("cityInput" , $(this).html());
	});
	
	$("#box_expectCity dd span").click(function(){
		$('#lc').val(1);
		editForm("cityInput" , $(this).html());
	});
	
	$('#options dd div').click(function(){
		var firstName = $(this).parents('dl').children('dt').text();
		var fn = $.trim(firstName);
		if (fn=="月薪范围"){
			editForm("yxInput" , $(this).html());
		}
		else if(fn=="工作经验"){
			editForm("gjInput" , $(this).html());
		}
		else if(fn=="最低学历"){
			editForm("xlInput" , $(this).html());
		}
		else if(fn=="工作性质"){
			editForm("gxInput" , $(this).html());
		}
		else if(fn=="发布时间"){
			editForm("stInput" , $(this).html());
		}
	});
	
	$('#selected ul').delegate('li span.select_remove','click',function(event){
		var firstName = $(this).parent('li').find('strong').text();
		var fn = $.trim(firstName);
		if (fn=="月薪范围")
			editForm("yxInput" , "");
		else if(fn=="工作经验")
			editForm("gjInput" , "");
		else if(fn=="最低学历")
			editForm("xlInput" , "");
		else if(fn=="工作性质")
			editForm("gxInput" , "");
		else if(fn=="发布时间")
			editForm("stInput" , "");
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
					str+='<option value="'+v.id+'">'+v.categoryname+'</option>';
				})
				$('#aa').after(str);
			}
		})

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
		$('#searchForm').attr('action','list.html所有职位').submit();	
	}else{
		kw = kw.replace(re,'井');
		kw = kw.replace(r,'。');
		$('#searchForm').attr('action','list.html'+kw).submit();
	}
	//$("#searchForm").submit();
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