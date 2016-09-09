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
                        <if condition="($alipayName != null)" ><li><span>&nbsp;</span>欢迎您：，请完善您在金融宝的个人信息以完成与第三方账号的绑定。<p>若您已在金融宝注册了账户，请<a href="" style="color:#3d89b4">点击这里。</a></p></li></if> 
                       <li><span>&nbsp;</span>欢迎您：，请完善您在金融宝的个人信息以完成与第三方账号的绑定。<p>若您已在金融宝注册了账户，请<a href="" style="color:#3d89b4">点击这里。</a></p></li></if> 
						<input  type="hidden" name="userId" value=""/>
                        <li>
                            <span>用户名</span><input  name="name" maxlength="20" id="name" type="text" class="biaodan_reg"/><b id="yan">用户名必须要4-20位字母、数字和下划线！</b>	 <font id="okname" class="lvsetishi"></font>
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
                            <span>验证码</span><input  name="verify" maxlength="4"  class="biaodan_reg2"/><img src="" class="verify-code" onClick="click_change(this)" style="margin-left:10px; float:left" title="验证码"/><b id="verify1"></b><font id="okverify" class="lvsetishi"></font>
                        </li>

                        <div class="clear"></div>
                    </ul> 
                </div>  
                <div class="tongyi"><input type="checkbox" name="ok" id="ok" value="ON" />我已阅读并同意  <span><a href="#fuwuxieyi" id="fuwuxieyi" style="color:#3d89b4;">《金融宝全民理财互动平台服务协议》</a></span></div> 
                <div class="fuwuxieyi" style="display:none"><iframe src="{" style="width:500px; height:300px; border: solid 1px #e6e6e6;"></iframe></div> 
                <div class="tijiao_jrb"><input type="button" value="提&nbsp;&nbsp;交" name="start" id="start" class="jrb_but02" ><b id="regMsg"></b></div>
                <input type="hidden" name="thirdPartyUserId" value="" />
            </form>
            <div class="clear"></div>
        </div>
        @include('home.Public.footer')
    </body>
</html>