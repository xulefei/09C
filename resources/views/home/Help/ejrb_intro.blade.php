<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        @include('home.Public.header')
        <link href="/frontend/css/ebao_intro.css" type="text/css"  rel="stylesheet" />
        <script>
		 	var timeTask=setInterval(function(){
		        var date=new Date();
		        var h=date.getHours();
		        var m=date.getMinutes();
		        var s=date.getSeconds();
		        if(h==1){
		            callFunction();                                                     
		        }
				setTimeout(function(){
//					 if(data == 10000){
						clearInterval(timeTask);
//				 	}
			},2000);
		    },1000);
		    function callFunction(){
		         $.post('{:U("Roll/total")}', { 
				 	
				 } );
		    }
		 </script>
        <script src="/frontend/js/jquery1.42.min.js" type="text/javascript"></script>
        <script src="/frontend/js/jquery.superslide.2.1.1.js"></script>
        
        <style>
            .box04_br .cur{
                color:red;
            }
        </style>
    </head>
    <body>
    @include('home.Public.main_nav')
        <!--头部内容结束--> 
        
        <!--轮换+收益表开始-->
        <div class="lunhuan">
    <ul class="lunhuan_pic">

        <li class="bg_05"><a href="#guanggao01"><div class="lianjie_eeb"></div></a></li>
        <li class="bg_06"><a href="#guanggao02"><div class="lianjie_eeb"></div></a></li>
        <li class="bg_07"><a href="#guanggao03"><div class="lianjie_eeb"></div></a></li>
        <li class="bg_08"><a href="#guanggao04"><div class="lianjie_eeb"></div></a></li>

    </ul>
    <div class="lunhuan_but002">
    	<ul class="png_fix"></ul>
    </div>
<script>
/*鼠标移过某个按钮 高亮显示*/
$(window).resize(function() {
	var width = $(this).width();
	//var height = $(this).height();
	$(".lunhuan_pic").width(width);
	$(".lunhuan_pic").find("li").each(function(){
		$(this).width(width);
	});
});

$(".prev,.next").hover(function(){
	alert("ddddd");
	$(this).fadeTo("show",0.7);
},function(){
	$(this).fadeTo("show",0.1);
})
$(".lunhuan").slide({ titCell:".lunhuan_but002 ul" , mainCell:".lunhuan_pic" , effect:"fold", autoPlay:true, delayTime:700 , autoPage:true });
</script>
    <!--轮换结束--> 
	</div>
        <div id="content"> 
               <div class="sy_list">
                    <ul>
                        <li class="sy_list_title png_fix"></li>
                        <li class="sy_list_lilv png_fix"></li>
                        <li class="sy_list_but"><a href="" class="eeb_tiyan_but png_fix"></a></li>
                    </ul>
                </div>
                
            <!--余额宝介绍开始-->
            <div class="eeb_jieshao">
                <h1>E额宝 保本理财增值服务 保本 高息 随时存取</h1>
                <p>E额宝是金融宝互动理财平台与工商银行多种理财产品结合推出的最新理财增值服务，E额宝为用户提供其他理财产品无法达到的"保本，高息，随时存取"，让理财变得轻松安全。</p>
            </div>
            <!--余额宝介绍结束--> 
            <!--余额宝受益开始-->
            <div class="eeb_sy" id="guanggao02">
                <div class="eeb_sy_list_left">
                    <h1>E额宝每天都有受益</h1>
                    <div class="eeb_sy_list_info" style="display:block;">
                        <ul>
                            <li>每日年化收益率</li>
                            <li>%</li>
                        </ul>
                    </div>
                    <div class="eeb_sy_list_con">
                        <ul>
                            <li><a href="#"><span style="height:38px;"></span></a></li>
                            <li><a href="#"><span style="height:37px;"></span></a></li>
                            <li><a href="#"><span style="height:36px;"></span></a></li>
                            <li><a href="#"><span style="height:35px;"></span></a></li>
                            <li><a href="#"><span style="height:34px;"></span></a></li>
                            <li><a href="#"><span style="height:35px;"></span></a></li>
                            <li><a href="#"><span style="height:31px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                            <li><a href="#"><span style="height:29px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                            <li><a href="#"><span style="height:32px;"></span></a></li>
                            <li><a href="#"><span style="height:33px;"></span></a></li>
                            <li><a href="#"><span style="height:34px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                            <li><a href="#"><span style="height:32px;"></span></a></li>
                            <li><a href="#"><span style="height:35px;"></span></a></li>
                            <li><a href="#"><span style="height:33px;"></span></a></li>
                            <li><a href="#"><span style="height:35px;"></span></a></li>
                            <li><a href="#"><span style="height:34px;"></span></a></li>
                            <li><a href="#"><span style="height:32px;"></span></a></li>
                            <li><a href="#"><span style="height:33px;"></span></a></li>
                            <li><a href="#"><span style="height:31px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                            <li><a href="#"><span style="height:33px;"></span></a></li>
                            <li><a href="#"><span style="height:32px;"></span></a></li>
                            <li><a href="#"><span style="height:33px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                            <li><a href="#"><span style="height:30px;"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="eeb_sy_list_right">
                    <h2>E额宝每天的收益是怎么计算的？</h2>
                    <p>每日收益计算公式：（E额宝确认金额x当日利率÷年份天数）=每日收益</p>
                    <h2>我什么时候能看到E额宝收益到账？</h2>
                    <p>转入E额宝的金额会在二个工作日内得到确认（最短1小时，最长48小时）并开始享受收益；E额宝每日兑付收益，收益直接计入账户；已确认部分的金额在周末和节假日都有收益。</p>
                    <h2>E额宝的收益结算有什么规则？</h2>
                    <p>E额宝的收益每日结算，每天凌晨01:00左右前一天的收益到账。可以随时转出，实时到达金融宝账户余额，转出当天没有收益。金融宝账户余额可使用金融宝平台我要提现功能当日立即提出到银行。</p>
                    <span><a href="#sy_eebao">查看更多收益说明»</a></span> </div>
                <div class="clear"></div>
            </div>
            <!--余额宝受益结束--> 
            <!--余额宝保本开始-->
            <div class="eeb_baoben" id="guanggao04">
                <h1>保本</h1>
                <p>现金银行与保险推出的理财产品均属于不保本理财，也就是利率不固定，所购买的产品存在本金亏损情况，而E额宝 提供本金保障，用户利率和本金都能安全随时赎回。<span><a href="#bb_eebao">更多说明»</a></span></p>
            </div>
            <!--余额宝保本结束--> 
            <!--余额宝高息开始-->
            <div class="eeb_gaoxi" id="guanggao01">
                <h1>高息</h1>
                <p>E额宝是金融宝互动理财平台与工商银行多种理财产品结合推出 的最新理财增值服务，不仅本金更有保障,利率也比同类产品更稳,更高。 <span><a href="{:U("Help/find7")}#gx_eebao">更多说明»</a></span></p>
            </div>
            <!--余额宝高息结束-->
            <div class="clear"></div>
            <!--余额宝流程开始-->
            <div class="eeb_liucheng">
                <h1>e额宝流程</h1>
            </div>
            <!--余额宝流程结束--> 
            <!--余额宝常见问题开始-->
            <div class="eeb_cjwt" id="guanggao03">
                <h1>e额宝常见问题</h1>
                <h2>E额宝与银行，保险公司的理财产品有什么区别呢?有什么优势?</h2>
                <p><span>快速</span>随时存取，无定期限制，每日计息。<span>利率固定</span>一个产品长期并利率固定，不用担心像银行，保险公司推出的理财产品，可能到期后就不再推出。<span>保本</span>现金银行与保险推出的理财产品均属于不保本理财，也就是利率不固定，所购买的产品存在本金亏损情况，而E额宝 提供本金保障用户利率和本金都能安全随时赎回。</p>
                <h2>E额宝与借贷公司 的有什么区别?</h2>
                <p>借贷公司风险难以预测，随时会出现坏账而导致本金无法赎回。而E额宝是银行多种投资产品的组合打包，再由金融宝平台进行多种稳定投资间的收益平衡，风险被多种理财产品相互抵消，本金保障利率固定。借贷公司 投资容易收回难，由于借贷公司投资周转耗时耗力，无法做到随时随地按约定结算给投资人，往往拖欠逾期，而E额宝 全程可手机与电脑 随时随地查看当日收益，随时随地选择转入与转出，过程透明高效快速。</p>
                <h2>E额宝是否有其他手续费用？</h2>
                <p>E额宝目前是不收取任何手续费的。</p>
                <span class="cjwt_gdsm"><a href="{:U("Help/find7")}#cjwt_eebao">查看更多问题»</a></span> </div>
            <!--余额宝常见问题结束--> 
        </div>
    @include('home.Public.footer')

        
        <script type="text/javascript">
            var sson = ''
            $(function(){
               if(sson){
                   location.href="{:U('Fund/asset')}";
               }
            });
        </script>
    </body>
</html>
