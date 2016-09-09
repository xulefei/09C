<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="frontend/css/user.css" rel="stylesheet" type="text/css" />

@include('home.Public.header')
</head>
<body>
<!--顶部导航-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--顶部导航end-->
<!--导航栏开始-->
<!--导航栏结束-->
<div class="zhutineirong">
<!--左边栏开始-->
@include('home.Public.left_nav')
<!--左边栏结束-->  
<!--右边栏开始-->
  <div class="right">
    <div class="right_top2">
      <div class="tittle_02kj">借款统计</div>
      <div class="jiedaizhanghu_bottomkj">
         <ul>
           <li>你在金融宝总计借款</li>
           <li><b>元</b></li>
           <li>，总计需支付</li>
           <li><b>元</b></li>
           <li>的利息和费用</li>
         </ul>
         </div>
         <div class="jiekuantongji_kj">
           <ul>
             <li><span>逾期费用</span><b>元</b></li>
             <!--<li>提前还款毁约金<span>0.00元</span></li>-->
             <li><span>借款管理费</span><b>元</b></li>
             <li><span>还款管理费</span><b>元</b></li>
             <li><span>总计</span><b>0.00元</b></li>
                           <div class="clear"></div>
           </ul>
         </div>
         <div class="jiedaizhanghu_bottomkj">
         <ul>
           <li>你在金融宝的借款已还总金额为</li>
           <li><b>元</b></li>
         </ul>
         </div>
         <div class="jiekuantongji_kj">
           <ul>
             <li><span>已还本金</span><b>元</b></li>
             <li><span>已交逾期费用</span><b>元</b></li>
            <!-- <li>已交提前还款毁约金<span>0.00元</span></li>-->
             <li><span>已交借款管理费</span><b>元</b></li>
             <li><span>已交还款管理费</span><b>元</b></li>
             <li><span>总计</span><b>元</b></li>
           </ul>
         </div>
             <div class="clear"></div>
    </div>
  </div>
<!--右边栏结束-->
                <div class="clear"></div>
</div>
<include file="Public:footer" />
<script type="text/javascript">
  $(document).ready(function(){
   	$(".zj").click(function (){
		$(this).next(".aaa").toggle();						 
	})  
	
  });
</script>
</body>
</html>
