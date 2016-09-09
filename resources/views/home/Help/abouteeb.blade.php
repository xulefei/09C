<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于E额宝-桂林金融宝众投借贷平台</title>
    @include('home.Public.header')
<link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
<link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
<link href="/frontend/js/jquery.js" rel="stylesheet" type="text/css" />
 </head>
<body>
<!--头部开始-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<div id="content">
    @include('home.Public.help_nav')
  <div class="help_right_con">
    <h1>E额宝介绍</h1>
    <p>E额宝是金融宝互动理财平台与工商银行多种理财产品结合推出的最新理财增值服务，E额宝为用户提供其他理财产品无法达到的"保本，高息，随时存取"，让理财变得轻松安全。</p>
    <h2 id="bb_eebao">1. 保本</h2>
    <p>现今银行与保险推出的理财产品均属于不保本理财，也就是利率不固定，所购买的产品存在本金亏损情况，而E额宝 提供本金保障，用户利率和本金都能安全随时赎回。</p>
    <h2 id="gx_eebao">2. 高息</h2>
    <p>E额宝是金融宝互动理财平台与工商银行多种理财产品结合推出的最新理财增值服务，不仅本金更有保障,利率也比同类产品更稳,更高。</p>
    <h2>3. 流程指引</h2>
    <p><img src="/frontend/images/eeb_liucheng_pic_bg1.gif" alt="" width="700" title="流程图"/></p>
    <p class="fg_line"></p>
    <h1 id="sy_eebao">收益</h1>
    <h2>1. E额宝每天的收益是怎么计算的？</h2>
    <p>E额宝每天的收益根据存入E额宝的金额与E额宝年利率确定。转入E额宝的最低金额为100元（50的倍数）。</p>
    <ul>
    	<li>每日收益计算公式：每日收益 = 存入E额宝金额*年利率/365</li>
        <li>P=A*I/365</li>
        <li>P:每日收益</li>
        <li>A:存入金融宝金额</li>
        <li>I:E额宝年利率</li>
        <li>E额宝年利率为：6.11%</li>
    </ul>
    <h2>2. 我什么时候能看到E额宝收益到账？</h2>
    <p>转入E额宝的金额会在1-2个工作日内通过审核，并在通过审核后开始享受收益；E额宝每日兑付前一天的收益，收益直接计入账户；</p>
    <h2>3. E额宝的收益结算有什么规则？</h2>
    <p>E额宝的收益每日结算，每天凌晨01:00左右发放前一天的收益。可以随时转出，实时到达金融宝账户余额，转出金额当天没有收益。金融宝账户余额可使用金融宝平台的提现功能提现到银行，需要1-2个工作日的时间进行提现审核。</p>
    <p class="fg_line"></p>
    <h1 id="cjwt_eebao">常见问题</h1>
    <h2>1.E额宝与银行，保险公司的理财产品有什么区别呢?有什么优势?</h2>
    <p>快速随时存取，无定期限制，每日计息。利率固定一个产品长期并利率固定，不用担心像银行，保险公司推出的理财产品，可能到期后就不再推出。保本现金银行与保险推出的理财产品均属于不保本理财，也就是利率不固定，所购买的产品存在本金亏损情况，而E额宝 提供本金保障用户利率和本金都能安全随时赎回。</p>
    <h2>2.E额宝与借贷公司有什么区别?</h2>
    <p>借贷公司风险难以预测，随时会出现坏账而导致本金无法赎回。而E额宝是银行多种投资产品的组合打包，再由金融宝平台进行多种稳定投资间的收益平衡，风险被多种理财产品相互抵消，本金保障利率固定。借贷公司 投资容易收回难，由于借贷公司投资周转耗时耗力，无法做到随时随地按约定结算给投资人，往往拖欠逾期，而E额宝 全程可手机与电脑 随时随地查看当日收益，随时随地选择转入与转出，过程透明高效快速。</p>
    <h2>E额宝是否有其他手续费用？</h2>
    <p>E额宝目前是不收取任何手续费的。</p>
    <p class="fg_line"></p>
  </div>
  <div class="clear"></div>
</div>
<!--底部内容开始-->
@include('home.Public.footer')
<!--底部内容结束-->
<script>
        $(document).ready(function() {
            $("#denglumima").click(function() {
                $("#denglumima02").toggle();
            })
			$("#jiaoyimima").click(function() {
                $("#jiaoyimima02").toggle();
            })
			$("#bangdingyouxiang").click(function() {
                $("#bangdingyouxiang02").toggle();
            })
			
		
        });
</script>
</body>
</html>
