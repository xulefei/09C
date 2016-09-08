<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    @include('home.Public.header')
<title>新手指引-桂林金融宝众投借贷平台</title>
<link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
<link href="/frontend/css/base.css" rel="stylesheet" type="text/css" />
<link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
<script src="/frontend/js/jquery.js" type="text/javascript"> </script>

</head>

<body>
@include('home.Public.main_nav')
<!--头部开始-->
<div class="yinying_jrb2"></div>
<!--头部结束-->
<!--导航栏开始-->
<div class="xinshouzhiyin_daohanglan">
  <div class="xinshouzhiyin_first"><img src="/frontend/images/title01_bg.gif" title="新手指引"/>&nbsp;新手指引</div>
</div>
<!--导航栏结束-->

<div class="right_bottom007">
      <div class="tab">
  <div class="cur_xs" id="tz"><a href="#">借款引导</a></div><div id="sx"><a href="#">投资引导</a></div><div id="ts"><a href="#">注意事项</a></div>
           <div class="clear"></div>
</div>

      <div class="xinshouzhiyin_woyaolicai_01" id="xinshouzhiyin_woyaolicai_01">
        <!--借款引导开始-->
        <div class="liucheng_jk">
          <dl>
            <dt class="png_fix">
              <ul>
                <li><a href="#diyibu_jk" class="icon_01 png_fix"></a></li>
                <li><a href="#dierbu_jk" class="icon_02 png_fix"></a></li>
                <li><a href="#disanbu_jk" class="icon_03 png_fix"></a></li>
                <li><a href="#disibu_jk" class="icon_04 png_fix"></a></li>
                <li><a href="#diwubu_jk" class="icon_05 png_fix"></a></li>
                <li><a href="#diliubu_jk" class="icon_06 png_fix"></a></li>
              </ul>
            </dt>
            <dd>1.注册金融宝账户</dd>
            <dd>2.通过必要认证</dd>
            <dd>3.发起借款申请</dd>
            <dd>4.通过审核后开始筹标</dd>
            <dd>5.选择合适投资人，达成借款</dd>
            <dd>6.提取借款，每月按时还款</dd>
          </dl>
                          <div class="clear"></div>
        </div>
        
        <div class="liucheng_nr">
          <ul>
            <li class="xuxian_yd" id="diyibu_jk"><span>NO.1&nbsp;&nbsp;</span>注册金融宝账户——【注册】——【填写注册信息】——【提交】——【登陆】；</li>
            <li><img src="/frontend/images/buzhou/zc_01.jpg" title="注册金融宝"/></li>
            <li><img src="/frontend/images/buzhou/zc_02.jpg" title="注册金融宝"/></li>
            <li><img src="/frontend/images/buzhou/denglu.jpg" title="注册金融宝"/></li>
            <li class="xuxian_yd" id="dierbu_jk"><span>NO.2&nbsp;&nbsp;</span>填写基本资料——【我的金融宝】——【账户管理】——【个人资料中心】——【修改信息】——【提交】；</li>
            <li><img src="/frontend/images/buzhou/wdjrb_01.jpg" title="进入我的金融宝"/></li>
            <li><img src="/frontend/images/buzhou/grzl_01.jpg" title="修改个人资料"/></li>
            <li class="xuxian_yd"><span>NO.3&nbsp;&nbsp;</span>上传必要信用认证材料（身份认证、工作认证、银行信用报告认证），后台审核通过后，信用总分（等级）和信用额度将会相应增加（认证项目越多，信用额度越高）。然后进行安全设置。——【账户管理】——【申请认证】——【去认证】——【填写信息】——【选择文件】——【上传】——【安全设置】;</li>
            <li><img src="/frontend/images/buzhou/sqrz_01.jpg" title="进行认证"/></li>
            <li><img src="/frontend/images/buzhou/sqrz_02.jpg" title="上传认证文件"/></li>
            <li><img src="/frontend/images/buzhou/anquanshezhi.jpg" title="上传认证文件"/></li>
            <li class="xuxian_yd" id="disanbu_jk"><span>NO.4&nbsp;&nbsp;</span>发起借款申请——【贷款互动中心】——【我要借款】——【填写借款信息】——【提交借款】，随时可以查看审核状态——【借贷管理】——【我的借款】——【申请中的借款】；</li>
            <li><img src="/frontend/images/buzhou/dkhd_jk01.jpg" title="进入贷款互动中心"/></li>
            <li><img src="/frontend/images/buzhou/wyjk_01.jpg" title="填写借款信息"/></li>
            <li><img src="/frontend/images/buzhou/wdjk_fb01.jpg" title="查看审核状态"/></li>
            <li class="xuxian_yd" id="disibu_jk"><span>NO.5&nbsp;&nbsp;</span>通过审核后开始筹标，可随时查看筹标进度——【借贷管理】——【我的借款】——【申请中的借款】——【点击查看】</li>
            <li><img src="/frontend/images/buzhou/wdjk_fb01.jpg" title="查看筹标进度"/></li>
            <li><img src="/frontend/images/buzhou/hkz_01.jpg"  title="查看筹标进度"/></li>
            <li class="xuxian_yd" id="diwubu_jk"><span>NO.6&nbsp;&nbsp;</span>满标或者超标后，选择合适投资人，达成借款——【借贷管理】——【我的借款】——【收到的借款】——【勾选合适的投资人】——【确认借款】；</li>
            <li><img src="/frontend/images/buzhou/wdjk_sd01.jpg" style="border:solid 5px #3d89b4" title="选择合适投资人"/></li>
            <li class="xuxian_yd" id="diliubu_jk"><span>NO.7&nbsp;&nbsp;</span>提取借款——【资金管理】——【提现】——【添加银行卡】——【填写银行卡信息】——【提现】；</li>
            <li><img src="/frontend/images/buzhou/tx_01.jpg"  title="添加银行卡"/></li>
            <li><img src="/frontend/images/buzhou/tx_yhk01.jpg"  title="填写银行卡信息"/></li>
            <li class="xuxian_yd" ><span>NO.8&nbsp;&nbsp;</span>每月按时还款——【借贷管理】——【我的借款】——【还款中的借款】——【查看】——【还款】；</li>
            <li><img src="/frontend/images/buzhou/wdjk_hk01.jpg"  title="查看借款"/></li>
            <li><img src="/frontend/images/buzhou/hk_01.jpg"  title="还款"/></li>
          </ul>
        </div>
        <!--借款引导结束-->
      </div>
                               <div class="clear"></div>
                               
                               
                               
                               
                               
                               
      <div class="xinshouzhiyin_woyaolicai_01" id="xinshouzhiyin_woyaojiekuan_01" style="display:none">
        <!--投资引导开始-->
        <div class="liucheng_jk">
          <dl>
            <dt class="png_fix">
              <ul>
                <li><a href="#diyibu_tz" class="icon_01 png_fix"></a></li>
                <li><a href="#dierbu_tz" class="icon_02 png_fix"></a></li>
                <li><a href="#disanbu_tz" class="icon_07 png_fix"></a></li>
                <li><a href="#disibu_tz" class="icon_08 png_fix"></a></li>
                <li><a href="#diwubu_tz" class="icon_09 png_fix"></a></li>
                <li><a href="#diliubu_tz" class="icon_10 png_fix"></a></li>
              </ul>
            </dt>
            <dd>1.注册金融宝账户</dd>
            <dd>2.通过身份认证</dd>
            <dd>3.账户充值</dd>
            <dd>4.挑选投资项目</dd>
            <dd>5.等待借款人确认</dd>
            <dd>6.轻松赚取收益</dd>
          </dl>
                          <div class="clear"></div>
        </div>
        
        <div class="liucheng_nr">
          <ul>
            <li class="xuxian_yd" id="diyibu_tz"><span>NO.1&nbsp;&nbsp;</span>注册金融宝账户——【注册】——【填写注册信息】——【提交】——【登陆】；</li>
            <li><img src="/frontend/images/buzhou/zc_01.jpg"   title="注册"/></li>
            <li><img src="/frontend/images/buzhou/zc_02.jpg" title="注册金融宝"/></li>
            <li><img src="/frontend/images/buzhou/denglu.jpg" title="注册金融宝"/></li>
            <li class="xuxian_yd" id="dierbu_tz"><span>NO.2&nbsp;&nbsp;</span>填写基本资料——【我的金融宝】——【账户管理】——【个人资料中心】——【修改信息】——【提交】；</li>
            <li><img src="/frontend/images/buzhou/wdjrb_01.jpg"  title="进入我的金融宝"/></li>
            <li><img src="/frontend/images/buzhou/grzl_01.jpg"  title="修改个人资料"/></li>
            <li class="xuxian_yd" id="disanbu_tz"><span>NO.3&nbsp;&nbsp;</span>账户充值——【资金管理】——【充值】——【填写充值信息】——【充值】；</li>
            <li><img src="/frontend/images/buzhou/cz_01.jpg"  title="账户充值"/></li>
            <li class="xuxian_yd" id="disibu_tz"><span>NO.4&nbsp;&nbsp;</span>挑选投资项目——【贷款互动中心】——【挑选投资项目】——【查看】；</li>
            <li><img src="/frontend/images/buzhou/dkhd_ck01.jpg"  title="挑选投资项目"/></li>
            <li class="xuxian_yd"><span>NO.5&nbsp;&nbsp;</span>投标——【输入利率和投标金额】——【投标】，投标后可查看更详细用户信息并有2个小时可以考虑是否放弃投标，若2小时过后没有放弃投标，系统则自动默认为愿意投标——【放弃投标】；</li>
            <li><img src="/frontend/images/buzhou/tb_01.jpg"  title="投标"/></li>
            <li><img src="/frontend/images/buzhou/fqtb_01.jpg"  title="等待时间"/></li>
            <li class="xuxian_yd" id="diwubu_tz"><span>NO.6&nbsp;&nbsp;</span>等待借款人确认——【投资管理】——【我的投资】——【等待的投资】；</li>
            <li><img src="/frontend/images/buzhou/wdtz_dd01.jpg"  title="等待借款人确认"/></li>
            <li class="xuxian_yd" id="diliubu_tz"><span>NO.7&nbsp;&nbsp;</span>轻松赚取收益——【理财管理】——【我的投资】——【收益中的投资】；</li>
            <li><img src="/frontend/images/buzhou/wdtz_sy01.jpg"  title="查看收益"/></li>
          </ul>
        </div>
        <!--投资引导结束-->
      </div>
      
                                   <div class="clear"></div>
      
      
      
      
      <div class="xinshouzhiyin_woyaolicai_01" id="xinshouzhiyin_anquanbaozhang_01" style="display:none">
        <!--注意事项开始-->
        <div class="zysx_con">
        <span>账户安全需要网站和用户的共同努力。在此，我们提倡各位用户在网站使用过程中，注意以下几点：</span>        
        <div class="zysx_con_xq">
        <h2>牢记金融宝官方网址：www.jrbbank.com</h2>
        <p>不要点击来历不明的链接访问金融宝，谨防网站钓鱼和欺诈。我们建议您将金融宝官方网址加入浏览器收藏夹，以方便您的下次登录。</p>
        </div>
        <div class="zysx_con_xq">
        <h2>为您的金融宝账户设置高强度的登录密码</h2>
        <p>您在密码设置时，最好使用数字和字母混合，不要使用纯数字或纯字母，且密码长度要在6位以上。</p>
        </div>
        <div class="zysx_con_xq">
        <h2>注重电脑运行环境的安全</h2>
        <p>及时为您的电脑进行系统更新、安装安全补丁，以防系统漏洞被黑客利用。为您的电脑安装杀毒软件或防火墙，并定期为电脑进行查毒、杀毒。</p>
        </div>
        <div class="zysx_con_xq">
        <h2>时刻注意保护个人隐私</h2>
        <p>用户在平台上交流的过程中，不要向其他用户透露自己真实姓名与住址等，以防个人信息被盗取造成损失。</p>
        </div>
        <div class="zysx_con_xq">
        <h2>避免私下交易</h2>
        <p>金融宝建议用户避免私下交易。私下交易的约束力极低，造成逾期的风险非常高，同时您的个人信息将有可能被泄漏，存在遭遇诈骗甚至受到严重犯罪侵害的隐患。</p>
        </div>
        </div>
        <!--注意事项结束-->
      </div>
       
                                <div class="clear"></div>
       
</div>


                                <div class="clear"></div>

@include('home.Public.footer')
<script type="text/javascript">
$(function(){
	$("#sx").click(function(){
		$("#tz").removeClass('cur_xs');
		$("#ts").removeClass('cur_xs');
		$("#sx").addClass('cur_xs');
		$("#xinshouzhiyin_woyaolicai_01").hide();
		$("#xinshouzhiyin_anquanbaozhang_01").hide();
		$("#xinshouzhiyin_woyaojiekuan_01").show();
		})
	$("#ts").click(function(){
		$("#tz").removeClass('cur_xs');
		$("#sx").removeClass('cur_xs');
		$("#ts").addClass('cur_xs');
		$("#xinshouzhiyin_woyaolicai_01").hide();
		$("#xinshouzhiyin_woyaojiekuan_01").hide();
		$("#xinshouzhiyin_anquanbaozhang_01").show();
		})
	$("#tz").click(function(){
		$("#sx").removeClass('cur_xs');
		$("#ts").removeClass('cur_xs');
		$("#tz").addClass('cur_xs');
		$("#xinshouzhiyin_anquanbaozhang_01").hide();
		$("#xinshouzhiyin_woyaojiekuan_01").hide();
		$("#xinshouzhiyin_woyaolicai_01").show();
		})
	})
</script>


 

<!--尾部结束-->
<!--尾部结束-->

</body>
</html>
