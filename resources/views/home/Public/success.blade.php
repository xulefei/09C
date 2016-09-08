<!DOCTYPE HTML>
<html>
    <head>
        <title>成功页面</title>
        <link href="/frontend/css/base.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/eebao.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    @include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
        <!--导航栏开始-->
        <div class="eeb_jisuanqi">
        <div class="jsq_top png_fix">
        <div class="jsq_topl"><img src="/frontend/images/tips_icon.png" class="png_fix" style=" vertical-align:middle;" title="温馨提示"/>&nbsp;温馨提示</div>
                                   <div class="clear"></div>
      </div>
        <div class="jsq_bottom2">
          <div class="duicuo">
            <dl>
                <dt><img src="/frontend/images/ico/check.png" class="png_fix" style=" margin-right:10px; vertical-align:middle" title="成功"/><span style="color:green">{$message}</span></dt>
                <!--<dd>页面自动 <a id="href" href="<?php echo($jumpUrl); ?>" style="color:#F00">&nbsp;跳转&nbsp;</a>,等待时间：&nbsp;<b id="wait"><?php echo($waitSecond); ?></b></dd>-->
                <dd><img src="/frontend/images/fanhui_icon.png" class="png_fix"  style=" vertical-align:middle;" title="返回"/><a id="href" href="<?php echo($jumpUrl); ?>" style=" margin-left:10px; color:#3d89b4;">返回上一页</a></dd>
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