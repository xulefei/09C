<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
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
                <div class="right_top2">
                    <div class="jiedaizhanghu_bottomkj">
                        <ul>
                            <li>投资统计</li>
                        </ul>
                    </div>
                    <div class="jiekuantongji_kj">
                        <ul>
                            <li><span>投标总次数</span><b> 次</b></li>
                            <li><span>中标总次数</span><b> 次</b></li>
                            <li><span>中标率</span><b>< %</b></li>
                            <li><span>投标总金额</span><b> 元</b></li>
                            <li><span>中标总金额</span><b> 元</b></li>
                            <li><span>资金利用率</span><b> %</b></li>
                            <li><span>获得利息总金额</span><b> 元</b></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!--右边栏结束-->
            <div class="clear"></div>
        </div>
        @include('home.Public.footer')
    </body>
</html>
