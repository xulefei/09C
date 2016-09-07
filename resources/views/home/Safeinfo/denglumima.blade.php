<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
<link href="frontend/css/base.css" rel="stylesheet" type="text/css" />
<script src="frontend/js/jquery.js" type="text/javascript"></script>

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

<body style="background:#FFF">
<div class="aq_iframe">
 <form action="{:U('Safeinfo/passedit')}" method="post" id="pass">
        <p>
          <label for="username"><span style="color:#F00; margin-right:5px;">*</span>原密码</label>
          <input type="password" class="aqifm_srk" placeholder="请输入原登录密码" name="pass"/>
          <span class="tip_aq">
          <font class="smyz pass">原密码不能为空!</font>
           <font class="tscg2"></font>
          </span>
        <p>
          <label for="username"><span style="color:#F00; margin-right:5px;">*</span>新密码</label>
          <input type="password" class="aqifm_srk" placeholder="6-12位字母、数字、符号" name="newpass"/>
          <span class="tip_aq">
          <font class="smyz newpass">新密码不能为空!</font>
          </span>
        <p>
          <label for="username"><span style="color:#F00; margin-right:5px;">*</span>确认新密码</label>
          <input type="password" class="aqifm_srk" placeholder="请再次输入您的新密码" name="rpass"/>
          <span class="tip_aq">
          <font class="smyz rpass">确认新密码不能为空!</font>
          </span>
        <div class="aqifm_con_but">
         <input name="" type="button" value="提&nbsp;&nbsp;交" class="jrb_but02" id="passaj" />
        </div>
  </form>
</div>
</body>
</html>
