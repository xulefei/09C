<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/eebao.css" rel="stylesheet" type="text/css" />
        <script src="backend/bui/js/jquery-1.8.1.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>

        <div class="eeb_box_bg">
            <div class="eeb_jisuanqi">
                <div class="jsq_top">
                    <div class="jsq_topl"><img src="/frontend/images/jusuanqi_icon.png" class="png_fix" style="vertical-align:middle;"  title="模拟收益"/>&nbsp;E额宝模拟收益</div>
                    <div class="jsq_topr"><img src="/frontend/images/fanhui_icon.png" class="png_fix"  style=" vertical-align:middle;" title="返回"/><a href="{:U('Fund/asset')}" style="color:#FFF">&nbsp;返回</a></div>
                    <div class="clear"></div>
                </div>
                <div class="jsq_bottom">
                    <div class="jsq_bl">
                        <ul>
                            <li><span>E额宝确认金额：&nbsp;</span><input type="text" name="fund" id="fund"/>&nbsp;元</li>
                            <li><span>年利率（%）：&nbsp;</span><input type="hidden" value="" name="liv" id="liv"><b>&nbsp;{$liv*100}%</b></li>
                            <li><span>当日可获收益：&nbsp;</span><b id="fundtoday">0.00</b>&nbsp;&nbsp;元</li>
                            <li><span>一周可获收益：&nbsp;</span><b id="fundweek" >0.00</b>&nbsp;&nbsp;元</li>
                            <li><span>一个月可获收益：&nbsp;</span><b  id="fundmonth" >0.00</b>&nbsp;&nbsp;元</li>
                        </ul>
                    </div>
                    <div class="jsq_br"><img src="/frontend/images/Calculator.gif" style="margin-left:50px;" title="计算器"/></div>
                    <div class="clear"></div>
                </div>
            </div>  
        </div>
        <div class="jsq_footer"></div>
        <script type="text/javascript">
        $(function() {
            $("#fund").keyup(function() {
                $val = $("#fund").val() * $("#liv").val() / 365;
                $val1 = $("#fund").val() * $("#liv").val() * 7 / 365;
                $val2 = $("#fund").val() * $("#liv").val() * 30 / 365;
                $("#fundtoday").html($val.toFixed(2));
                $("#fundweek").html($val1.toFixed(2));
                $("#fundmonth").html($val2.toFixed(2));
            })
        })

        </script>
    </body>
</html>
@include('home.Public.footer')