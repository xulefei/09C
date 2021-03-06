<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>账户安全信息</title>
<link href="Frontend/css/base.css" rel="stylesheet" type="text/css" />
<link href="Frontend/css/user.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--顶部内容开始-->
<div id="top">
  <div id="top_con">
    <ul style="display:none;">
      <li class="no_fg"><a href="#">注册</a></li>
      <li><a href="#">登陆</a></li>
      <li><a href="关于投资.html">帮助中心</a></li>
    </ul>
    <ul style="display:block;">
      <li class="no_fg"><a href="#">baggio_czm</a></li>
      <li class="no_fg"><a href="#">退出</a></li>
      <li><a href="#">充值</a></li>
      <li><a href="#">提现</a></li>
      <li><a href="#">我的借款</a></li>
      <li><a href="#">我的投资</a></li>
    </ul>
  </div>
</div>
<!--顶部内容结束--> 
<!--头部内容开始-->

@include('home.Public.main_nav')

<!--头部内容结束-->
<div id="content">
 @include('home.Public.left_nav')
    
    
    
  <div class="users_right_con">
    <h1>安全信息</h1>
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">昵称</li>
          <li class="aqxx_zhuangtai">为了您的账户安全，设置后网站显示您的昵称。</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">取消设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq">
        <p>
          <label for="username">昵称</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    
  
    
    <!--单个安全信息内容结束--> 
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">实名认证</li>
          <li class="aqxx_zhuangtai aqxx_red">实名认证有助你提升账户信用等级，通过实名认证才能借款的喔！</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">取消设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq">
        <p>
          <label for="username">真实姓名</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <p>
          <label for="username">身份证号</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    <!--单个安全信息内容结束-->
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">登录密码</li>
          <li class="aqxx_zhuangtai">为了您的账户安全，请定期更换登录密码，并确保与提现密码不同。</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq" style="display:none;">
        <p>
          <label for="username">原密码</label>
          <input type="password" class="aqxx_srk" />
        <p>
        <p>
          <label for="username">新密码</label>
          <input type="password" class="aqxx_srk" />
        <p>
        <p>
          <label for="username">确认新密码</label>
          <input type="password" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    <!--单个安全信息内容结束-->
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定邮箱</li>
          <li class="aqxx_zhuangtai">可以用邮箱找回您的密码，请先验证。</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq" style="display:none;">
        <p>
          <label for="username">邮箱</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    <!--单个安全信息内容结束--> 
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">更改手机</li>
          <li class="aqxx_zhuangtai">156****9009 可以用手机找回您的密码，更改手机请先验证。</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq" style="display:none;">
        <p>
          <label for="username">验证手机</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
      <div class="aqxx_con_xq" style="display:none;">
        <p>
          <label for="username">新手机号码</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <p>
          <label for="username">验证码</label>
          <input type="text" class="aqxx_srk" />
          <a href="#" class="jrb_but01">获取验证码</a>
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    <!--单个安全信息内容结束--> 
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">提现密码</li>
          <li class="aqxx_zhuangtai aqxx_red">为了您的账户安全，提现需要输入提现密码，请确保与登录密码不同。</li>
          <li class="aqxx_last"><a href="#" class="jrb_but03">设置</a></li>
        </ul>
      </div>
      <div class="aqxx_con_xq" style="display:none;">
        <p>
          <label for="username">提现密码</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <p>
          <label for="username">确认密码</label>
          <input type="text" class="aqxx_srk" />
        <p>
        <div class="aqxx_con_but"><a href="#" class="jrb_but01">提交</a></div>
      </div>
    </div>
    <!--单个安全信息内容结束--> 
  </div>
  <div class="clear"></div>
</div>
<!--底部内容开始-->
@include('home.Public.footer')
<script src="frontend/js/anquan.js" language="javascript"></script>
<!--底部内容结束-->


</body>
</html>
