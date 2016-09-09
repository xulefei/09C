<!DOCTYPE html>
<html>
    <head>
    @include('home.Public.header')
    <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/thickbox.css" rel="stylesheet" type="text/css" />
</head>

<body>
@include('home.Public.main_nav') 
<div class="yinying_jrb2"></div>
<!--导航栏开始--> 
<!--导航栏结束-->
<div class="zhutineirong"> 
    <!--左边栏开始--> 
    @include('home.Public.left_nav') 

    <!--左边栏结束--> 
    <!--右边栏开始-->
    <div class="right">
        <div class="right_top2">
            <div class="tittle_kj">
                <div class="tittle_lkj">认证信息<a href="#dengjitubiao" target="_blank" style=" color:#3d89b4; font-size:14px;">（点击查看具体认证说明）</a></div>
                <div class="tittle_r2kj">
                    <ul>
                        <li style="margin-bottom:5px;">信用总分（等级）：<span></span>&nbsp;分&nbsp;
                            
                            <img src="/frontend/images/xinyong_level_.png"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle" width="24" height="24"/>
                          
                            <img src="/frontend/images/xinyong_level_F.png"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle" width="24" height="24"/>
                            
                        </li>
                        
                        <li>信用额度：<span></span>&nbsp;元&nbsp;<img src="/frontend/images/wenhao_info.gif"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle"/></li>
                      
                        <li>信用额度：<span>0.00</span>&nbsp;元&nbsp;<img src="/frontend/images/wenhao_info.gif"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle"/></li>
                    
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

            <div class="gerenxinxi_kj">
                <div class="renzheng_01kj">
                    <ul>
                        <li class="one_01">&nbsp;</li>
                        <li class="two_01">项目</li>
                        <li class="third_01">状态</li>
                        <li class="four2_01">信用分数</li>
                    </ul>
                </div>
                <div class="renzheng_02kj">
                    <div class="renzheng_02lkj">基础认证&nbsp;<img src="/frontend/images/wenhao_info.gif" title="手机认证、邮箱认证用于找回密码提高安全系数" style="vertical-align:middle"/></div>
                    <div class="renzheng_02rkj">
                        <ul>

                            <li class="two_01">手机认证</li>

                            <li class="third_01">
                                <a href="">去认证 </a> 

                               <img src="/frontend/images/yz_right_bg.gif" class="png_fix"  title="已认证"/>

                                
                            </li>
                            <li class="four_01"></li>
                        </ul> 
                        <ul style="border:none"> 
                            <li class="two_01">邮箱认证</li>
                            <li class="third_01">

                                <a href="">去认证 </a> 

                                  <img src="/frontend/images/yz_right_bg.gif" class="png_fix"  title="已认证"/>

                               

                            </li>
                            <li class="four_01"> </li>

                        </ul>
                    </div>
                </div>

                <div class="renzheng_02kj">
                    <div class="renzheng_02lkj">必要信用认证&nbsp;<img src="/frontend/images/wenhao_info.gif" title="通过必要信用认证才能进行投资或借款" style="vertical-align:middle"/></div>

                    <div class="renzheng_02rkj">

                        <ul>
                            <li class="two_01">身份认证</li>
                            <li class="third_01">
                            
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                审核中...
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                               
                            </li>
                            <li class="four_01">
                               分
                               0分
                                
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">工作认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                审核中...
                               
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                                分
                                0分
                                
                            </li>
                        </ul>

                        <ul style="border:none">
                            <li class="two_01">银行信用报告</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                审核中...
                               
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                              
                            </li>
                            <li class="four_01">
                                
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="renzheng_02kj">
                    <div class="renzheng_02lkj">可选信用认证&nbsp;<img src="/frontend/images/wenhao_info.gif" title="每申请通过一项可选信用认证，信用总分加10分，可用于借款的信用额度相应增加" style="vertical-align:middle"/></div>
                    <div class="renzheng_02rkj">   
                        <ul>
                            <li class="two_01">收入认证</li>
                            <li class="third_01">
                               
                                <a href="{:U('Authhome/shouru')}?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                                
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">房产认证</li>
                            <li class="third_01">
                            
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                               
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                               
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">技术职称认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                               <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                            
                            </li>
                            <li class="four_01">
                               
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">购车认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                审核中...
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                            
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">结婚认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                审核中...
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                             
                            </li>
                        </ul>

                        <ul>
                            <li class="two_01">居住地认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                                <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                               
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                               
                            </li>
                            <li class="four_01">
                                
                            </li>
                        </ul>

                        <ul style="border:none">
                            <li class="two_01">视频认证</li>
                            <li class="third_01">
                              
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                               <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                            <li class="four_01">
                                
                            </li>
                        </ul>
                    </div>   
                </div>

                <div class="renzheng_02kj">
                    <div class="renzheng_02lkj">抵押认证&nbsp;<img src="/frontend/images/wenhao_info.gif" title="抵押认证可用作抵押贷款" style="vertical-align:middle"/></div>
                    <div class="renzheng_02rkj">
                        <ul  style="border:none">
                            <li class="two_01">其他认证</li>
                            <li class="third_01">
                                
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button">再次认证</a> &nbsp;&nbsp;<span>验证未通过</span>
                               <img src="/frontend/images/yz_right_bg.gif" class="png_fix" title="已认证"/>
                               
                                <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=600&width=620&modal=false" class="thickbox" type="button" >去认证</a>  
                                
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="renzheng_02kj">
                    <div class="renzheng_02lkj">金融宝记录&nbsp;<img src="/frontend/images/wenhao_info.gif" title="记录您在金融宝的每一笔交易" style="vertical-align:middle"/></div>
                    <div class="renzheng_02rkj">
                        <ul>
                            <li class="two_01">还清笔数<span>（+1分/笔，上限20分）</span></li>
                            <li class="third_01">笔</li>
                            <li class="four_01">分</li>
                        </ul>
                        <ul>
                            <li class="two_01">逾期次数<span>（-1分/次）</span></li>
                            <li class="third_01">次</li>
                            <li class="four_01">分</li>
                        </ul>
                        <ul>
                            <li class="two_01">严重逾期次数<span>（-30分/次）</span></li>
                            <li class="third_01">次</li>
                            <li class="four_01">分</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>
    <!--右边栏结束-->
    <div class="clear"></div>
</div>
@include('home.Public.footer')
<script src="/frontend/js/thickbox-compressed.js" type="text/javascript"></script>
</body>
</html>