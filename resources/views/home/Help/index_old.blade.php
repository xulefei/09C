<!DOCTYPE html>
<html>
    <head>
        @include('home.Public.header')
    <link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
	<link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!--头部导航-->
    @include('home.Public.main_nav')
<!--头部结束 --> 
    <!--导航栏开始-->
    <div class="daohanglan">
        <a href="index.html">首页</a> > <a href="help.html">帮助</a>
    </div>
    <!--导航栏结束-->
    <div class="zhutineirong_bz">
        <!--左边栏开始-->
        <div class="left">
            <ul>
                <volist name="news" id="vo"  >
                    <li><a href=""></a></li>
                </volist>
            </ul>
        </div>
        <!--左边栏结束-->
        <!--右边栏开始-->
        <div class="right">
            <div class="first">名词解释</div>
            <ul>
                <volist name="tNews" id="vo" key="num" >
                    <li><span class="help-title"></span>
                        <dl class="help-content">
                            <dt>
                            <dd>}</dd>

                            <li><span></span>
                                <dl>
                                    <dt>
                                    <dd></dd>
                                    </dt>
                                </dl>
                            </li>		

                            </dt>
                        </dl>
                    </li>		
                </volist>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <!--右边栏结束-->
    @include('home.Public.footer')
<script>
    $(function() {
        $('.help-content').hide();
        $(".help-title").click(function() {
            $(this).next('.help-content').toggle();
        });
    });
</script>
</body>
</html>
