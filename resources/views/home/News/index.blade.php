<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        @include('home.Public.header')
        <link href="/frontend/css/index.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
        <link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!--头部开始-->
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--头部内容结束-->
        <div id="content">
            @include('home.Public.left_nav')
            <div class="help_right_con">
                <h1>新闻中心</h1>
                <table class="news_liebiao">
                    <tr><td colspan="6">暂无新闻资讯信息</td></tr>  
                    <voList name="data_list" id="vo"> 
                        <tr>
                            <td><img src="/frontend/images/ico/news.png" title="新闻" alt="新闻" /><a href="news-.html" target="_blank" title=""></a></td>
                            <td class="day"></td>
                        </tr>
                    </volist>
                </table>
                <div class="fanye_xw">
                
                </div>
                    <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--底部内容开始-->
        @include('home.Public.footer')
        <!--底部内容结束-->
    </body>
</html>
