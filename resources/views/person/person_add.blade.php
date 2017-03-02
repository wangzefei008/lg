@include("components.head")
    <div id="container">
        @include('components.person')<!-- end .sidebar -->
        <div class="content">
            <dl class="company_center_content">
                <dt>
                <h1>
                    <em></em>
                    添加个人资料
                </h1>
                </dt>
                <dd>
                    <form action="person_adddo" method="post" >
                        <input type="hidden" name="uid" value="{{$uid}}">
                        <table class="btm">
                            <tbody>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>真实姓名：</td>
                                <td>
                                    <input type="text" placeholder="请输入名称" value="" name="realname" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>姓别</td>
                                <td>
                                    <ul class="profile_radio clearfix reset">
                                        <li>
                                            男<em></em>
                                            <input type="radio" name="sex_cn" value="男">
                                        </li>
                                        <li>
                                            女<em></em>
                                            <input type="radio" name="sex_cn" value="女">
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="85">出生年月</td>
                                <td>
                                    <input type="hidden" id="experience" value="" name="birthday">
                                    <input type="button" value="请选择出生年月" id="select_experience" class="selectr selectr_380">
                                    <div class="boxUpDown boxUpDown_380 dn" id="box_experience" style="display: none;">
                                        <ul>
                                            @for($i=1960;$i<=2008;$i++)
                                            <li>
                                               {{$i}}
                                            </li>
                                            @endfor
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>现在居住地</td>
                                <td>
                                    <input type="text" placeholder="请输入地址" value="" name="residence" id="positionName">
                                </td>
                            </tr>
                            </tbody></table>

                        <table class="btm">
                            <tbody>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>学历</td>
                                <!--<h3><span>(最高月薪不能大于最低月薪的2倍)</span></h3> -->
                                <td>
                                    <input type="hidden" id="education" value="" name="education_cn">
                                    <input type="button" value="请选择学历" id="select_education" class="selectr selectr_380">
                                    <div class="boxUpDown boxUpDown_380 dn" id="box_education" style="display: none;">
                                        <ul>
                                            <li>
                                                不限
                                            </li>
                                            <li>
                                                初中
                                            </li>
                                            <li>
                                                高中
                                            </li>
                                            <li>
                                                大专
                                            </li>
                                            <li>
                                                本科
                                            </li>
                                            <li>
                                                硕士
                                            </li>
                                            <li>
                                                博士
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>所学专业</td>
                                <td>
                                    <input type="text" placeholder="请输入专业" value="" name="major_cn" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>工作经验</td>
                                <td>
                                    <select name="experience_cn">
                                        <option>请选择经验</option>
                                        <option value="应届生">应届生</option>
                                        <option value="1年以下">1年以下</option>
                                        <option value="1到3年">1到3年</option>
                                        <option value="3到5年">3到5年</option>
                                        <option value="5到10年">5到10年</option>
                                        <option value="10年以上">10年以上</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>手机</td>
                                <td>
                                    <input type="text" placeholder="请输入手机号" value="" name="phone" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>邮箱</td>
                                <td>
                                    <input type="text"  value="" name="email" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>身高</td>
                                <td>
                                    <input type="text"  value="" name="height" id="positionName" placeholder="单位厘米">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>籍贯</td>
                                <td>
                                    <input type="text"  value="" name="householdaddress" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>婚姻情况</td>
                                <td>
                                    <ul class="profile_radio clearfix reset">
                                        <li>
                                            未婚<em></em>
                                            <input type="radio" name="marriage_cn" value="未婚">
                                        </li>
                                        <li>
                                            已婚<em></em>
                                            <input type="radio" name="marriage_cn" value="已婚">
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody></table>
                        <table>
                            <tbody>
                            <tr>
                                <td width="25"></td>
                                <td colspan="2">
                                    <input type="submit" value="保存" class="btn_32">
                                </td>
                            </tr>
                            </tbody></table>
                    </form>
                </dd>
            </dl>
        </div><!-- end .content -->


        <!------------------------------------- end ----------------------------------------->

        <script src="style/js/jquery.tinymce.js" type="text/javascript"></script>
        <script>
            $(function(){

                /***********************************************
                 ** textarea 编辑器
                 */
                $('textarea.tinymce').tinymce({
                    // Location of TinyMCE script
                    script_url : ctx+'/js/tinymce/jscripts/tiny_mce/tiny_mce.js',

                    // General options
                    theme : "advanced",
                    language : "zh-cn",
                    plugins : "paste,autolink,lists,style,layer,save,advhr,advimage,advlink,iespell,inlinepopups,preview,media,searchreplace,contextmenu,fullscreen,noneditable,visualchars,nonbreaking",

                    // Theme options
                    theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,|,hr,fullscreen,image",
                    theme_advanced_toolbar_location : "top",
                    theme_advanced_toolbar_align : "left",
                    theme_advanced_statusbar_location : "none",//定义输入框下方是否显示状态栏，默认不显示
                    theme_advanced_resizing : false,
                    paste_auto_cleanup_on_paste: true,
                    paste_as_text: true,
                    auto_cleanup_word:true,
                    paste_remove_styles: true,
                    contextmenu: "copy cut paste",
                    force_br_newlines: true,
                    force_p_newlines: false,
                    apply_source_formatting: false,
                    remove_linebreaks: false,
                    convert_newlines_to_brs: true,

                    // Example content CSS (should be your site CSS)
                    content_css : ctx+"/js/tinymce/examples/css/content.css",

                    // Drop lists for link/image/media/template dialogs
                    template_external_list_url : "lists/template_list.js",
                    external_link_list_url : "lists/link_list.js",

                    // Replace values for the template plugin
                    template_replace_values : {
                        username : "Some User",
                        staffid : "991234"
                    },
                    onchange_callback: function(editor){
                        tinyMCE.triggerSave();
                        var editorContent = tinyMCE.get(editor.id).getContent();
                        if(editorContent.length &gt; 20){
                            $("#" + editor.id).valid();
                        }
                    }
                });

                $('#workAddress').focus(function(){
                    $('#beError').hide();
                });
            });
        </script>
        <!-- end old -->

        <script src="style/js/jobs.min.js" type="text/javascript"></script>
        <script src="http://api.map.baidu.com/api?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602" type="text/javascript"></script><script src="http://api.map.baidu.com/getscript?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602&amp;services=&amp;t=20140617153133" type="text/javascript"></script>
        <script type="text/javascript">
            //百度地图API功能
            var map = new BMap.Map("allmap");
            //控件添加
            map.addControl(new BMap.NavigationControl());
            map.addControl(new BMap.MapTypeControl());
            map.addControl(new BMap.ScaleControl());
            map.addControl(new BMap.OverviewMapControl());

            var point = new BMap.Point(116.331398,39.897445);//初始化坐标点
            map.centerAndZoom(point, 15);
            /* map.centerAndZoom(, 15); */
            map.enableScrollWheelZoom(true);//允许缩放
            var gc = new BMap.Geocoder();//地址定位
            var local = new BMap.LocalSearch(map, {
                renderOptions:{map: map}
            });
            function showInfo(e){
                map.clearOverlays();//清除所有覆盖物
                //map.centerAndZoom(new BMap.Point(olng, olat), 11);//重定义中心点
                //alert(e.point.lng + ", " + e.point.lat);
                var marker = new BMap.Marker(new BMap.Point(e.point.lng, e.point.lat));  // 创建标注
                marker.addEventListener("mouseup",function(em){//覆盖物监听事件--释放鼠标时定位覆盖物位置
                    var pt = em.point;//移动后重新定位
                    gc.getLocation(pt, function(rs){
                        var addComp = rs.addressComponents;
                        var label = new BMap.Label("我的坐标："+em.point.lng + ", " + em.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
                        // marker.setLabel(label);//新坐标-新地址
                        if(rs){
                            var sContent =
                                    "&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" +
                                    "&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" +
                                    "&lt;/div&gt;";
                            var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                            //图片加载完毕重绘infowindow
                            marker.openInfoWindow(infoWindow);
                        }

                        $('#lat').val(em.point.lat);
                        $('#lng').val(em.point.lng);
                    });
                });
                marker.enableDragging();    //可拖拽
                map.addOverlay(marker);     // 将标注添加到地图中

                /////////////////////地址定位
                var pt = e.point;
                gc.getLocation(pt, function(rs){
                    var addComp = rs.addressComponents;
                    var label = new BMap.Label("我的坐标："+e.point.lng + ", " + e.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
                    //marker.setLabel(label);
                    if(rs){
                        var sContent =
                                "&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" +
                                "&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" +
                                "&lt;/div&gt;";
                        var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                        //图片加载完毕重绘infowindow
                        marker.openInfoWindow(infoWindow);
                    }

                    $('#lat').val(e.point.lat);
                    $('#lng').val(e.point.lng);
                });

                //////////////////////重置中心点
                olng = e.point.lng;
                olat = e.point.lat;
            }
            map.addEventListener("click", showInfo);//地图点击事件

            $(function(){
                $('#mapPreview').bind('click',function(){
                    $.colorbox({inline:true, href:"#baiduMap",title:"公司地址"});
                    var address = $('#positionAddress').val();
                    var city = $('#workAddress').val();
                    map.setCurrentCity(city);
                    map.setZoom(15);
                    gc.getPoint(address, function(point){
                        if (point) {
                            map.centerAndZoom(point, 15);
                            map.setZoom(15);
                            map.setCenter(point);
                            local.search(address);
                        }
                    }, city);
                    /* map.addEventListener("tilesloaded",function(){
                     map.setZoom(15);
                     }); */
                });
            });
        </script>

        <div class="clear"></div>
        <input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
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