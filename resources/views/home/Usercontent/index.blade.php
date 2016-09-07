
<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!--头部导航-->
@include('home.Public.main_nav')
<!--头部结束 -->
<div class="yinying_jrb2"></div>
<!--导航栏开始-->
<div class="zhutineirong">
    @include('home.Public.left_nav')
    <!--左边栏结束-->  
    <!--右边栏开始-->
    <div class="right">
        <div class="right_top">
            <div class="touxiang">

                <a href=""><img src="" width="96px" height="96px" title="头像"/></a> 

                <a href=""><img src="frontend/images/myjrb_touxiang.jpg" width="96px" height="96px" title="头像"/></a> 
                
            </div>
            <div class="yonghu">
                <div class="yonghu_top">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""><img src="frontend/images/shenfen_yz_bg.gif"  alt="实名认证" title="实名认证"  class="png_fix" width="25" height="25"/></a></li>       
                        <li><a href=""><img src="frontend/images/shenfen_yz_bg02.gif" alt="实名认证"  title="实名认证" class="png_fix"  width="25" height="25"/></a></li> 
                        <li><a href=""><img src="frontend/images/shouji_yz_bg.gif"  alt="手机绑定" title="手机绑定" class="png_fix"  width="25" height="25"/></a></li>				
                        <li><a href=""><img src="frontend/images/shouji_yz_bg02.gif"  alt="手机绑定"  title="手机绑定" class="png_fix"  width="25" height="25"/></a></li>			
                        <li><a href=""><img src="frontend/images/youxiang_yz_bg.gif"  alt="邮箱认证" title="邮箱认证"         class="png_fix"  width="25" height="25"/></a></li>             
                        <li><a href=""><img src="frontend/images/youxiang_yz_bg02.gif"  alt="邮箱认证"  title="邮箱认证"        class="png_fix"  width="25" height="25"/></a></li>                
                        <li><a href=""><img src="frontend/images/jymm_yz_bg.gif"  alt="提现密码设置"   title="提现密码设置" class="png_fix"  width="25" height="25"/></a></li>  
                        <li><a href=""><img src="frontend/images/jymm_yz_bg02.gif"  alt="提现密码设置"  title="提现密码设置"    class="png_fix"  width="25" height="25"/></a></li> 
                    </ul>       
                </div>
                <div class="yonghu_bottom">
                    <ul>
                        <li>
                            信用等级&nbsp;
                            <img src="frontend/images/xinyong_level_F.png" title="信用级别"   style="vertical-align:middle" width="24" height="24"/>
                            <img src="frontend/images/xinyong_level_F.png"   title="信用级别"  style="vertical-align:middle" width="24" height="24"/>
                        </li>
                        <li>
                            信用额度：元&nbsp;<img src="frontend/images/wenhao_info.gif"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle" width="18" height="18"/>
                            信用额度：0.00元&nbsp;<img src="frontend/images/wenhao_info.gif"  title="申请通过的认证越多，可用于借款的信用额度（可借款金额）越大" style="vertical-align:middle" width="18" height="18"/>
                        </li>
                        <li class="tishi_jrb">申请通过的认证越多，信用等级越高！<p>最高可提升信用额度元。</p></li>
                        <li class="tishi_jrb">信用等级过低，请&nbsp;<a href="" style="color:#3d89b4">完善认证信息。</a><p>最高可获得元的信用额度。</p></li>
                    </ul>
                </div>
            </div>
            <div class="zhanghu">
                账户余额:<span></span>&nbsp;元
                <ul style="font-size:14px;">
                  <li>可用金额：<p><b></b>&nbsp;元</p></li>
                  <li>冻结金额：<p><b></b>&nbsp;元</p></li>
                </ul>
                <ul>
                    <li><a href="" class="jrb_but03">充&nbsp;&nbsp;值</a></li>
                    <li><a href="" class="jrb_but03">提&nbsp;&nbsp;现</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="right_bottom">

            <div class="jiedaizhanghu_top">
                <b style="float:left; font-weight:normal; color:#666">借贷账户</b><span>待还款总金额：<b></b>&nbsp;元</span>
            </div>
            <div class="touzi_liebiao_little">
                <table class="touzi_liebiao_conlittle">
                    <thead>
                        <tr>
                            <th>借款标题</th>
                            <th>借款时间</th>
                            <th>借款金额</th>
                            <th>已还金额</th>
                            <th>还款期限</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        <tr>
                            <td class="tl_left">
                                <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标" alt="有抵押信用标"  class="png_fix"/>
                                <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                    <span><a href="" target="_blank" title=""></a></span>

                            </td>
                            <td></td>
                            <td> 元</td>
                            <td> 元</td>
                            <td> 个月</td>
                            <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                        </tr> 
                
                   
                      <!--查看更多-->
                        <tr>
                            <td colspan="6"><a href="#" target="_blank" class="list_gengduo_but"></a></td>
                        </tr>
                      <!--查看更多-->
                        <tr>
                          <td colspan="6"><div align="center">无借款记录</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--右边栏结束-->
            <div class="clear"></div>
        </div>
        <div class="right_bottom">
            <div class="jiedaizhanghu_top">
                <b style="float:left; font-weight:normal; color:#666">投资账户</b><span>已投资总金额：<b>{$tzze|num_format}</b>&nbsp;元</span>
            </div>
            <div class="touzi_liebiao_little">
                <table class="touzi_liebiao_conlittle">
                    <thead>
                        <tr>
                            <th>投资项目</th>
                            <th>投资时间</th>
                            <th>投资金额</th>
                            <th>年利率</th>
                            <th>收款期限</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tl_left">
                                <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标" alt="有抵押信用标"  class="png_fix"/>
                                <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix"/>
                                    <span><a href="" target="_blank" title=""></a></span>
                            </td>
                            <td></td>
                            <td> 元</td>
                            <td>%</td>
                            <td>个月</td>
                            <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                        </tr>
                      <!--查看更多-->
                        <tr>
                            <td colspan="6"><a href="" target="_blank" class="list_gengduo_but"></a></td>
                        </tr>
                      <!--查看更多-->
                        <tr>
                          <td colspan="6"><div align="center">无投资记录</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('home.Public.footer')
</body>
</html>
