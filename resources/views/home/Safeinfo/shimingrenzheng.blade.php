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
 <form action="" method="post" id="smyz">
        <p>
          <label for="username"><span style="color:#F00; margin-right:5px;">*</span>真实姓名</label>
          <input type="text" name="realname" value="" class="aqifm_srk2"/> 
          <span class="tip_aq">
          <font class="smyz zsxm">真实姓名不能为空!</font>
          
          </span>
        <p>
          <label for="username"><span style="color:#F00; margin-right:5px;">*</span>身份证号</label>
          <input type="text" name="idcard" value="{$user[id_card]}" class="aqifm_srk"/>
          <span class="tip_aq"> 
            <font class="smyz sfzh">身份证号不能为空!</font>
            <font class="tscg1"></font>
          </span>
        <div class="aqifm_con_but">
          <input name="" type="button" value="提&nbsp;&nbsp;交" class="jrb_but02" id="smrzaj"/>
       </div>
       </form>
</div>
</body>
</html>
