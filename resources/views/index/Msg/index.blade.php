<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

    @include('home.Public.header')
<link href="frontend/css/user.css" type="text/css"  rel="stylesheet" />

</head>
<body>
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--导航栏开始-->

<!--导航栏结束-->
<div class="zhutineirong">
<!--左边栏开始-->
  @include('home.Public.left_nav')
<!--左边栏结束-->  
<div class="right">
<!--右边栏开始-->
<div class="tab">
  <a href="#"><div class="cur" id="tz">通知</div></a><!--<a href="#"><div id="sx">私信</div></a>-->
                             <div class="clear"></div>
</div>
<div class="right_top2" id="right_top1">
<foreach name="data_list" item="v">
  <div class="tzright">
  <div class="tzright_top"><p></p></div>
  <div class="content"></span></div>
  <div style="padding: 10px 0;border-bottom: 1px solid #eee;"></div>
  </div>
  </foreach>
  <div style="float:left;margin-left: 20px;margin-top: 15px;"></div>
  <div class="clear"></div>
</div>
<div class="right_top2" id="right_top2" style="display:none">
  <div class="tzright">
  <div class="tzright_top">私信内容<p></p></div>
  <div class="content"></span></div>
  </div>
                <div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
@include('home.Public.footer')


</body>
</html>
