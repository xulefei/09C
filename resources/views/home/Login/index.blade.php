<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <title>用户登录</title>
        <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/index.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>
        @include('home.Public.main_nav')
        <!--导航栏开始-->  
        <!--导航栏结束-->
        <div class="denglu_bg">
            <!--左边栏开始-->
            <div class="zhutineirong_dl">
                <!--左边栏结束-->
                <div class="login png_fix">
                    <h1>登陆金融宝<span style="color:red;margin-left:25px; font-size:14px;"></span></h1>
                    <form action="{{url('index/login')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <ul>
                            <li><img src="/frontend/images/login_name_bg.gif" alt=""  title="用户名"/>
                                <input type="text" class="denglu_srk" placeholder="用户名/邮箱/手机号" value=""  name="name"  style=" float:left"/>
                            </li>
                            <li><img src="/frontend/images/login_password_bg.gif" alt=""  title="密码"/>
                                <input type="password" class="denglu_srk" placeholder="密码" onpaste="return false" name="pass" id="pass_id"  style=" float:left"/>
                            </li>
                            
                            <li><input placeholder="输入验证码" class="yanzhengma" name="verify"/><img class="verify-code" src="" style=" margin-left:10px; vertical-align:middle;" title="验证码"/><b id="verify1"></b></li>
                        </ul>
                        <p><a href="">忘记密码？</a><a href="">免费注册</a></p>
                        <div class="denglu_but_con"><input class="denglu_but" type="submit" value="&nbsp;"/></div>
                    </form>
                    <!--<div class="denglu_but_con1" style=" float:left; width:80px; height:25px; line-height:25px;  color:#FFF; margin-top:15px; margin-left:30px; padding-bottom:5px; padding-top:5px; background:#999; display:inline;">
                        <a href="javascript:toQzoneLogin()"><img src="__PUBLIC__//frontend/images/Connect_logo_7.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;" title="QQ登陆"/></a></div>
                    <div class="denglu_but_con2" style=" float:left; width:130px; height:25px; line-height:25px; vertical-align:middle; color:#FFF; margin-top:15px; padding-bottom:5px;padding-top:5px;background:#999;">
                        <a href="{:U('AlipayLogin/AlipayLogin')}"><img src="__PUBLIC__//frontend/images/ico/1BIvZpQVQT.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;" title="支付宝登陆"/></a></div>-->
                    <!---qq登录-->
                    <!---qq登录end-->
                </div>
                <div class="clear"></div>
                <!--左边栏结束-->             
            </div>
        </div>
        @include('home.Public.footer')
    </body>
</html>