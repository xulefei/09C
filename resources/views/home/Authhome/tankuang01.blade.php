
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="/frontend/css/base.css"  rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width">
    </head>
    <style>
	  body {
	font: 14px tahoma,arial,"Hiragino Sans GB","Microsoft Yahei",宋体;
	color:#474747;
	background:#f7f7f6;
}
	  ul,li{ list-style-type:none;}
      .touxiang_tc02 ul{padding-left:28px; padding-top:20px; border:solid 1px #e6e6e6; float:left; width:540px; position:relative;}
      .touxiang_tc02 ul li{ float:left; margin-right:10px; margin-bottom:20px;}
    </style>
    <body>
            <div class="touxiang_tc02">
                    <form enctype="multipart/form-data"  method="post" action="Authhome/upload/id/<?php echo $_GET['id']?>"> 
                        <ul>  
                            <li>身份证正反面：<input type="file" name="photo" class="choose_tc"  /></li>
                            <!--<li><input type="submit" value="&nbsp;" class="put_tc" id="tj" name="start"/> </li>-->
                            <li>手持身份证照：<input type="file" name="photo" class="choose_tc"  /></li>
                            <li><input type="submit" value="&nbsp;" class="put_tc" id="tj" name="start"/> </li><div id="ts"></div>
                        </ul>
                    </form>
                    <div class="jindutiao_03">&nbsp;</div>
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
		$(".jindutiao_03").show();
	}) 
  });
</script>
    </body>
</html>
