<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>金融宝</title>
        <!--头部开始-->
        @include('home.Public.header')
        <!--头部结束-->
        <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <script src="/frontend/js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <div class="zhaohuimima_007">
            <div class="youxiang_007"  id="emails"><a href="#" id="youxiangshow">使用绑定邮箱找回密码</a></div>
            <div class="huise2_007" id="shouji"><a href="" style="display: block" id="shoujishow">使用绑定手机找回密码</a></div>
            <form action="" method="post" id="email">
                <div class="biaodan_007">
                    <ul>
                        <li><span><b>*</b>邮箱地址</span><input class="biaodan_03" name="email" maxlength="20" /><font class="ts"></font></li>
                        <li><span><b>*</b>验证码</span><input class="yanzhengma_01"name="verify" maxlength="6" />
                            <img src="{:U('Global/verify')}" class="verify-code" onClick="click_change(this)" style=" vertical-align:middle" title="验证码"/><font class="ts1"></font><span style=" float:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>  
                        <li><span>&nbsp;</span><input name="提交" type="button" class="jrb_but02" value="提&nbsp;&nbsp;交" /></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </form>
            <div class="kefu_007">若您无法使用上述方法找回,请联系客服0773-2668269</div>
            <div class="clear"></div>
        </div>


        <!--尾部开始-->
        @include('home.Public.footer')
        <!--尾部结束-->
        <script>
            $(function() {
                $("input[name='email']").focus(function() {
                    $(".ts").html("");
                });
                $("input[name='verify']").focus(function() {
                    $(".ts1").html("");
                });
                $(".jrb_but02").click(function() {
                    var reg = /^[\w.\-]+@(?:[a-z0-9]+(?:-[a-z0-9]+)*\.)+[a-z]{2,6}$/;
                    if (!reg.test($("input[name='email']").val())) {
                        $(".ts").html("<font color=\"#a9a9a9\">邮件格式不正确！</font>");
                        return;
                    }
                    if ($("input[name='verify']").val() === "") {
                        $(".ts1").html("<font color=\"#a9a9a9\">请输入验证码!</font>");
                        return;
                    }
                    $("#email").submit();
                });
            });
            //实现点击切换验证码
            function click_change(obj) {
                obj.src = "{:U('Global/verify')}";
            }
        </script>
    </body>
</html>
