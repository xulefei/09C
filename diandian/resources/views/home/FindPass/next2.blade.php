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
            <div class="chongzhi_007">重置密码:请输入您的新密码</div>
            <form action="" method="post">
                <div class="biaodan_007">
                    <ul>
                        <li><span><b>*</b>新密码</span><input class="biaodan_03" name="pass" type="password" /></li>
                        <li><span><b>*</b>确认新密码</span><input class="biaodan_03" name="rpass" type="password" /><span style=" float:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>  
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
        <script type="text/javascript">
        </script>
    </body>
</html>
