<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>我要借款</title>
@include('home.Public.header')
<link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
<link href="frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />

<script src="frontend/js/jquery.js" type="text/javascript"> </script>
<script src="frontend/js/reg.js" type="text/javascript"> </script>
</head>
<style type="text/css">
.you_class{ display:none}
.diya_con{display:none;}
 
</style>
 
<body>
<!--顶部导航-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--顶部导航end-->
<script type="text/javascript">
  $(document).ready(function(){
$("#wu").click(function(){
	$(".you_class").hide();
	$(".wu_class").show();
	$(".diya_con").hide();
	}) 
	$("#you").click(function(){
		$(".you_class").show();
		$(".wu_class").hide();
		$(".diya_con").show();
		})
	$("#fuwuxieyi").click(function(){
		$(".fuwuxieyi2").toggle();
		})
  });

</script>
<div id="content"> 
<form  id="myfrom"  action="" method="post"   >
  <!--我要借款开始-->
  <div class="wyjk">
    <h1>我要借款<span style="float:right; font-size:18px;">信用额度：<b style="color:#3d89b4;"></b>&nbsp;元</span></h1>
    <div class="wyjk_con">
    	      <p>
        <label for="username">抵押方式</label>
        <span>
        <input type="radio" id="wu" class="diya_fangshi" name="loca_repay_pledge"  value="1"  style="border:0" checked="checked"/>无抵押</span> <span>
       <input type="radio"   disabled="disabled"  id="you" class="diya_fangshi" name="loca_repay_pledge"  value="2" style="border:0"/>有抵押</span><a href="{:U('Authhome/index')}" target="_blank" style=" text-decoration:none; color:#3d89b4;">（需要先通过房产认证或者购车认证才能进行有抵押借款）</a>
      <p>
      <div class="diya_con">
        <ul>
			<volist name="authInfo" id="vo" >
				<li>
			    	 <input type="checkbox"  value=""   name="authId[]"   class="diya_xx"/>
			   		 <span class="diya_leixing">房产<else/>车子</span>
				</li>
			</volist>
        </ul>
      </div>
      <p>
        <label for="username" >借款标题</label>
        <input type="text"  name="loca_title" id="loca_title" class="wyjk_title" />
        <span class="yz_info" id="checkTitle">输入标题5到40之间的汉字</span>
      <p>
		<p class="jiekuanneirong_c">
        <label for="username" >借款内容</label>
		<textarea cols="60" rows="10" name="loca_content" id="loca_content" class="wyjk_title2"></textarea>
        <span class="yz_info" id="checkContent">不能小于100字</span>
      <p>
	   <p class="wu_class">
	        <label for="username">借款金额</label>
	        <input type="text" class="wyjk_money" name="loca_money" id="loca_money"  />
	        <span class="yz_info"  id="checkMoney" >金额为100的倍数,不能大于您的信用额度&nbsp;<b style="color:#3d89b4;"></b>&nbsp;元</span>
			<input  type="hidden" value="" id="creditScore" />
	      </p>
	    <p class="you_class">
	        <label for="username">抵押金额</label>
	        <input type="text" class="wyjk_money" name="loca_money2" id="loca_money2" />
	        <span class="yz_info" id="checkMoney2">输入抵押的金额,金额为100的倍数</span>
	   <p>
      <p>
        <label for="username">借款有效期</label>
 		 <select class="huankuan_fangshi" id="loca_days" name="loca_days">
	         <option value="24">请选择</option>
			 
	          <option value="">{$i}天</option>
	     </select>
        <span class="yz_info" id="checkDays">有效数字 单位为天数</span>
      <p>
      	
		
      <p>
        <label for="username">还款期限</label>
        <select class="huankuan_qixian" name="loca_expires" id="qixian">
         <option value="23">请选择</option>
          
            <option value="">个月</option>
          
        </select>
        <span class="yz_info" id="fangshi2_ok">还款的期限,不能超过6个月</span>
      <p>
      <p>
        <label for="username">还款方式</label>
	        <select class="huankuan_fangshi" id="fangshi" name="loca_repay_type">
	         <option value="22">请选择</option>
	          <option value="1">按月分期还款</option>
	        </select>
        <span class="yz_info" id="fangshi_ok">还款的方式</span>
      <p>

      <div class="wyjk_xy_con"> <span class="xy_gxk">
        <input type="checkbox"   id="agree" style="border:0"/>
        </span> 我已经阅读并同意遵守<a href="#fuwuxieyi" id="fuwuxieyi">《金融宝全民理财互动平台服务协议》</a>
	</div>
      <div class="fuwuxieyi2" style="display:none"><iframe src="" style="width:500px; height:300px; border: solid 1px #e6e6e6;"></iframe></div> 
      <div class="wyjk_but_con" >
      <input type="submit" id="submitForm"  value="提交借款"  class="jrb_but01" style="padding:0;">
	  <span class="yz_info" id="sForm" style="margin-left:20px; line-height:30px; color:#a9a9a9;"><img src="frontend/images/yz_info_bg.gif" style="vertical-align:middle"  title="提示"/>&nbsp;请先同意金融宝协议</span>
	  </div>
	  <div  id="sForm" style="float:left;"></div>
    </div>
  </div>
  <!--我要借款结束--> 
  </form>
</div>
@include('home.Public.footer')

</body>
</html>
