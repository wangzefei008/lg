<?php echo $__env->make('components.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- end #header -->
	<div id="container">

		<div class="sidebar">
			<div id="options" class="greybg">
				<dl >
					<dt>月薪范围 <em ></em></dt>
					<dd >
						<div>不限</div>
						<div>2k以下</div>
						<div>2k-5k</div>
						<div>5k-10k</div>
						<div>10k-15k</div>
						<div>15k-25k</div>
						<div>25k-50k</div>
						<div>50k以上</div>
					</dd>
				</dl>
				<dl >
					<dt>工作经验 <em ></em></dt>
					<dd >
						<div>不限</div>
						<div>应届毕业生</div>
						<div>1年以下</div>
						<div>1-3年</div>
						<div>3-5年</div>
						<div>5-10年</div>
						<div>10年以上</div>
					</dd>
				</dl>
				<dl >
					<dt>最低学历 <em ></em></dt>
					<dd >
						<div>不限</div>
						<div>大专</div>
						<div>本科</div>
						<div>硕士</div>
						<div>博士</div>
					</dd>
				</dl>
				<dl >
					<dt>工作性质 <em ></em></dt>
					<dd >
						<div>全职</div>
						<div>兼职</div>
						<div>实习</div>
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
			<!-- 	            <a href="http://www.osforce.cn/" target="_blank" class="partnersAd">
     <img src="style/images/osf-lg.jpg" width="230" height="80" alt="开源力量"  />
 </a>
-->
		</div>

		<div class="content">
			<div id="search_box">
				<form id="searchForm" name="searchForm" action="wantSearch" method="get">
					<ul id="searchType">
						<li data-searchtype="1" class="type_selected">职位</li>
						<li data-searchtype="4">专业</li>
					</ul>
					<div class="searchtype_arrow"></div>
					<input type="text" id="search_input" name = "kd"  tabindex="1" placeholder="请输入职位名称，如：产品经理"  />
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
			<script type="text/javascript" src="style/js/search_want.min.js"></script>
			<dl class="hotSearch">
				<dt>热门搜索：</dt>
				<dd><a href="wantSearch?city=全国&project=Java">Java</a></dd>
				<dd><a href="wantSearch?city=全国&project=PHP">PHP</a></dd>
				<dd><a href="wantSearch?city=全国&project=Android">Android</a></dd>
				<dd><a href="wantSearch?city=全国&project=iOS">iOS</a></dd>
				<dd><a href="wantSearch?city=全国&project=前端">前端</a></dd>
				<dd><a href="wantSearch?city=全国&project=产品经理">产品经理</a></dd>
				<dd><a href="wantSearch?city=全国&project=UI">UI</a></dd>
				<dd><a href="wantSearch?city=全国&project=运营">运营</a></dd>
				<dd><a href="wantSearch?city=全国&project=BD">BD</a></dd>
				<dd><a href="wantSearch?gx=实习&city=全国">实习</a></dd>
			</dl>			<div class="breakline"></div>
			<dl class="workplace" id="workplaceSelect">
				<dt class="fl">工作地点：</dt>
				<dd >
					<a href="wantSearch?city=全国" class="current">全国</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=北京" >北京</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=上海" >上海</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=广州" >广州</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=深圳" >深圳</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=成都" >成都</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=杭州" >杭州</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=武汉" >武汉</a>
					|
				</dd>
				<dd >
					<a href="wantSearch?city=南京" >南京</a>
					|
				</dd>
				<dd  class="more" >
					<a href="javascript:;" >其他</a>
					<div class="triangle citymore_arrow"></div>
				</dd>
				<dd id="box_expectCity" class="searchlist_expectCity dn">
					<span class="bot"></span>
					<span class="top"></span>
					<dl>
				<dt>ABCDEF</dt>
				<dd>
					<a href="wantSearch?city=北京"><span>北京</span></a>
					<a href="wantSearch?city=长春"><span>长春</span></a>
					<a href="wantSearch?city=成都"><span>成都</span></a>
					<a href="wantSearch?city=重庆"><span>重庆</span></a>
					<a href="wantSearch?city=长沙"><span>长沙</span></a>
					<a href="wantSearch?city=常州"><span>常州</span></a>
					<a href="wantSearch?city=东莞"><span>东莞</span></a>
					<a href="wantSearch?city=大连"><span>大连</span></a>
					<a href="wantSearch?city=佛山"><span>佛山</span></a>
					<a href="wantSearch?city=福州"><span>福州</span></a>
				</dd>
			</dl>
			<dl>
				<dt>GHIJ</dt>
				<dd>
					<a href="wantSearch?city=贵阳"><span>贵阳</span></a>
					<a href="wantSearch?city=广州"><span>广州</span></a>
					<a href="wantSearch?city=哈尔滨"><span>哈尔滨</span></a>
					<a href="wantSearch?city=合肥"><span>合肥</span></a>
					<a href="wantSearch?city=海口"><span>海口</span></a>
					<a href="wantSearch?city=杭州"><span>杭州</span></a>
					<a href="wantSearch?city=惠州"><span>惠州</span></a>
					<a href="wantSearch?city=金华"><span>金华</span></a>
					<a href="wantSearch?city=济南"><span>济南</span></a>
					<a href="wantSearch?city=嘉兴"><span>嘉兴</span></a>
				</dd>
			</dl>
			<dl>
				<dt>KLMN</dt>
				<dd>
					<a href="wantSearch?city=昆明"><span>昆明</span></a>
					<a href="wantSearch?city=廊坊"><span>廊坊</span></a>
					<a href="wantSearch?city=宁波"><span>宁波</span></a>
					<a href="wantSearch?city=南昌"><span>南昌</span></a>
					<a href="wantSearch?city=南京"><span>南京</span></a>
					<a href="wantSearch?city=南宁"><span>南宁</span></a>
					<a href="wantSearch?city=南通"><span>南通</span></a>
				</dd>
			</dl>
			<dl>
				<dt>OPQR</dt>
				<dd>
					<a href="wantSearch?city=青岛"><span>青岛</span></a>
					<a href="wantSearch?city=泉州"><span>泉州</span></a>
				</dd>
			</dl>
			<dl>
				<dt>STUV</dt>
				<dd>
					<a href="wantSearch?city=上海"><span>上海</span></a>
					<a href="wantSearch?city=石家庄"><span>石家庄</span></a>
					<a href="wantSearch?city=绍兴"><span>绍兴</span></a>
					<a href="wantSearch?city=沈阳"><span>沈阳</span></a>
					<a href="wantSearch?city=深圳"><span>深圳</span></a>
					<a href="wantSearch?city=苏州"><span>苏州</span></a>
					<a href="wantSearch?city=天津"><span>天津</span></a>
					<a href="wantSearch?city=太原"><span>太原</span></a>
					<a href="wantSearch?city=台州"><span>台州</span></a>
				</dd>
			</dl>
			<dl>
				<dt>WXYZ</dt>
				<dd>
					<a href="wantSearch?city=武汉"><span>武汉</span></a>
					<a href="wantSearch?city=无锡"><span>无锡</span></a>
					<a href="wantSearch?city=温州"><span>温州</span></a>
					<a href="wantSearch?city=西安"><span>西安</span></a>
					<a href="wantSearch?city=厦门"><span>厦门</span></a>
					<a href="wantSearch?city=烟台"><span>烟台</span></a>
					<a href="wantSearch?city=珠海"><span>珠海</span></a>
					<a href="wantSearch?city=中山"><span>中山</span></a>
					<a href="wantSearch?city=郑州"><span>郑州</span></a>
				</dd>
			</dl>
			</dd>
			</dl>

			<div id="tip_didi" class="dn">
				<span>亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~</span>
				<a href="javascript:;">我知道了</a>
			</div>

			<ul class="hot_pos reset">
				<?php foreach($job as $value): ?>
					<li class="odd clearfix">
						<div class="hot_pos_l">
							<div class="mb10">
								<span style="font-size: 16px;">居住地</span>
								&nbsp;
								<span class="c9"><?php echo e($value->residence); ?></span>
							</div>
							<span><em class="c7">姓名： </em><?php echo e($value->fullname); ?></span>
							<span><em class="c7">性别： </em><?php echo e($value->sex_cn); ?></span>
							<span><em class="c7">工作经验：</em><?php echo e($value->experience_cn); ?></span>
							<span><em class="c7">出生年份： </em><?php echo e($value->birthdate); ?></span>
							<br/>
							<span><em class="c7">期望薪资：</em><?php echo e($value->wage_cn); ?></span>
							<br/>
							<span><?php if(floor((time()-$value->addtime)/3600/24)==0): ?>
									<?php echo e('今天发布'); ?>

								<?php else: ?> <?php echo e(floor((time()-$value->addtime)/3600/24)); ?>天前发布</span>
							<?php endif; ?>
						</div>
						<div class="hot_pos_r">
							<div class="apply">
								<a href="wantInfo?id=<?php echo $value->id?>">查看详情</a>
							</div><br/>
							<span><em class="c7">所学专业： </em><?php echo e($value->major_cn); ?></span>
							<span><em class="c7">身高：</em><?php echo e($value->height); ?></span>
							<br />
							<span><em class="c7">应聘职位： </em><?php echo e($value->trade_cn); ?></span>
							<span><em class="c7">婚姻状况： </em><?php echo e($value->marriage_cn); ?></span>
							<ul class="companyTags reset">
							</ul></div>
					</li>
				<?php endforeach; ?>




			</ul>
			<div class="Pagination"><?php echo $job->links(); ?></div>
		</div>

		<script>
			$(function(){
				/***************************
				 * 分页
				 */
//				$('.Pagination').pager({
//					currPage: 1,
//					pageNOName: "pn",
//					form: "searchForm",
//					pageCount: 30,
//					pageSize:  5
//				});

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
						var val=$(this).html();
						$('#yxInput').attr('value',val);
						var par=window.location.search;

						if(par==''){
							location.href='wantSearch'+par+'?yx='+val;
						}else{
							location.href='wantSearch'+par+'&yx='+val;
						}
//			editForm("yxInput" , $(this).html());

					}
					else if(fn=="工作经验"){
						var val=$(this).html();
						var par=window.location.search;
						if(par==''){
							location.href='wantSearch'+par+'?gj='+val;
						}else{
							location.href='wantSearch'+par+'&gj='+val;
						}
//			editForm("gjInput" , $(this).html());
					}
					else if(fn=="最低学历"){
						var val=$(this).html();
						var par=window.location.search;
						if(par==''){
							location.href='wantSearch'+par+'?xl='+val;
						}else{
							location.href='wantSearch'+par+'&xl='+val;
						}
					}
					else if(fn=="工作性质"){
						var val=$(this).html();
						var par=window.location.search;
						if(par==''){
							location.href='wantSearch'+par+'?gx='+val;
						}else{
							location.href='wantSearch'+par+'&gx='+val;
						}
						// editForm("gxInput" , $(this).html());
					}
					else if(fn=="发布时间"){
						var val=$(this).html();
						var par=window.location.search;
						if(par==''){
							location.href='wantSearch'+par+'?st='+val;
						}else{
							location.href='wantSearch'+par+'&st='+val;
						}
						// editForm("stInput" , $(this).html());
					}
				});

//				$('#selected ul').delegate('li span.select_remove','click',function(event){
//					var firstName = $(this).parent('li').find('strong').text();
//					var fn = $.trim(firstName);
//					if (fn=="月薪范围")
//						editForm("yxInput" , "");
//					else if(fn=="工作经验")
//						editForm("gjInput" , "");
//					else if(fn=="最低学历")
//						editForm("xlInput" , "");
//					else if(fn=="工作性质")
//						editForm("gxInput" , "");
//					else if(fn=="发布时间")
//						editForm("stInput" , "");
//				});

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