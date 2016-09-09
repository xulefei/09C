<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>金融宝</title>
        <!--头部开始-->
        @include('home.Public.header')
        <!--头部结束-->
        <link href="http://localhost/diandian/public/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/diandian/public/frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/diandian/public/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <script src="http://localhost/diandian/public/frontend/js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--下一步开始-->
        <div class="zhaohuimima_007">
          <div class="fasongzhi">
            <ul>

              <li><span></span></li>
            </ul>
          </div>
       <form action="{{url('index/emailok')}}" method="post"  id="zhcode">
        <div class="biaodan_009">
          <ul>
            <li>
               {{--<h1>{{$mail}}</h1>--}}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" id="hid">
                <input type="hidden" name="email" value="{{$mail}}">
                <span><b>*</b>验证码</span><input  class="yanzhengma_01" name="code" maxlength="6" placeholder="请输入验证码"/>
			</li>
            <!--<li><span>&nbsp;</span>没收到短信?&nbsp;<b id="num">30</b>秒重新获取</li>-->
            <li><span>&nbsp;</span><input type="submit" value="提&nbsp;&nbsp;交" class="jrb_but02" /><font class="tishi"></font></li>
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
