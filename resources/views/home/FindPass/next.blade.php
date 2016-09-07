<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>金融宝</title>
        <!--头部开始-->
        @include('home.Public.header')
        <!--头部结束-->
        <link href="frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
        <script src="frontend/js/jquery.js" type="text/javascript"></script> 
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--下一步开始-->
        <div class="zhaohuimima_007">
          <div class="fasongzhi">
            <ul>
              <li>"金融宝手机验证短信"已发送至您的手机</li>
              <li><span>{$as}</span></li>
            </ul>
          </div>
       <form action="" method="post"  id="zhcode">
           <input name="phone" type="hidden" value="{$as}"/>
        <div class="biaodan_009">
          <ul>
            <li>
                <span><b>*</b>收到的验证码</span><input  class="yanzhengma_01" name="code" maxlength="6" />
                <input name="" type="button" value="获取验证码" class="input2 hqyzm zm"  id="zm" style="background-color:#0E9DA9; color:#FFF; width:80px; height:30px; margin-left:15px; border:0; cursor:pointer;"/><span style=" float:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			</li>
            <!--<li><span>&nbsp;</span>没收到短信?&nbsp;<b id="num">30</b>秒重新获取</li>-->
            <li><span>&nbsp;</span><input type="submit" value="提&nbsp;&nbsp;交" class="jrb_but02" /></li>
          </ul>
          <div class="clear"></div>
        </div>   
       </form>
         <div class="kefu_007">若您无法使用上述方法找回,请联系客服0773-2668269</div>
                 <div class="clear"></div>
</div>
        <!--尾部开始-->
        @include('home.Public.footer')
        <!--尾部结束-->
        <script>            
            $(function(){
                fun_timedown({$etime});
            });
            //获取验证码
            $(".hqyzm").click(function() {
                $.post('{:U("FindPass/code")}', $("#zhcode").serialize(), function(str) {
                    str = $.trim(str);
                    if (str === '1') {
                        fun_timedown(60);

                        $(".tishi").html("<font color=\"#0E9DA9\">已经发送！</font>");
                        $(".hqyzm").attr("disabled", "disabled");
                        $(".hqyzm").css({"color": "#000", "background-color": "#999"});
                        setTimeout(function() {
                            $(".tishi").html("");
                        }, 3000);

                    } else {
                        $(".tishi").html("<font color=\"red\">发送失败！</font>");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                })
            })
            //60秒倒计时
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
    </body>
</html>
