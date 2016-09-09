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
    <div class="chongzhi_007"</div>
    <form action="{{url('index/reset')}}" method="post">
        <div class="biaodan_007">
           <h3><font color="#adff2f">修改成功</font></h3>
            <a href="{{url('index/url')}}">登陆</a>
            <div class="clear"></div>
        </div>
    </form>

    <div class="clear"></div>
</div>
<!--尾部开始-->
@include('home.Public.footer')
        <!--尾部结束-->
<script type="text/javascript">
</script>
</body>
</html>
