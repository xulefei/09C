<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <link href="/frontend/css/user.css" type="text/css"  rel="stylesheet" />
    <link href="/frontend/css/thickbox.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .J_view{ display:none;}
        .hide{ display:none}
        .info{font-weight:normal}
        .tscg{ color:#a9a9a9;display:none}
    </style>
</head>

<body>
    <!--导航栏开始-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--导航栏结束-->
<div class="zhutineirong">
    <!--左边栏开始-->
    @include('home.Public.left_nav')
    <!--左边栏结束-->  

    <!--右边栏开始-->
    <div class="right">
        <div class="right_top2">
            <div class="tittle_kj">
                <div class="tittle_lkj">个人基础信息<span style=" color:#f00; font-size:14px; margin-left:55px;">（请完善个人信息标*为必填项，完善后才能申请借款）</span></div>
                <div class="tittle_rkj"><a href="javascript:void(0)" class="show jrb_but03">修改信息</a><a href="javascript:void(0)" class="hide jrb_but03">取消修改</a></div>
                <div class="clear"></div>
            </div>
            <div class="gerenxinxi_kj">
                <div class="gerenxinxi_lkj">
                    <img src="" width="96px" height="96px"  title="头像"/> 
                    <img src="/frontend/images/myjrb_touxiang.jpg" width="96px" height="96px" title="头像"/>
                    <!--头像修改-->
                    <p class="J_view tscg" style="width:96px; height:30px; line-height:30px; background-color:#3d89b4; " align="center"><a href="" class="thickbox" type="button" style="color:#fff">更改头像</a></p>

                </div>
                <form method="post"  action="" id="myForm">
                    <div class="gerenxinxi_rkj">
                        <ul>
                            <li><span>用&nbsp;&nbsp;户&nbsp;&nbsp;名</span><span style=" text-align:left"></span></li>
                            <li><span>真实姓名</span><span style="width:250px; text-align:left"></span><div class="renzheng_kj"></li>
                            <li><span>身份证号</span><span style="width:250px; text-align:left"></span><div class="renzheng_kj">
                                   
                                    <img src="/frontend/images/yz_right_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:5px;" title="已认证"/>
                                    已认证
                                    
                                    <a href=""><img src="/frontend/images/yz_info_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:9px;"  title="去认证"/>去认证</a>

                                    

                                </div></li>
                            <li><span>手机号码</span><span></span><div class="renzheng_kj">
                                    <img src="/frontend/images/yz_right_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:5px;" title="已绑定"/>
                                    已绑定
                                    <a href=""><img src="/frontend/images/yz_info_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:9px;" title="去绑定"/>去绑定</a>
                                </div></li>
                            <li><span>邮箱地址</span><span></span>
                                <div class="renzheng_kj">
                                    <img src="/frontend/images/yz_right_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:5px;" title="已绑定"/>
                                    已绑定
                                    <a href=""><img src="/frontend/images/yz_info_bg.gif" class="png_fix" style="vertical-align:middle; margin-right:9px;" title="去绑定"/>去绑定</a>
                                </div></li>
                            <li><span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
                                <b class="info">
                                    男
                                </b>

                                <select name="sex"  class="biaodan_01 J_view">
                                    <option  value="1">男</option>
                                    <option  value="2">女</option>
                                </select>
                            </li>
                            <li><span>出生日期</span><b class="info"></b><input type="text"  value="" name="birthday" class="biaodan_02 Wdate J_view"/></li>
                            <li><span><b style="color:#F00;">*</b>最高学历</span><b class="info"></b>
                                <select name="schooling" id="graduation" class="biaodan_02 J_view">
                                    <option value="" >请选择</option>
                                    <option value="高中或以下">高中或以下</option>
                                    <option value="大专">大专</option>
                                    <option value="本科">本科</option>
                                    <option value="研究生或以上" >研究生或以上</option>
                                </select>
                            </li>
                            <li><span><b style="color:#F00;">*</b>毕业院校</span><b class="info"></b><input  name="school"  value="" class="biaodan_03 J_view"/></li>
                            <li><span>婚姻状况</span><b class="info"></b>
                            <b class="J_view">
                            <input  name="Maritalstatus"  value="已婚" type="radio" class="biaodan_05"  style="border:0"/>已婚
                            <input  name="Maritalstatus"  type="radio" class="biaodan_05"  value="未婚"  style="border:0"/>未婚
                            <input  name="Maritalstatus"  type="radio"  value="离异" class="biaodan_05"  style="border:0"/>离异
                            <input  name="Maritalstatus"  type="radio" value="丧偶" class="biaodan_05" style="border:0"/>丧偶</b></li>
                            <li class="J_view">
                                <span><b style="color:#F00;">*</b>居住省市</span>
                                <select class="biaodan_02 J_view" id="province" name="province">
                                    <option value="">请选择</option>
                                    <option value=""></option>
                                </select>省
                                <select class="biaodan_02 J_view" name="city" id="city">
                                    <option value="">请选择</option>
                                    <option  value=""></option>
                                </select>市/区
                            </li>
                            <li>
                                <span><b style="color:#F00;">*</b>详细地址</span>
                                <b class="info"></b>
                                <input value="" name="LiveAddress"  class="biaodan_04 J_view"/>
                            </li>
                            <li><span>公司行业</span><b class="info"></b>
                                <select name="Companyindustry" id="officeDomain" class="biaodan_02 J_view">
                                    <option value="" selected>请选择</option>
                                </select>
                            </li>
                            <li><span>公司规模</span><b class="info"></b>
                                <select name="Companyscale" id="officeScale" class="biaodan_02 J_view">
                                    <option value="">请选择</option>
                                    



                                </select>
                            </li>
            <li>
                <span>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</span><b class="info"></b>
                <select name="Office" id="salary" class="biaodan_02 J_view">
                    <option value="">请选择</option>
                </select>
                <!--<input  name="Office"  value="{$json.Office}" class="biaodan_03 J_view"/>-->
            </li>
            <li><span><b style="color:#F00;">*</b>月&nbsp;&nbsp;收&nbsp;&nbsp;入</span><b class="info"></b>
                <select name="Monthlyincome" id="salary" class="biaodan_02 J_view">
                    <option value="">请选择</option>
                </select>
            </li> 
            <li class="J_view" style=" margin-top:30px;"><span>&nbsp;</span><input type="button" value="提&nbsp;&nbsp;交"  class="jrb_but02"/><span class="tscg" style="margin-left:10px;">成功保存!</span></li>  
        </ul>
    </div>
</form>
<div class="clear"></div>
</div>
</div>
</div>
<!--右边栏结束-->
<div class="clear"></div>
</div>
@include('home.Public.footer')
<script src="/frontend/js/thickbox-compressed.js" type="text/javascript"></script>
<script language="javascript
" type="text/javascript" src="/frontend/js/My97DatePicker/WdatePicker.js"></script>
</body>
</html>
