<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <!--引入样式文件-->
    <link href="frontend/css/index.css" type="text/css" rel="stylesheet" />
    <link href="frontend/css/user.css" type="text/css"  rel="stylesheet" />
    <link href="frontend/vendor/simplePagination/simplePagination.css" type="text/css"  rel="stylesheet" />
    <!--引入样式文件结束-->
    <style>
        .cur{
            background:#666;
        }
        .cur a{
            color:#FFF;
        }
    </style>
</head>
<body>
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--贷款中心开始-->
<div class="zhutineirong">
    <!--筛选开始-->
    <div class="woyaojiekuan_t">
        <div class="woyaojiekuan_tl">
            <div class="shaixuan">
                <ul>
                    <li style=" font-size:18px; background:none">筛选投资项目</li>
                    <li style="background:#666; color:#FFF">多选</li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="shaixuan">
                <dl>
                    <dt class="li_1">标的类型：</dt>
                    <dd><ul class="obj-type">                
                            <li J_data="0" class="cur"><a href="javascript:void(0);"  >不限</a></li>
                            <li J_data="2"><a  href="javascript:void(0);"  >有抵押标</a></li>
                            <li J_data="1"><a  href="javascript:void(0);"  >无抵押标</a></li>                   
                        </ul></dd>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="shaixuan">
                <dl>
                    <dt class="li_1">借款期限：</dt>
                    <dd><ul class="obj-date">
                            <li J_data="0" class="cur"><a href="javascript:void(0);"  >不限</a></li>
                            <li J_data="1"><a href="javascript:void(0);"  >1-2个月</a></li>
                            <li J_data="2"><a href="javascript:void(0);"  >3-4个月</a></li>
                            <li J_data="3"><a href="javascript:void(0);"  >5-6个月</a></li>
                            <!--<li J_data="4"><a href="javascript:void(0);"  >9-12个月</a></li>-->
                            <!--<li J_data="4"><a href="javascript:void(0);"  >12个月以上</a></li>-->
                        </ul></dd>
                </dl>
            </div>
            <div class="shaixuan">
                <dl>
                    <dt class="li_1">认证等级：</dt>
                    <dd><ul class="obj-dengji">
                            <li J_data="0" class="cur"><a href="javascript:void(0);"  >不限</a></li>
                            <li J_data="1"><a href="javascript:void(0);"  >A</a></li>
                            <li J_data="2"><a href="javascript:void(0);"  >B</a></li>
                            <li J_data="3"><a href="javascript:void(0);"  >C</a></li>
                            <li J_data="4"><a href="javascript:void(0);"  >D</a></li>
                            <li J_data="5"><a href="javascript:void(0);"  >E</a></li>
                        </ul></dd>
                </dl>
            </div>
            <div class="shaixuan">
                <dl>
                    <dt class="li_1">还款方式：</dt>
                    <dd><ul class="obj-method">
                            <li J_data="0" class="cur"><a href="javascript:void(0);"  >不限</a></li>
                            <li J_data="1"><a href="javascript:void(0);"  >按月分期还款</a></li>
                        </ul></dd>
                </dl>
            </div>
            <div class="clear"></div>
        </div>
        <div class="woyaojiekuan_tr">

            <div class="zhanghu_jkt">
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

            <div class="zhanghu_jkb">
                账户余额:<span></span>&nbsp;元
                <ul>
                    <li>可用金额：<b></b>&nbsp;元</li>
                    <li style="margin-right:10px;">冻结金额：<b></b>&nbsp;元</li>
                </ul>
                <ul>
                    <li><a href="" class="jrb_but03">提&nbsp;&nbsp;现</a></li>
                    <li><a href="" class="jrb_but03">充&nbsp;&nbsp;值</a></li>
                </ul>
            </div>
            <!--点击我要借款，如果是未通过认证的普通用户，提示他进入注册页面，页面并自动跳转到认证页面。如果是已经通过认证的用户，则进入发布借款的页面 -->
        </div>
        <div class="woyaojiekuan_tr02">
            <ul>
                <li><img src="frontend/images/little_ad01.jpg"  title="金融宝桂林众投借贷平台" alt="金融宝桂林众投借贷平台"/></li>
                <li>&nbsp;&nbsp;请&nbsp;<a href="" style="color:#ED994B">登录</a>&nbsp;或&nbsp;<a href="" style="color:#ED994B">注册&nbsp;</a>后查看！</li>
            </ul>
        </div>
                <div class="fudong_jk"><a href="" class="jk_but01">我要借款</a></div>
        <div class="clear"></div> 
    </div>


    <!--筛选结束-->
    <!--投资列表开始-->
    <div class="touzi_liebiao">
        <h1 class="jrb_title">投资列表<a href="" style="font-size:14px; font-weight:normal;">（默认排序）</a><a href="" class="jsq_but03">理财计算器</a></h1>
        <table class="liebiao_tt2">
            <tr>
                <td class="in_line">累计成交总金额<p>万元</p></td>
                <td class="in_line">累计成交总笔数<p>笔</p></td>
                <td>为用户累计赚取<p>万元</p></td>
            </tr>
        </table>
        <table class="touzi_liebiao_con">
            <thead>
                <tr>
                    <th>借款标题</th>
                    <th class="symbol"><a href="">信用等级
                            
                              <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="信用等级降序"  title="降序"/>
                                <img src="frontend/images/tz_list_px_arrow_clicked_up.gif" alt="信用等级升序"  title="升序"/>
                             
                                <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序" title="默认排序" />
                           
                        </a></th>
                    <th><a href="">借款金额
                            
                                <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="借款金额降序"  title="降序"/>
                                <img src="frontend/images/tz_list_px_arrow_clicked_up.gif" alt="借款金额升序"  title="升序"/>
                                
                                <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序"  title="默认排序"/>
                        
                        </a></th>
                    <th><a href=''>还款期限
                            
                                <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="还款期限降序"  title="降序"/>
                                <img src="frontend/images/tz_list_px_arrow_clicked_up.gif" alt="还款期限升序"  title="升序"/>
                                <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序" title="默认排序" />
                            
                        </a></th>
                    <th><a href="">借款时间
                           
                                <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="借款时间降序"  title="降序"/>
                                <img src="frontend/images/tz_list_px_arrow_clicked_up.gif" alt="借款时间升序"  title="升序"/></if>
                                <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序"  title="默认排序"/>
                           
                        </a></th>
                    <th><a href="">投资热度
                            
                                <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="投资热度降序"  title="降序"/>
                                <img src="frontend/images/tz_list_px_arrow_clicked_up.gif" alt="投资热度升序"  title="升序"/>
                                <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序"  title="默认排序"/>
                        </a></th>
                    <th>状态</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="list">
                <tr><td colspan="6">暂无信息</td></tr>
            <voList name="data_list" id="vo"> 
                <tr>
                    <td class="tl_left">
                        <img src="frontend/images/shiwu_tubiao.png" title="有抵押信用标" alt="有抵押信用标"/>
                        <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix">
                        <img src="frontend/images/xinyong_tubiao.png" title="无抵押信用标" alt="无抵押信用标"/>
                        <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix">
                        <span><a href="" target="_blank" title=""></a></span>
                    </td>
                    <td><img src="frontend/images/xinyong_level_.png" class="png_fix" title="" alt="" /></td>
                    <td>元</td>
                    <td>个月</td>
                    <td></td>
                    <td class="jindu03"><div>%</div></td>
                    <td class="jindu02"><div>%</div></td>
                    
                    <td><div  style="background:url(frontend/images/jindu_bg.gif) no-repeat {$vo[tmp2]}px 0;" >%</div></td>
                    <td>
            
                        筹款中
                       
                        <b style=" font-weight:normal; color:#999">还款中</b>
                       
                    </td>
                    <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                </tr>
            </volist>
            </tbody>
        </table>
        <div class="shuoming_lb"  style="padding:20px 0 30px 0">
            <div class="jrbfanye_kj">
                <div id="light-pagination" class="pagination light-theme simple-pagination">
                    <ul class="pp"></ul>
                </div>
            </div>
        </div>
    </div>
    <!--投资列表结束--> 
    <div class="clear"></div>    
</div>
<!--贷款中心结束-->
@include('home.Public.footer')
<script language="javascript" type="text/javascript" src="frontend/vendor/simplePagination/jquery.simplePagination.js"></script>

</body>
</html>