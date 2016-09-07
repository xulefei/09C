<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>

        @include('home.Public.header')
        <link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
        <link href="frontend/css/anquan.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
.wsz {
	color:red
}
.sz {
	color:#CCCCD5;
}
.smyz {
	color:#F00;
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
      <div class="right">
      
      <div class="right_top2">
              <div class="title">安全信息</div>
              <div class="border"></div>
              <div class="anquanli">
              <li></b>
        <h3>登录密码</h3>
       
        
        <span style="color:#000" width="1000px;">为了您的账户安全，请定期更换登录密码，并确保登录密码设置与提现密码不同。</span>
        <label><a href="javascript:void(0);" id="clokshow" class="shanks">修改</a><a href="javascript:void(0);" id="clokhide" style="display:none" class="shanks">取消修改</a></label>
      </li> 
      </div>
              <form action="" method="post" id="pass">
        <div class="passxl">
                  <li><b style="margin-left:28px;">*</b>原密码
            <input type="password" placeholder="请输入原登录密码" name="pass">
            <br>
            <font class="smyz pass">原不能为空!</font></li>
                  <li><b style="margin-left:28px;">*</b>新密码
            <input type="password" placeholder="6-12位字母、数字和符号(不包括空格)" name="newpass">
            <br>
            <font class="smyz newpass">新密码不能为空!</font></li>
                  <li><b>*</b>确认新密码
            <input type="password" placeholder="请再次输入您的新密码" name="rpass">
            <br>
            <font class="smyz rpass">确认新密码不能为空!</font></li>
                  <li>
            <input name="" type="button" value="提交" class="input2"/ id="passaj">
            <font class="tscg2"></font></li>
                </div>
      </form>
              <div class="border"></div>
              <li></b>
        <h3>交易密码</h3>
        <span>为了您的账户安全，提现需要输入提现密码，请确保与登录密码不同。</span>
        <label><a href="javascript:void(0);" id="txshow" class="shanks">设置</a><a href="javascript:void(0);" id="txhide" style="display:none" class="shanks">取消设置</a></label>
      </li>
              <form action="" method="post" id="txadd">
        <div class="txxl     ">
                  <li><b>*</b>交易密码
            <input type="password" name="txpass" placeholder="6-12位字母、数字和符号(不包括空格)"/>
            <br>
            <font class="smyz txpass">交易密码不能为空!</font></li>
                  <li><b>*</b>重复密码
            <input type="password" name="rtxpass"/>
            <br>
            <font class="smyz rtxpass">重复密码不能为空!</font></li>
                  <li>
            <input name="" type="button" value="提交" class="input2" id="txaj"/>
            <font class="tscg4"></font></li>
                </div>
      </form>
              <li>
        <h3>交易密码</h3>
        <span style="color:#000">已设置</span>
        <label><a href="javascript:void(0);" id="txshow" class="shanks" >修改</a><a href="javascript:void(0);" id="txhide" style="display:none" class="shanks">取消修改</a>|<a href="javascript:void(0);" id="zhshow">找回</a><a href="javascript:void(0);" id="zhhide" style="display:none">取消找回</a></label>
      </li>
              <form action="" method="post" id="txedit">
        <div class="txxl">
                  <li><b>*</b>原交易密码
            <input type="password" name="ytxpass" placeholder="请输入原交易密码"/>
            <br>
            <font class="smyz ytxpass">原交易密码不能为空!</font></li>
                  <li><b>*</b>新交易密码
            <input type="password" name="newtxpass" placeholder="6-12位字母、数字和符号(不包括空格)"/>
            <br>
            <font class="smyz newtxpass">新交易密码不能为空!</font></li>
                  <li><b>*</b>确认交易密码
            <input type="password" name="rnewtxpass"/>
            <br>
            <font class="smyz rnewtxpass">确认交易密码不能为空!</font></li>
                  <li>
            <input name="" type="button" value="提交" class="input2" id="txeditaj"/>
            <font class="tscg5"></font></li>
                </div>
      </form>
              <form action="{:U('Safeinfo/txpassedit')}" method="post" id="txzh">
        <div class="zhpass">
                  <li><b>*</b>原手机号码&nbsp;&nbsp;<font></font></li>
                  <li><b>*</b>手机验证码
            <input type="text" name="phonecode1"/>
            <input name="" type="button" value="获取验证码" class="input2 hqyzm zm" id="zm" style="background-color:#0E9DA9; color:#FFF;"/>
          </li>
                  <li>
            <input name="" type="button" value="下一步" class="input2" id="tjyzmzh"/>
            <font class="yzts"></font></li>
                </div>
      </form>
              <div class="border"></div>
              <div class="anquanli">
              <li></b>
              
              
        <h3>绑定邮箱</h3>
        <span>可以用邮箱找回您的密码，请先验证。</span>
        <label><a href="javascript:void(0);" id="emailshow" class="shanks">设置</a><a href="javascript:void(0);" id="emailhide" style="display:none" class="shanks">取消设置</a></label>

        <span style="color:#000">已设置</span>
        <label class="sz"><a href="javascript:void(0);" id="emailshow">修改</a><a href="javascript:void(0);" id="emailhide" style="display:none">取消修改</a></label>
      </li>
      </div>
              <form action="" method="post" id="yj">
        <div class="emailxl">
                  <li><b style="margin-left:28px;">*</b>邮箱
            <input type="text" name="email" value="">
            <br>
            <font class="smyz email1">邮件不能为空!</font></li>
                  <li>
            <input name="" type="button" value="提交"  class="input2" id="emailaj"/>
            <font class="tscg3"></font></li>
                </div>
      </form>
              <div class="border"></div>

              <div class="anquanli">
              <li></b>
        <h3>绑定手机</h3><span style="color:#555555">&nbsp;可以用手机找回您的密码，更改手机请先验证。</span>
        <label><a href="javascript:void(0);" id="phoneshow" class="shanks">验证</a><a href="javascript:void(0);" id="phonehide" style="display:none" class="shanks">取消验证</a></label>
      </li>
      </div>
              <form action="" method="post" id="phoneyz">
        <div class="phonexl">
                  <li><b>*</b>原手机号码&nbsp;&nbsp;<font></font></li>
                  <li><b>*</b>手机验证码
            <input type="text" name="phonecode"/>
            <input name="" type="button" value="获取验证码" class="input2 hqyzm zm" id="zm" style="background-color:#0E9DA9; color:#FFF;"/>
          </li>
                  <li>
            <input name="" type="button" value="提交" class="input2" id="tjyzm"/>
            <font class="yzts"></font></li>
                </div>
      </form>
              <div id="ybd1">
        <li></b>
                  <h3>绑定手机</h3>
                  <span style="color:#555555"></span>
                  <label><a href="javascript:void(0);" id="phoneshow" class="shanks">修改</a><a href="javascript:void(0);" id="phonehide" style="display:none" class="shanks">取消修改</a></label>
                </li>
        <form action="" method="post" id="phoneedit">
                  <div class="phonexl">
            <li><b>*</b>原手机号码&nbsp;&nbsp;<font></font></li>
            <li><b>*</b>手机验证码
                      <input type="text" name="phoneedit"/>
                      <input name="" type="button" value="获取验证码" class="input2 hqyzm zm"  id="zm" style="background-color:#0E9DA9; color:#FFF;"/>
                    </li>
            <li><b>*</b>提现密码&nbsp;&nbsp;&nbsp;
                      <input type="password" name="txpass1"/>
                    </li>
            <li>
                      <input name="" type="button" value="下一步" class="input2" id="tjedit"/>
                      <font class="yzts"></font></li>
          </div>
                </form>
      </div>
              <div id="addsj">
        <li></b>
                  <h3>绑定手机</h3>
                  <span style="color:#555555">无</span>
                  <label><a href="javascript:void(0);" id="phoneshow" class="shanks">设置</a><a href="javascript:void(0);" id="phonehide" style="display:none" class="shanks">取消设置</a></label>
                </li>
        <form action="" method="post" id="phoneadd">
                  <div class="phonexl">
            <li><b>*</b>手机号码&nbsp;&nbsp;
                      <input type="text" name="phoneadd"/>
                      <font></font></li>
            <li><b>*</b>手机验证码
                      <input type="text" name="phone"/>
                      <input name="" type="button" value="获取验证码" class="input2 zm" id="zm1" style="background-color:#0E9DA9; color:#FFF;"/>
                    </li>
            <li>
                      <input name="" type="button" value="提交" class="input2" id="addphone"/>
                      <font class="yzts"></font></li>
          </div>
                </form>
      </div>
              <div style="display:none">
        <li>
                  <h3>绑定手机</h3>
                  <span style="color:#555555">未设置</span>
                  <label><a href="javascript:void(0);" id="phoneshow" class="shanks">设置</a><a href="javascript:void(0);" id="phonehide" style="display:none" class="shanks">取消设置</a></label>
                </li>
        <div class="phonexl">
                  <li><b>*</b>手机号码&nbsp;&nbsp;
            <input type="text"/>
            <font class="smyz txpass">手机号码不能为空!</font></li>
                  <li><b>*</b>手机验证码
            <input type="text"/>
            <input name="" type="submit" value="获取验证码" class="input2"/>
          </li>
                  <li>
            <input name="" type="submit" value="提交" class="input2"/>
          </li>
                </div>
      </div>
              <div class="border"></div>
              <div class="anquanli">
              
              <li></b>
        <h3>实名认证</h3>
       
        <span class="wsz">实名认证有助你提升账户信用等级，通过实名认证才能借款的喔！</span>
        <label><a  href="javascript:void(0);" id="nameshow" class="shanks">设置</a><a href="javascript:void(0);" id="namehide" style="display:none" class="shanks">取消设置</a></label>
        </li>

       <span style="color:#000"> </span>
<!--            <span style="color:#000">实名认证有助你提升账户信用等级，通过实名认证才能借款的喔！ </span>-->
       <label class="sz"></label>
      </div>
              <form action="{:U('Safeinfo/realadd')}" method="post" id="smyz">
        <div class="namexl">
                  <li><b>*</b>真实姓名
            <input type="text" name="realname" value="{$user[real_name]}"/>
            <br>
            <font class="smyz zsxm">真实姓名不能为空!</font></li>
                  <li><b>*</b>身份证号
            <input type="text" name="idcard" value="{$user[id_card]}"/>
            <br>
            <font class="smyz sfzh">身份证号不能为空!</font></li>
                  <li>
            <input name="" type="button" value="提交" class="input2" id="smrzaj"/>
            <font class="tscg1"></font></li>
                </div>
      </form>
  </div>
  <!--<div class="right">
  <div class="users_right_con">
    <h1>安全信息</h1>
    <!--单个安全信息内容开始-->
   <!-- <div class="aqxx_con">
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
  <!--  <div class="aqxx_con">
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
  <!--  <div class="aqxx_con">
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
  <!--  <div class="aqxx_con">
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
   <!-- <div class="aqxx_con">
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
  <!--  <div class="aqxx_con">
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
 <!-- </div>
  </div>-->
          <!--右边栏结束-->
          <div class="clear"></div>
        </div>
</div>
@include('home.Public.footer') 
<script src="frontend/js/anquan.js" language="javascript"></script>
</body>
</html>
