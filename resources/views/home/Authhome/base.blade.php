<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="/frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="/frontend/css/base.css"  rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
		#TB_closeAjaxWindow{ width:48px; height:10px; overflow:hidden;}
    </style>
    </head>
    <body>
        <div id="myOnPageContent">
        
            <div class="touxiang_tc">
              <dl>
                <dt><img src="/frontend/images/shangchuan_icon.png" class="png_fix" title="上传认证"/>身份认证<p>您上传的身份证扫描件需和您绑定的身份证一致，否则将无法通过认证。</p></dt>
                <dd><b>认证说明：</b></dd>
                <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、请您上传您<span>本人身份证原件</span>的正、反两面照片。<a href="/frontend/images/shili/shengfenzheng.jpg" target="_blank">查看示例</a></dd>
                <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、本人手持身份证正面头部照（确保身份证上的信息没有被遮挡，避免证件与头部重叠）。<a href="/frontend/images/shili/id_example_girl.jpg" target="_blank">查看示例</a></dd>
                <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
                <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、图片的尺寸<span>小于1.5M。</span>格式为：<span>jpg、png、gif。</span></dd>
                <dd><b>认证有效期：<span>永久。</span></b></dd>
                <dd>&nbsp;</dd>  
                <dd><b>上传身份证明：</b></dd> 
              </dl>
                    <form enctype="multipart/form-data"  method="post" action="__APP__/Authhome/upload/id/"> 
                        <ul>  
                            
                            <li style=" margin-right:100px;">真实姓名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="realname" maxlength="8" class="choose" id="realname" mouseout="return Check(s)"  style=" width:200px; height:30px; line-height:30px;"/><font class="tscg1" style="margin-left:10px;"></font></li>
                            <li  style=" margin-right:100px;">身份证号码&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="idcard" class="choose" id="idcard" style=" width:200px; height:30px; line-height:30px;"><font class="tscg2" style="margin-left:10px;"></font></li>
                         

                            <li>身份证正反面：<input type="file" name="photo" class="choose_tc"  /></li>
                            <!--<li><input type="submit" value="&nbsp;" class="put_tc" id="tj" name="start"/></li>-->
                            <li>手持身份证照：<input type="file" name="photo" class="choose_tc"  /></li>
                            <li><input type="submit" value="&nbsp;" class="put_tc" id="tj" name="start"/></li><div id="ts"></div>
                        </ul>
                    </form>
                    <div class="jindutiao_02">&nbsp;</div>
                </div>
                <div class="jinggao">
                <span>警告：</span> 金融宝是一个注重诚信的网络平台。如果我们发现您上传的资料是伪造或有人工修改痕迹，金融宝会将你加入系统黑名单，永久取消您在金融宝的借款资格。
                </div>
        </div>
            <script src="/frontend/js/jquery.js" type="text/javascript"></script>
            <script language="JavaScript" src="common/js/idcard.js" ></script>
            <script type="text/javascript">
                $(function() {
                    $("input[name='realname']").blur(function() {
                        var reg = /^[\u4e00-\u9fa5]+$/;
                        if (reg.test($("input[name='realname']").val())) {
                            $(".tscg1").html("<font color=\"red\"></font>");
                        } else {
                            $(".tscg1").html("<font color=\"red\">真实姓名必须是中文!</font>");
                        }
                    });
                    $("input[name='idcard']").blur(function() {
                        if (checkIdcard($("input[name='idcard']").val())) {
                            $(".tscg2").html("<font color=\"red\"></font>");
                        } else {
                            $(".tscg2").html("<font color=\"red\">身份证格式不正确!</font>");
                        }
                    });


                    $('#tj').click(function() {
                        var reg = /^[\u4e00-\u9fa5]+$/;
                        if (!reg.test($("input[name='realname']").val())) {
                            $(".tscg1").html("<font color=\"red\">真实姓名必须是中文!</font>");
                            return false;
                        }

                        if (!checkIdcard($("input[name='idcard']").val())) {
                            $(".tscg2").html("<font color=\"red\">身份证格式不正确!</font>");
                            return false;
                        }
                    });
                });
                function checkIdcard(s) {
                    if (!idCardNoUtil.checkIdCardNo(s)) {
                        $("#error").html("身份证格式不正确！");
                        return false;
                    } else {
                        $("#error").html("");
                        return true;
                    }
                }
            </script>
            <script>
$(document).ready(function(){
	$(".put_tc").click(function(){
		$(".jindutiao").show();
		$(".jindutiao_02").show();
	}) 
  });
</script>
    </body>
</html>
