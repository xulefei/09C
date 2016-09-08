<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <head>
            <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
            <script src="/frontend/js/jquery.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $(".zj").click(function() {
                        $(this).next(".aaa").toggle();
                    })

                });
            </script>
            @include('home.Public.header')
        </head>
        <body>
            <!--顶部导航-->
            @include('home.Public.main_nav')
            <div class="yinying_jrb2"></div>
            <!--顶部导航end-->
            <div class="zhutineirong">
                <!--左边栏开始-->
                @include('home.Public.left_nav')
                <!--左边栏结束-->  
                <!--右边栏开始-->
                <div class="right">
                    <div class="right_top4">
                        <div class="zongjine_lkj">
                            投资已赚金额<p>0.00元</p>
                        </div>

                        <div class="zongjine_rkj">
                            <ul>
                                <li>已还清总金额<p>元</p></li>
                                <li>投资总金额<p>元</p></li>
                                <li style="float:right; margin:0;"><a href="" class="jrb_but02">我要投资</a></li>
                            </ul>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="right_bottom3">
                        <div class="tab">
                            <div class="cur" id="qb"><a href="">全部的投资</a></div>
                            <div class="cur" id="sx"><a href="">等待中的投资</a></div>
                            <div class="cur" id="touzi_01"><a href="">未选中的投资</a></div>
                            <div class="cur" id="touzi_02"><a href="">收益中的投资</a></div>
                            <div class="cur" id="touzi_03"><a href="">已完成的投资</a></div>
                            <div class="clear"></div>
                        </div>

                        <div class="right_top2" id="right_top11">
                            <div class="jiedaizhanghu_top2">
                                <span>总金额：<b>{$bid_total|num_format}</b>&nbsp;元</span>
                            </div>
                            <div class="touzi_liebiao_little">
                                <table class="touzi_liebiao_conlittle">
                                    <thead>
                                        <tr>
                                            <th>投资项目</th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>年利率</th>
                                            <th>收款期限</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                                <tr>
                                                    <td class="tl_left">
                                                        <!--<if condition="($vo.type eq 2)"><img src="__PUBLIC__//frontend/images/shiwu_tubiao.png" /></if>-->
                                                        
                                <img src="/frontend/images/shiwu_tubiao.png"  title="有抵押信用标" alt="有抵押信用标"  class="png_fix"/>
                                
                                <img src="/frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                
                                <img src="/frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                                        <span><a href=""></a></span>
                                                    </td>
                                                    <td></td>
                                                    <td> 元</td>
                                                    <td>%</td>
                                                    <td>个月</td>
                                                    <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                                                </tr>
                                            </volist>
                                            <tr>
                                                <td colspan="6">
                                                <!--翻页-->
                                                  <div class="fanye_jrb">
                                                    <div class="fanye_fr">
                                                       
                                                    <!--<a href="#" class="fanye_icon01">上一页</a><a href="#" class="fanye_icon03 png_fix">1</a><a href="#" class="fanye_icon02 png_fix">2</a><a href="#" class="fanye_icon01 png_fix">下一页</a>-->
                                                    </div>
                                                  </div>
                                                <!--翻页-->
                                                </td>
                                            </tr>
                                            <else/>
                                            <tr>
                                                <td colspan="6"><div align="center">暂无记录</div></td>
                                            </tr>
                                        </if>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--右边栏结束-->
                <div class="clear"></div>       
            </div>
            @include('home.Public.footer')
        </body>
</html>
