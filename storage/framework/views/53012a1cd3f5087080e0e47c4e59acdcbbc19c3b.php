<?php echo $__env->make("components.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="container">
    <?php echo $__env->make('components.person', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- end .sidebar -->
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em></em>
                我的简历</h1>
            </dt>
            <dd>
                <form id="searchForm">
                    <input type="hidden" value="Publish" name="type">
                    <ul class="reset my_jobs">
                        <?php foreach($data as $key=>$val): ?>
                            <li data-id="149594">
                                <h3>
                                    <a target="_blank" title="简历名称" href="">简历名称：<?php echo e($val['title']); ?></a>
                                </h3>
                                <span class="receivedResumeNo"><a href="<?php echo e(URL::to('preview_resume').'?'.http_build_query(['id'=>$val['id']])); ?>">预览</a>&nbsp;|&nbsp;<a href="<?php echo e(URL::to('update_resume').'?'.http_build_query(['id'=>$val['id']])); ?>">修改</a>&nbsp;|&nbsp;<a href="<?php echo e(URL::to('del_resume').'?'.http_build_query(['id'=>$val['id']])); ?>">删除</a></span>
                                <div>真实姓名：<?php echo e($val['fullname']); ?>  &nbsp;&nbsp;&nbsp;&nbsp;性别：<?php echo e($val['sex_cn']); ?> &nbsp;&nbsp;&nbsp;&nbsp;  现在居住地：<?php echo e($val['residence']); ?></div>
                                <div>工作经验：<?php echo e($val['experience_cn']); ?>  &nbsp;&nbsp;&nbsp;&nbsp;期望薪资：<?php echo e($val['wage_cn']); ?> &nbsp;&nbsp;&nbsp;&nbsp;  学历：<?php echo e($val['education_cn']); ?></div>
                                <?php endforeach; ?>
                            </li>
                    </ul>
                </form>
            </dd>
        </dl>

    </div><!-- end .content -->
</div><!-- end #container -->
</div><!-- end #body -->
<div id="footer">
    <div class="wrapper">
        <a rel="nofollow" target="_blank" href="about.html">联系我们</a>
        <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
        <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
        <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
        <div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
    </div>
</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>