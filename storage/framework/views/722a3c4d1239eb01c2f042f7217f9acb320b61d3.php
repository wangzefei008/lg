<?php echo $__env->make("components.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="container">
        <?php echo $__env->make('components.person', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- end .sidebar -->
        <div class="content">
            <dl class="company_center_content">
                <dt>
                <h1>
                    <em></em>
                    基本资料 <span><i style="color:#fff;font-style:normal" id="positionNumber"><?php echo e($email); ?></i></span>                        </h1>
                </dt>
                <dd>
                    <form id="searchForm">
                        <input type="hidden" value="Publish" name="type">
                        <ul class="reset my_jobs">
                            <li data-id="149594">
                                <h3>
                                    <a target="_blank" title="姓名" href=""><?php echo e($realname); ?></a>
                                    <span><?php echo e($sex_cn); ?></span><span><?php echo e($birthday); ?></span><span><?php echo e($height); ?>cm</span><span><?php echo e($householdaddress); ?></span>
                                </h3>
                                <span class="receivedResumeNo"><a href="<?php echo e(URL::to('person_update')); ?>">修改</a></span>
                                <div><?php echo e($residence); ?>/ <?php echo e($education_cn); ?> / <?php echo e($major_cn); ?> / <?php echo e($experience_cn); ?></div>
                                <div><?php echo e($phone); ?> /<?php echo e($email); ?>/ <?php echo e($marriage_cn); ?> </div>
                            </li>
                        </ul>
                    </form>
                </dd>
            </dl>
        </div><!-- end .content -->

        <!------------------------------------- end -----------------------------------------> <script src="style/js/jquery.ui.datetimepicker.min.js" type="text/javascript"></script>
        <script src="style/js/received_resumes.min.js" type="text/javascript"></script>
        <script>
        </script>
        <div class="clear"></div>
        <input type="hidden" value="8e0aac9393b44b1f925b6be8130285be" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop"></a>
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

<script type="text/javascript">
    $(function(){
        $('#noticeDot-1').hide();
        $('#noticeTip a.closeNT').click(function(){
            $(this).parent().hide();
        });
    });
    var index = Math.floor(Math.random() * 2);
    var ipArray = new Array('42.62.79.226','42.62.79.227');
    var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
    var CallCenter = {
        init:function(url){
            var _websocket = new WebSocket(url);
            _websocket.onopen = function(evt) {
                console.log("Connected to WebSocket server.");
            };
            _websocket.onclose = function(evt) {
                console.log("Disconnected");
            };
            _websocket.onmessage = function(evt) {
                //alert(evt.data);
                var notice = jQuery.parseJSON(evt.data);
                if(notice.status[0] == 0){
                    $('#noticeDot-0').hide();
                    $('#noticeTip').hide();
                    $('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                    $('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                }else{
                    $('#noticeDot-0').show();
                    $('#noticeTip strong').text(notice.status[0]);
                    $('#noticeTip').show();
                    $('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                    $('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                }
                $('#noticeDot-1').hide();
            };
            _websocket.onerror = function(evt) {
                console.log('Error occured: ' + evt);
            };
        }
    };
    CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" id="ui-datepicker-div"></div></body></html>