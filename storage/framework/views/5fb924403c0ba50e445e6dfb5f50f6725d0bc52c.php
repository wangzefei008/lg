<?php echo $__env->make('components.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- end #header -->
<link rel="stylesheet" href="style/css/bootstrap.min.css">
<!-- <script src="style/js/jquery.min.js"></script> -->
<script src="style/js/bootstrap.min.js"></script>
    <div id="container">
        
        <div class="clearfix">
            <div class="content_l">
            	<form id="companyListForm" name="companyListForm" method="get" action="h/c/companylist.html">
	                <input type="hidden" id="city" name="city" value="全国" />
	                <input type="hidden" id="fs" name="fs" value="" />
	                <input type="hidden" id="ifs" name="ifs" value="" />
	                <input type="hidden" id="ol" name="ol" value="" />
	                <dl class="hc_tag">
	                    <dt>
	                       <!--  <h2 class="fl">热门公司</h2> -->
	                        <ul class="workplace reset fr" id="workplaceSelect">
	                        	                                <li >
                                	<a href="javascript:;"  class="current" >全国</a> 
                                	                                	|
                                	                                </li>
								<?php foreach($data_city as $k=>$v): ?>

										<?php if($v['level'] == 0  && $v['id']<=8): ?>
	                                                            <li >
                                	<a href="javascript:;" ><?php echo e($v['categoryname']); ?></a> 
                                	                                	|
                                	                                </li>
                                	    <?php endif; ?>
	                            <?php endforeach; ?>
	                                                            <li  class="more" >
                                	<a href="javascript:;" >其他</a> 
                                	                                	<div class="triangle citymore_arrow"></div>
                                	                                </li>

	                            	                            <li id="box_expectCity" class="searchlist_expectCity dn">
					            	<span class="bot"></span>
					            	<span class="top"></span>
						    								    										    							    										    		<dl>
							    			<dt></dt>
							    			<dd>
												<?php foreach($data_city as $k=>$v): ?>
												<?php if($v['level'] == 0): ?>
												<a href="javascript:;"  class="current" ><?php echo e($v['categoryname']); ?></a>
												<?php else: ?> 
												<a href="javascript:;" ><?php echo e($v['categoryname']); ?></a>
							     				<?php endif; ?>
												<?php endforeach; ?>
							     			</dd>
							    	  	</dl>
							    	  							</li>
	                        </ul>
	                    </dt>
	                    <dd>
	                        <dl>
	                            <dt>行业领域：</dt>
	                            <dd>
								<?php foreach($data_category as $k=>$v): ?>
	                                <a href="javascript:;"><?php echo e($v['c_name']); ?></a>
	                            <?php endforeach; ?>
		                        </dd>
	                        </dl>
	                    </dd>
	                </dl>
	               	                	<ul class="hc_list reset">
											<?php foreach($data_profile as $k=>$v): ?>
		                  		        	<li <?php if($k%3==0): ?> style="clear:both;" <?php endif; ?> >
						                        <a href="h/c/25829.html" target="_blank">
						                        	<h3 title="CCIC"><?php echo e($v['companyname']); ?></h3>
						                        	<div class="comLogo">
							                        	<img src="<?php echo e($v['logo']); ?>" width="190" height="190" alt="CCIC" />
							                        	<ul>
							                        		<li><?php echo e($v['trade_cn']); ?></li>
							                        		<li><?php echo e($v['nature_cn']); ?></li>
							                        	</ul>
						                        	</div>
						                        </a>
        			                        <ul class="reset ctags">
    				                        	<li><?php echo e($v['trade_cn']); ?></li>
    				                        	<li><?php echo e($v['nature_cn']); ?></li>
					                        </ul>
			                    			</li>
											<?php endforeach; ?>
		                        		</ul>
		                		               	<?php echo $data_profile->links(); ?>

		               		                                </form>
            </div>	
            <div class="content_r">
            	<div class="subscribe_side">
	            	<a href="subscribe.html" target="_blank">
	                    <div class="subpos"><span>订阅</span> 职位</div>
	                    <div class="c7">拉勾网会根据你的筛选条件，定期将符合你要求的职位信息发给你
	                    </div>
	                    <div class="count">已有
	                    		                    		<em>3</em>
	                    		                    		<em>4</em>
	                    		                    		<em>2</em>
	                    		                    		<em>1</em>
	                    		                    		<em>0</em>
	                    		                    	人订阅
	                    </div>
	                    <i>我也要订阅职位</i>
	            	</a>
	            </div> 
                <div class="greybg qrcode mt20">
                	<img src="style/images/companylist_qr.png" width="242" height="242" alt="拉勾微信公众号二维码" />
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
               	<!-- <a href="h/speed/speed3.html" target="_blank" class="adSpeed"></a> -->
                <a href="h/subject/jobguide.html" target="_blank" class="eventAd">
               		<img src="style/images/subject280.jpg" width="280" height="135" />
               	</a>
               	<a href="h/subject/risingPrice.html" target="_blank" class="eventAd">
               		<img src="style/images/rising280.png" width="280" height="135" />
               	</a>
            </div>
       	</div>
   	
   	<input type="hidden" value="" name="userid" id="userid" />
      
<script type="text/javascript" src="style/js/company_list.min.js"></script>     	
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