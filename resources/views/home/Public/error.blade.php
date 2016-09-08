<!DOCTYPE HTML>
<html>
    <head>
        <title>失败页面</title>
        <link href="/frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/eebao.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    @include('home.Public.main_nav')
    <div class="yinying_jrb2"></div>
      <!--<div class="tiaozhuan_tishi" style=" width:300px; height:100px; border:solid 1px #e6e6e6; margin:0 auto; background:#fff; margin-top:45px;">
        <ul style="margin-top:45px; margin-left:45px;">
          <li><img src="/frontend/images/ico/x.png" /><span style=" margin-left:5px; font-weight:bold;">{$error}</span></li>
          <li>页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a>,等待时间：<b id="wait"><?php echo($waitSecond); ?></b></li>
        </ul>
      </div>-->
        <!--导航栏开始-->
     <div class="eeb_jisuanqi">
        <div class="jsq_top png_fix">
        <div class="jsq_topl"><img src="/frontend/images/tips_icon.png" class="png_fix" style=" vertical-align:middle;" title="温馨提示"/>&nbsp;温馨提示</div>
                                   <div class="clear"></div>
      </div>
        <div class="jsq_bottom2">
          <div class="duicuo">
            <dl>
                <dt><img src="/frontend/images/ico/x.png" class="png_fix" style=" margin-right:10px; vertical-align:middle" title="错误"/><span></span></dt>
                <dd>页面自动 <a id="href" href="" style="color:#F00">&nbsp;跳转&nbsp;</a>,等待时间：&nbsp;<b id="wait"></b></dd>
                <dd><img src="/frontend/images/fanhui_icon.png" class="png_fix"  style=" vertical-align:middle;" title="返回"/><a id="href" href="" style=" margin-left:10px; color:#3d89b4;">立即跳转»</a></dd>
            </dl>
          </div>
        </div>
     </div>
        <script src="/frontend/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            (function() {
                var wait = document.getElementById('wait'), href = document.getElementById('href').href;
                var interval = setInterval(function() {
                    var time = --wait.innerHTML;
                    if (time <= 0) {
                        location.href = href;
                        clearInterval(interval);
                    }
                }, 1000);
            })();
        </script>

    @include('home.Public.footer')
    </body>
</html>  