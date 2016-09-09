<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="frontend/css/eebao.css" type="text/css"  rel="stylesheet" />
        <style type="text/css">
            .box04_br .cur{color:red;}
            #fundshow{ display:none;}
            #todayMoneyShow{ display:none;}
            #totalMoneyShow{ display:none;}
        </style>
    </head>
    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <div class="eeb_box_bg">
            <div class="eeb_box">
                <!--盒子一开始-->
                <div class="eeb_box01">
                    <div class="box01_l">
                        <div class="box01_l_t"><img src="__PUBLIC__/frontend/images/rili_icon.png" class="png_fix" title="可得收益"/>今日可得收益（元）</div>
                        <div class="box01_l_b"  >
                            <div class="box01_l_b"  id="todayMoneyhide"></div>
                            <div class="box01_l_b"  id="todayMoneyShow">0.00</div>
                        </div>
                    </div>
                    <div class="box01_r">
                        <div class="box01_r_t"><img src="frontend/images/rili_icon.png" class="png_fix" style="vertical-align:middle; margin-right:10px; float:left;" title="可得收益"/>
                            <span style="float:left">昨日已得收益（元）</span>
                            <a href="{:U('Help/jisuanqi')}" target="_blank">收益模拟器<img src="frontend/images/wenhao2_icon.png" class="png_fix" style="vertical-align:middle; margin-left:5px;" title="收益模拟器"/></a></div>
                        <div class="box01_r_b" id="fund"  ></div>
                        <div class="box01_r_b" id="fundshow"  ></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--盒子一结束-->
                <!--2-->
                <div class="eeb_box02">
                    <div class="box02_l">
                        <span>总金额（元）</span>
                        <p id="totalMoney"></p>
                        <p id="totalMoneyShow"></p>
                    </div>
                    <div class="box02_r">
                        <div class="box02_r_t">
                            <div class="box02_r_tr"><span>当前利率（%）</span><p></p></div>
                            <div class="box02_r_tl png_fix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>例：</b>存入10万元本金<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当月收益=<span></span>元</p></div>
                        </div>
                        <div class="box02_r_b png_fix"><a href="" class="zhuanru_eebao">转&nbsp;入</a><a href="" class="zhuanchu_eebao">转&nbsp;出</a><a href="#jihao_eebao" style="float:left; line-height:30px; color:#3d89b4; font-weight:bold;"><img src="frontend/images/guanli_icon.png" style="vertical-align:middle;"  title="查看明细"/>&nbsp;查看明细</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--2-->
                <!--3-->  
                <div class="eeb_box03">
                    <ul>
                        <li><span>本金余额（元）</span><p></p></li>
                        <li><span>利息余额（元）</span><p></p></li>
                        <li><span>累计收益（元）</span><p></p></li>
                        <li><span>近一周收益（元）</span><p></p></li>
                        <li><span>近一月收益（元）</span><p></p></li>
                    </ul>
                </div>
                <!--3-->
                <!--4-->
                <div class="eeb_box04" id="jihao_eebao">
                    <div class="box04_t">明细记录</div>
                    <div class="box04_b">
                        <form  action="" method="get">
                            <div class="box04_bl">日期：<input name="start_time" value="" type="text" class="Wdate" id="d4311" onfocus="WdatePicker();" />&nbsp;-&nbsp;<input class="Wdate" type="text" name="end_time"  value=""  id="d4312"  onFocus="WdatePicker();" /><button type="submit" class="chaxun_eebao png_fix" ></button></div>
                            <div class="box04_br"><a class="cur" href="#list">全部</a>|<a class="cur" href="#list">收益</a>|<a class="cur" href="#list">转入</a>|<a class="cur" href="#list">转出</a></div>
                        </form>
                    </div>
                </div>
                <a id="list"></a>
                <!--4-->
                <!--5-->
                <div class="eeb_box05" id="shouyi">
                    <table>
                        <thead>
                            <tr>
                                <th style=" width:150px;">记录详情</th>
                                <th>操作金额（元）</th>
                                <th>日期</th>
                    
                                <th>当日利率</th>

                                <th>本金余额</th>
                                <th>利息余额</th>
                                <th>总金额</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
d
                            
                        </tbody>     
                    </table>
                    <!--翻页-->
                    <div class="fanye_eebao">
                        <div class="fanye_fr">
                            
                        </div>
                    </div>
                    <!--翻页-->
                </div>
                <!--5-->
            </div>
            <input type="hidden" id="today" value="" />
            <input type="hidden" id="lastTody" value="" />
            <input type="hidden" id="total" value="" />
        </div>
        <include file='Public:footer'/>
        <script language="javascript" type="text/javascript" src="frontend/js/My97DatePicker/WdatePicker.js"></script>
        <script type="text/javascript">
            today = $('#todayMoneyShow').html();
            total = $('#totalMoney').html();

            base1w = 10000;
            base = 0;

            timer = setInterval(function() {
                //var todayMoney = base1w;
                //var totalMoney = base;
                $('#todayMoneyhide').html(fmoney(base1w, 2));
                $('#totalMoney').html(fmoney(base, 2));
                base1w -= (base1w / 6);
                base += (total / 150);

                if (base1w <= today) {
                    $("#todayMoneyhide").hide();
                    $("#todayMoneyShow").show();
                }
                if (base >= total) {
                    $("#fund").hide();
                    $("#fundshow").show();
                    $("#totalMoney").hide();
                    $("#totalMoneyShow").show();
                }
                if (base >= total && base1w <= 1) {
                    clearInterval(timer);
                }

            }, 20);

            function fmoney(s, n) {
                n = n > 0 && n <= 20 ? n : 2;
                s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
                var l = s.split(".")[0].split("").reverse(), r = s.split(".")[1];
                t = "";
                for (i = 0; i < l.length; i++) {
                    t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
                }
                return t.split("").reverse().join("") + "." + r;
            }
        </script>
    </body>
</html>
