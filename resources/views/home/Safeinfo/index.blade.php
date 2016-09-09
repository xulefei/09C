<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>

        @include('home.Public.header')
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/anquan.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
.wsz {
	color:#a9a9a9
}
.sz {
	color:#CCCCD5;
}
.smyz {
	color:#a9a9a9;
	display:none
}
.tscg {
	display:none
}


</style>
        </head>

        <body>
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--导航栏开始--> 
<!--导航栏结束-->
<div class="zhutineirong"> 
          <!--左边栏开始--> 
          @include('home.Public.left_nav')
          <!--左边栏结束--> 
          <!--右边栏开始-->
          <div class="users_right_con">
    <h1>安全信息</h1>
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">登录密码</li>
          <li class="aqxx_zhuangtai">为了您的账户安全，请定期更换登录密码，并确保与交易密码不同。</li>
          <li class="aqxx_last" id="denglumima">
          <a href="javascript:void(0);" id="clokshow" class="jrb_but03">修改</a><a href="javascript:void(0);" id="clokhide" style="display:none" class="jrb_but03">取消修改</a>
         </li>
        </ul>
      </div>
      <div class="aqxx_con_xq" id="denglumima02" style="display:none"><iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="270px"" id="ifm" name="ifm"></iframe></div>
    </div>
    <!--单个安全信息内容结束-->
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">交易密码</li>
          <li class="aqxx_zhuangtai">为了您的账户安全，提现需要输入交易密码，请确保与登录密码不同。</li>
          <li class="aqxx_last">
          <a href="javascript:void(0);" id="txshow1" class="jrb_but03">设置</a><a href="javascript:void(0);" id="txhide1" style="display:none" class="jrb_but03">取消设置</a>
         </li>
        </ul>
      </div>
       <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">交易密码</li>
          <li class="aqxx_zhuangtai">为了您的账户安全，提现需要输入交易密码，请确保与登录密码不同。</li>
          <li class="aqxx_last">
          <a href="javascript:void(0);" id="txshow" class="jrb_but03" >修改</a><a href="javascript:void(0);" id="txhide" style="display:none" class="jrb_but03">取消修改</a>
         </li>
        </ul>
      </div>
      <div class="aqxx_con_xq" id="jiaoyimima02" style="display:none">
      <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="200px"" id="ifm" name="ifm"></iframe>
      </div>
      <div class="aqxx_con_xq" id="jiaoyimima03" style="display:none">
      <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="270px"" id="ifm" name="ifm"/></iframe>
      </div>
       <div class="aqxx_con_xq" id="jiaoyimima04" style="display:none">
       <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="150px"" id="ifm" name="ifm"></iframe>
       </div>
      
      <div class="aqxx_header_con" id="findpass" style="display:none">
      <ul>
          <li class="aqxx_neixing">&nbsp;</li>
          <li class="aqxx_zhuangtai">&nbsp;</li>
          <li class="aqxx_last">
         <a href="javascript:void(0);" id="zhshow" class="jrb_but03">找回密码</a><a href="javascript:void(0);" id="zhhide" style="display:none" class="jrb_but03">取消找回</a>
         </li>
      </ul>
      </div>
      
    </div>
    <!--单个安全信息内容结束-->
    <!--单个安全信息内容开始-->
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定邮箱</li>
          <li class="aqxx_zhuangtai">可以用邮箱找回您的密码，请先验证。</li>
          <li class="aqxx_last" id="bangdingyouxiang">
          <a href="javascript:void(0);" id="emailshow" class="jrb_but03">验证</a><a href="javascript:void(0);" id="emailhide" style="display:none" class="jrb_but03">取消验证</a>
        </li>
        </ul>
      </div>
       <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定邮箱</li>
          <li class="aqxx_zhuangtai"></li>
          <li class="aqxx_last">
         <a style="color:#999; margin-right:10px;">已验证</a>
        </li>
        </ul>
      </div>
      <div class="aqxx_con_xq" id="bangdingyouxiang02" style="display:none"><iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="150px"" id="ifm" name="ifm"></iframe></div>
    </div>
    <!--单个安全信息内容结束--> 
    <!--单个安全信息内容开始-->
    
    <div class="aqxx_con">
      <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定手机</li>
          <li class="aqxx_zhuangtai">可以用手机找回您的密码，更改手机请先验证。</li>
          <li class="aqxx_last" >
          <a href="javascript:void(0);" id="phoneshow" class="jrb_but03">验证</a><a href="javascript:void(0);" id="phonehide" style="display:none" class="jrb_but03">取消验证</a>
         </li>
        </ul>
      </div>
         <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定手机</li>
          <li class="aqxx_zhuangtai">可以用手机找回您的密码，更改手机请先验证。</li>
          <li class="aqxx_last">
          <a href="javascript:void(0);" id="phoneshow1" class="jrb_but03">修改</a><a href="javascript:void(0);" id="phonehide1" style="display:none" class="jrb_but03">取消修改</a>
         </li>
        </ul>
      </div>
        <div class="aqxx_header_con">
        <ul>
          <li class="aqxx_neixing">绑定手机</li>
          <li class="aqxx_zhuangtai">可以用手机找回您的密码，更改手机请先验证。</li>
          <li class="aqxx_last">
          <a href="javascript:void(0);" id="phoneshow2" class="jrb_but03">设置</a><a href="javascript:void(0);" id="phonehide2" style="display:none" class="jrb_but03">取消设置</a>
         </li>
        </ul>
      </div>
      <div class="aqxx_con_xq" id="bangdingshouji02" style="display:none">
      <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="200px"" id="ifm" name="ifm"></iframe>
      </div>
       <div class="aqxx_con_xq" id="bangdingshouji03" style="display:none">
       <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="270px"" id="ifm" name="ifm"></iframe>
       </div>
        <div class="aqxx_con_xq" id="bangdingshouji04" style="display:none">
        <iframe src="" style="marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="400px" height="200px"" id="ifm" name="ifm"></iframe>
        </div>
    </div>
  </div>
</div>
@include('home.Public.footer
')
<script src="/frontend/js/anquan.js" language="javascript"></script>
</body>
</html>
