<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>用户注册</title>
    <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />

    @include('home.Public.header')
</head>
<body>
@include('home.Public.main_nav')
<!--导航栏开始-->
<div class="yinying_jrb2"></div>
<!--导航栏结束-->
<div class="zhutineirong_zc">
    <div class="zhuce_tittle" style="font-size:24px; margin-top:40px; margin-left:100px; padding-bottom:30px;">
        注册
    </div>
    <form action="" method="post" id="register">
        <div class="biaodan">
            <ul>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <li>
                    <span>用户名</span><input  name="username" maxlength="20" id="name" type="text" class="biaodan_reg"/><b id="yan">用户名必须要4-20位字母、数字和下划线！</b>	 <font id="okname" class="lvsetishi"></font>
                </li>

                <li>
                    <span>手机号</span><input  name="phone" id="phone" maxlength="11" class="biaodan_reg"/><b id="phone1">手机号码必须是11位数字!</b>
                    <font  id="okphone" class="lvsetishi"></font>
                </li>

                <li>
                    <span>邮箱地址</span><input  name="email" id="email" maxlength="30" class="biaodan_reg"/><b id="email1">邮箱地址格式必须符合标准!</b>
                    <font id="okemail" class="lvsetishi"></font>
                </li>

                <li>
                    <span>密码</span><input  name="pass" type="password" maxlength="20" id="pass" class="biaodan_reg"/><b id="pass2">密码必须最少6位字母、数字和符号！</b> <font id="pass1" class="lvsetishi"></font></li>

                <li>
                    <span>重复密码</span><input  name="rpass"  type="password" id="rpasss" class="biaodan_reg"/><b id="rpass">两次输入的密码必须一致！</b> <font id="okrpass" class="lvsetishi"></font>
                </li>
                <li>
                     <span><b>*</b>收到的验证码</span><input  class="yanzhengma_01" name="code" maxlength="6" /><input type="hidden" id="yanzheng">
                    <input name="" type="button" value="获取验证码" class="input2 hqyzm zm"  id="zm" style="background-color:#0E9DA9; color:#FFF; width:80px; height:30px; margin-left:15px; border:0; cursor:pointer;"/><span style=" float:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </li>
                <!-- <li>
                    <span>验证码</span><input  name="verify" maxlength="4"  class="biaodan_reg2"/><img src="" class="verify-code" onClick="click_change(this)" style="margin-left:10px; float:left" title="验证码"/><b id="verify1"></b><font id="okverify" class="lvsetishi"></font>
                </li> -->

                <div class="clear"></div>
            </ul>
        </div>
        <div class="tongyi"><input type="checkbox" name="ok" id="ok" value="ON" />我已阅读并同意  <span><a href="#fuwuxieyi" id="fuwuxieyi" style="color:#3d89b4;">《金融宝全民理财互动平台服务协议》</a></span></div>
        <div class="fuwuxieyi" style="display:none">
            <iframe src="" style="width:500px; height:300px; border: solid 1px #e6e6e6;"></iframe></div>
        <div class="tijiao_jrb">
            <input type="button" value="提&nbsp;&nbsp;交" name="start" id="start" class="jrb_but02" ><font class="tishi"></font>
            <b id="regMsg"></b></div>
        <input type="hidden" name="thirdPartyUserId" value="" />
    </form>
    <div class="clear"></div>
</div>
@include('home.Public.footer')
</body>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://static.geetest.com/static/tools/gt.js"></script>
<script type="text/javascript">
    var email = 0, username = 0, phone = 0, password = 0, rpassword = 0, again = 0 , code = 0;
    //实现点击切换验证码

    $(function() {
        //初始化信息
        // $("#name").focus();
        // if ($('#ok').attr("checked") !== 'checked') {
        //     $('#start').attr('disabled', 'true');
        // }
        // $("#ok").click(function() {
        //     if ($(this).attr("checked") === true) {
        //         $('#start').removeAttr('disabled');
        //     } else {
        //         $('#start').attr('disabled', 'true');
        //     }
        // });
        //检查电子邮箱
        $("#email").blur(function() {
            var reg = /^[\w.\-]+@(?:[a-z0-9]+(?:-[a-z0-9]+)*\.)+[a-z]{2,6}$/;
            if ($("#email").val() !== "" && !reg.test($("#email").val())) {
                $("#email1").html("<font color=\"#a9a9a9\">邮件格式不正确！</font>");
                $("#okemail").hide();
                return false;
            }else{
                $("#email1").hide();
                email = 1;
                $("#okemail").show();
            }
        });

        //检查用户名
        $("#name").blur(function(e) {
            if (!checkUsername($("input[name='username']").val())) {
                return false;
            }
            if ($.trim($("input[name='username']").val()).length < 4 || $("input[name='username']").val().length > 20) {
                $("#yan").html("<font color=\"#a9a9a9\">用户名必须要4-20位字母、数字和下划线！</font>").show();
                $("#okname").hide();
            } else {
                $.get("{{url('register/usercheck')}}", {
                    name: $("#name").val()
                }, function(str) {
                    // alert(str)
                    str = $.trim(str);
                    if (str === '0') {
                        $("#yan").html("<font color=\"#a9a9a9\">您输入的用户名存在！请重新输入！</font>").show();
                        $("#okname").hide();
                    } else {
                        $("#yan").hide();
                        //$("#okname").show();
                        $("#okname").html("<font color=\"green\">该用户可以注册!</font>").show();
                        username = 1;
                    }
                });
            }
        });
        //检查密码
        $("#pass").keyup(function() {
            var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
            var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
            var enoughRegex = new RegExp("(?=.{6,}).*", "g");
            if (false === enoughRegex.test($(this).val())) {
                $('#pass2').html('<font color="#a9a9a9">密码必须最少6位字母、数字和符号！</font>').show();
                $('#pass1').hide();
                return;
            } else if (strongRegex.test($(this).val())) {
                $('#pass1').className = 'ok';
                $('#pass1').html('<font color="#a9a9a9">密码强度:</font><font color="red">&nbsp;强</font>').show();
                $('#pass2').hide();
            } else if (mediumRegex.test($(this).val())) {
                $('#pass1').className = 'alert';
                $('#pass1').html('<font color="#a9a9a9">密码强度:</font><font color="blue">&nbsp;中</font>').show();
                $('#pass2').hide();
            } else {
                $('#pass1').className = 'error';
                $('#pass1').html('<font color="#a9a9a9">密码强度:</font><font color="green">&nbsp;弱</font>').show();
                $('#pass2').hide();
            }
            password = 1;
        });
        //检查重复密码
        $("#rpasss").keyup(function() {
            if ($("input[name='pass']").val() !== $("input[name='rpass']").val()) {
                $("#rpass").html("<font color=\"#a9a9a9\">两次输入的密码不一致！</font>");
                $("#okrpass").hide();
            } else {
                $("#okrpass").show();
                $("#rpass").html("<font color=\"#a9a9a9\"></font>");
                rpassword = 1;
            }
        });
    });

    $("#start").click(function() {
        // alert('123')
        var ok = $('#ok').is(':checked');
        if(ok){
            again = 1
        }else{
            again = 0
        }
        var rand = $('#yanzheng').val();
        var yan = $('input[name=code]').val();
        if(yan==rand){
            code = 1
        }else{
            code = 0
        }

        if (again === 0 ||email === 0 || phone === 0 || username === 0 || password === 0 || rpassword === 0 ||code ===0) {
            $("#regMsg").html("<font color=\"red\">请填写完整注册信息！</font>");
            setTimeout(function() {
                $("#regMsg").html('');
            }, 3000);
            return false;
        }
        $(this).attr('disabled', true);
        $("#regMsg").html("<font color=\"green\">信息提交中……</font>");
        $.get("{{url('register/registeryan')}}", $('#register').serialize(), function(str) {
            str = $.trim(str);
            if (str === '1') {
                $("#regMsg").html("<font color=\"green\">注册成功！</font>");
                setTimeout(function() {
                    self.location = '{{url("register/zzz")}}';
                }, 1000);
            } else {
                $("#start").removeAttr('disabled');
                $("#regMsg").html("<font color=\"red\">" + str + "</font>");
            }
        });
    });
    //检查验证码
    // $("input[name='verify']").blur(function() {
    //     $.post('{:U("Register/yanzhen")}', $("#register").serialize(), function(str) {
    //         str = $.trim(str);
    //         if (str === '3') {
    //             $("#verify1").html("<font color=\"#a9a9a9\">验证码输入错误！</font>").show();
    //             $("#okverify").hide();
    //         } else if (str === '4') {
    //             $("#okverify").show();
    //             $("#verify1").html("<font color=\"#a9a9a9\"></font>");
    //             code = 1;
    //         }
    //     });
    // });
    //检查手机号码
    $("input[name='phone']").blur(function() {
        if ($("input[name='phone']").val() === "") {
            $("#phone1").html("<font color=\"#a9a9a9\">手机格式不正确！</font>");
            $("#okphone").hide();
            return false;
        } else {

            if (!checkMobile($("input[name='phone']").val())) {
                return false;
            }else{
                $("#okphone").hide();

                $("#okphone").show();
                phone = 1;

            }

        }

    });

    function checkMobile(s) {
        var reg = /^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$/;
        if (s !== "" && !reg.test(s) || s.length !== 11) {
            $("#phone1").html("<font color=\"#a9a9a9\">手机格式不正确！</font>");
            $("#okphone").hide();
            return false;
        } else {
            $("#phone1").html("<font color=\"#a9a9a9\"></font>");

            return true;
        }
    }

    function checkUsername(s) {
        var reg = /^[0-9a-z][\w-.]*[0-9a-z]$/i;
        if (s !== "" && !reg.test(s)) {
            $("#yan").html("<font color=\"#a9a9a9\">用户名只能包含数字、字母、下划线，不能使用特殊字符！</font>");
            return false;
        }
        return true;
    }
    // $(function(){
    //     fun_timedown(60);
    // });
    $(".hqyzm").click(function(){

        var phone = $("input[name='phone']").val();
        var _token = $("input[name='_token']").val();
        // alert(_token);
        if(phone==""){
            $(".tishi").html("<font color=\"red\">发送失败！</font>");
        }else{
            $.post('{{url("msg/index")}}', {tel:phone,_token:_token}, function(str){
                if (str) {
                    $('#yanzheng').val(str)
                    fun_timedown(60);
                    $(".tishi").html("<font color=\"#0E9DA9\">已经发送！</font>");
                    $(".hqyzm").attr("disabled", "disabled");
                    $(".hqyzm").css({"color": "#000", "background-color": "#999"});
                    setTimeout(function() {
                            $(".tishi").html("");
                     }, 3000);
                } else {
                    $(".tishi").html("<font color=\"red\">发送失败！</font>");      
                }
                // alert(str);
            })
           
        }
            
    })


    function fun_timedown(time)
            {
                if (time == 'undefined')
                    time = 60;
                //$("#hqyzm").html(time+"秒");
                $(".zm").attr("value", time + "秒");

                time = time - 1;
                if (time >= 0)
                {
                    $(".zm").attr("disabled", "disabled");
                    setTimeout("fun_timedown(" + time + ")", 1000);
                } else
                {
                    $(".zm").attr("disabled", "");
                    $(".zm").css({"color": "#FFF", "background-color": "#0E9DA9"});
                    $(".zm").attr("value", "获取验证码");
                }
            }
</script>
<script>
    $(document).ready(function() {
        $("#fuwuxieyi").click(function() {
            $(".fuwuxieyi").toggle();
        })
    });
</script>
</html>