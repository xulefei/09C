<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>用户登录</title>
        <link href="http://localhost/diandian/public/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/diandian/public/frontend/css/index.css" type="text/css" rel="stylesheet"/>
        <script src="http://localhost/diandian/public/lib/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="http://localhost/diandian/public/css/ui-dialog.css">
        <script src="http://localhost/diandian/public/dist/dialog-min.js"></script>
        {{--<link rel="stylesheet" type="text/css" href="sweetalert.css"/>--}}
        {{--<style>--}}
            {{--.demo{width:300px; margin:60px auto 10px auto}--}}
            {{--@media only screen and (min-width: 420px) {--}}
                {{--.demo{width:500px; margin:60px auto 10px auto}--}}
            {{--}--}}
            {{--button, .button {--}}
                {{--background-color: #AEDEF4;color: white;border: none;box-shadow: none;--}}
                {{--font-size: 17px;font-weight: 500;font-weight: 600;--}}
                {{--border-radius: 3px;padding: 15px 35px;margin: 26px 5px 0 5px;cursor: pointer; }--}}
            {{--button:hover, .button:hover {background-color: #a1d9f2; }--}}
        {{--</style>--}}
        <style>

            body {
                margin: 50px 0;
                text-align: center;
            }
            .inp {
                border: 1px solid gray;
                padding: 0 10px;
                width: 200px;
                height: 30px;
                font-size: 18px;
            }
            .btn {
                border: 1px solid gray;
                width: 100px;
                height: 30px;
                font-size: 18px;
                cursor: pointer;
            }
            #embed-captcha {
                width: 300px;
                margin: 0 auto;
            }
            .show {
                display: block;
            }
            .hide {
                display: none;
            }
            #notice {
                color: red;
            }
            /* 以下遮罩层为demo.用户可自行设计实现 */
            #mask {
                display: none;
                position: fixed;
                text-align: center;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                overflow: auto;
            }
            /* 可自行设计实现captcha的位置大小 */
            .popup-mobile {
                position: relative;
            }
            #popup-captcha-mobile {
                position: fixed;
                display: none;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
                z-index: 9999;
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
        <!-- 引入封装了failback的接口--initGeetest -->
        <script src="http://static.geetest.com/static/tools/gt.js"></script>
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

                        <ul>
                            <div id="error_box"></div>
                            <li><img src="frontend/images/login_name_bg.gif" alt=""  title="用户名"/>
                                <input type="text" class="denglu_srk" placeholder="用户名/邮箱/手机号" value=""  name="name"  style=" float:left" id="username3"/>
                            </li>
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" id="hid">
                            <li><img src="frontend/images/login_password_bg.gif" alt=""  title="密码" id="password3"/>
                                <input type="password" class="denglu_srk" placeholder="密码" onpaste="return false" name="pass" id="pass_id"  style=" float:left"/>
                            </li>
                            
                            <li><div>
                                    <div id="mask"></div>
                                    <div id="popup-captcha-mobile"></div>
                                </div></li>
                        </ul>
                        <p><a href="{{url('index/forget')}}">忘记密码？</a><a href="{{url('index/')}}">免费注册</a></p>
                        <div class="denglu_but_con"><input class="denglu_but" onclick="fnLogin()" type="submit" value="&nbsp;"  id="popup-submit-mobile"  /></div>

                    <!--<div class="denglu_but_con1" style=" float:left; width:80px; height:25px; line-height:25px;  color:#FFF; margin-top:15px; margin-left:30px; padding-bottom:5px; padding-top:5px; background:#999; display:inline;">
                        <a href="javascript:toQzoneLogin()"><img src="__PUBLIC__/frontend/images/Connect_logo_7.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;" title="QQ登陆"/></a></div>
                    <div class="denglu_but_con2" style=" float:left; width:130px; height:25px; line-height:25px; vertical-align:middle; color:#FFF; margin-top:15px; padding-bottom:5px;padding-top:5px;background:#999;">
                        <a href="{:U('AlipayLogin/AlipayLogin')}"><img src="__PUBLIC__/frontend/images/ico/1BIvZpQVQT.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;" title="支付宝登陆"/></a></div>-->
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
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="sweetalert.min.js"></script>

<script>
    //长度必须在6~20位之间
    //开头不能为数字
    //只能包含小写字母和数字
    //数字：48~57
    //小写字母：97~122
    //innerHTML
    function fnLogin(){
        var oUname = document.getElementById("username3");
        var oUpass = document.getElementById("pass_id");
        var oError = document.getElementById("error_box");
        var isNotError = true;
        if(oUname.value.length > 20 || oUname.value.length < 6){
            oError.innerHTML = "<font color='red'>用户名长度必须在6~20位之间</font>";
            isNotError = false;
            return;

        }else if(oUname.value.charCodeAt(0) >= 48 && oUname.value.charCodeAt(0) <= 57){
            oError.innerHTML = "用户名开头不能为数字";
            isNotError = false;
            return;
        }
        if(oUpass.value.length > 20 || oUpass.value.length < 6){
            oError.innerHTML = "密码长度必须在6~20位之间";
            isNotError = false;
            return;
        }

            $("#mask").click(function () {
                $("#mask, #popup-captcha-mobile").hide();
            });
            $("#popup-submit-mobile").click(function () {

                $("#mask, #popup-captcha-mobile").show();
            });
            var handlerPopupMobile = function (captchaObj) {
                // 将验证码加到id为captcha的元素里
                captchaObj.appendTo("#popup-captcha-mobile");
                //拖动验证成功后两秒(可自行设置时间)自动发生跳转等行为
                captchaObj.onSuccess(function () {
                    var validate = captchaObj.getValidate();
                    $.ajax({
                        url: "../web/VerifyLoginServlet.php", // 进行二次验证
                        type: "post",
                        dataType: "json",
                        data: {
                            // 二次验证所需的三个值
                            type: "mobile",
                            username: $('#username3').val(),
                            password: $('#password3').val(),
                            geetest_challenge: validate.geetest_challenge,
                            geetest_validate: validate.geetest_validate,
                            geetest_seccode: validate.geetest_seccode
                        },
                        success: function (data) {
                            if (data && (data.status === "success")) {
                                var name=$('#username3').val();
                                var pass=$('#pass_id').val();
                                var hid=$('#hid').val();
                                $.ajax({
                                    type:'post',
                                    url:'{{url("login/login1")}}',
                                    data:{
                                        name:name,
                                        pass:pass,
                                        _token:hid
                                    },
                                    dataType:'json',
                                    success:function(msg){
                                        if(msg.id=="888"){

                                            location.href="{{url('index/index')}}";
                                        }else{
                                            alert(msg.chuan);
                                        }
                                    }
                                })
                            }else {
                                $(document.body).html('<h1>登录失败</h1>');
                            }
                        }
                    });
                });
                // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
            };
            $.ajax({
                // 获取id，challenge，success（是否启用failback）
                url: "../web/StartCaptchaServlet.php?type=mobile&t=" + (new Date()).getTime(), // 加随机数防止缓存
                type: "get",
                dataType: "json",
                success: function (data) {
                    // 使用initGeetest接口
                    // 参数1：配置参数
                    // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                    initGeetest({
                        gt: data.gt,
                        challenge: data.challenge,
                        offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                        // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
                    }, handlerPopupMobile);
                }
            });


    }
</script>

{{--<script type="text/javascript">--}}



{{--</script>--}}
<script>

//    $('#username3').change(function(){
//        var username=$('#username3').val();
//        if(username.length<6){
//            $('#username3').css('color','red');
//
//        }else{
//            $('#username3').css('color','green');
//            $('#pass_id').change(function(){
//                var pass=$('#pass_id').val();
//                if(pass.length<6){
//                    alert('密码格式错误！');
//                }else{
//                    $('#popup-submit-mobile').removeAttr('disabled');
//                }
//            })
//        }
//    })



</script>