<!DOCTYPE html>
<html>
    <head>
    @include('home.Public.header')
    <link href="/frontend/css/index.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!--头部开始-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--头部内容结束-->
<div id="content">
    @include('home.Public.left_nav')
    <div class="help_right_con">
        <div class="t_nav">
            
            <a href="news-.html">上一篇</a>
            <a href="javascript:void(0);">上一篇</a>
            <a href="news-.html">下一篇</a
            <a href="javascript:void(0);">下一篇</a>
        </div>
        <h1 class="c_titile"></h1>
        <p class="box_wz">发布时间：<span>编辑：</span></p>
    </div>
    <div class="clear"></div>
</div>
<!--底部内容开始-->
<@include('home.Public.footer')
<!--底部内容结束-->
</body>
</html>
