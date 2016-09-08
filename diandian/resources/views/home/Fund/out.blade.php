<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="frontend/css/eebao.css" type="text/css"  rel="stylesheet" />
        <style>
            .box04_br .cur{
                color:red;
            }
        </style>
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <div class="eeb_box_bg">
            <div class="eeb_jisuanqi">
                <div class="jsq_top png_fix">
                    <div class="jsq_topl"><img src="frontend/images/zhuanzhang_icon.png" class="png_fix"  style=" vertical-align:middle;" title="转账"/>&nbsp;E额宝拥有更高收益，安全可靠，请放心操作</div>
                    <div class="jsq_topr"><img src="frontend/images/fanhui_icon.png"  class="png_fix" style=" vertical-align:middle;" title="返回"/><a href="" style="color:#FFF">&nbsp;返回</a></div>
                    <div class="clear"></div>
                </div>
                <div class="jsq_bottom">
                    <div class="zhuanzhang_l">
                        <form method="post" action="">
                            <ul>
                                <li><span>E额宝本金余额：&nbsp;</span><b></b>&nbsp;元</li>
                                <li><span>E额宝利息余额：&nbsp;</span><b></b>&nbsp;元</li>
                                <li><span>金融宝余额：&nbsp;</span><b></b>&nbsp;元</li>
                                
                                <li><span>&nbsp;</span><input name="pay" type="radio" value="1" checked="checked" style="border:0"/>&nbsp;转出本金&nbsp;&nbsp;<input type="radio" value="2" name="pay" style="border:0"/>&nbsp;转出利息</li>
                                <li><span>转出金额：&nbsp;</span><input type="text" name="fund" />&nbsp;元</li>
                                <li><span>交易密码：&nbsp;</span><input type="password" name="safePass" /></li>
                                <li><span>预计到账日期：&nbsp;</span><i style="color:#999; font-style:normal;">（最长不超过48小时）</i></li>
                                <li><span>&nbsp;</span>
                                    <input type="submit" value="" class="zhuanzhang_eebao2" />
                                </li>
                               
                                <span style="margin-left:150px;color:red">转出资金，需要先设置交易密码！ <a href="" style="color:blue">去设置 >></a></span>
                              
                            </ul>
                            <input type="hidden" name="stop_repeat_submit" value="" />
                        </form>
                    </div>
                    <div class="zhuanzhang_r">
                        <dl>
                            <dt>E额宝三大优势：</dt>
                            <dd><img src="frontend/images/ggshouyi_icon.png"  style=" vertical-align:middle;" title="E额宝拥有更多收益"/>&nbsp;E额宝拥有更多收益</dd>
                            <dd><img src="frontend/images/ggbaozhang_icon.png"  style=" vertical-align:middle;" title="E额宝安全更保障"/>&nbsp;E额宝安全更保障</dd>
                            <dd><img src="frontend/images/ggtiexin_icon.png"  style=" vertical-align:middle;" title="E额宝服务更贴心"/>&nbsp;E额宝服务更贴心</dd>
                        </dl>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>  
        </div>
        @include('home.Public.footer')
    </body>
</html>
