<!DOCTYPE html>
<html>
    <head>
    @include('home.Public.header')
    <link href="/frontend/css/index.css" type="text/css" rel="stylesheet"/>
    <script>
        var timeTask = setInterval(function() {
            var date = new Date();
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();
            if (h == 1) {
                callFunction();
            }
            setTimeout(function() {
//					 if(data == 10000){
                clearInterval(timeTask);
//				 	}
            }, 2000);
        }, 1000);
        function callFunction() {
            $.post('', {
            });
        }
    </script>
    <script src="/frontend/js/jquery1.42.min.js" type="text/javascript"></script>
    <script src="/frontend/js/jquery.superslide.2.1.1.js"></script>
</head>
<body>
    <!--头部导航-->            
@include('home.Public.main_nav') 
<!--头部结束 -->
<!--轮换开始-->
<div class="qiehuan_pic">
    <ul class="lunhuan_pic">

        <li class="bg_01"><a href="" target="_blank"><div class="lianjie_index"></div></a></li>
        <li class="bg_02"><a href="" target="_blank"><div class="lianjie_index"></div></a></li>
        <li class="bg_03"><a href="" target="_blank"><div class="lianjie_index"></div></a></li>
        <li class="bg_04"><a href="" target="_blank"><div class="lianjie_index"></div></a></li>

    </ul>
    <div class="lunhuan_but">
        <ul class="png_fix"></ul>
    </div>
    <!--轮换结束--> 
</div>

<!-- 三大模块-->
<div class="box_bg">
    <!--<div class="yinying_jrb"></div>-->
    <div class="box_middle">
        <div class="box">
            <dl>
                <dt><a href="" target="_blank" class="icon01_jrb png_fix"></a></dt>
                <dd><h3><a href="" target="_blank">投资理财</a></h3><p>成为理财人，通过主动投标将资金进行出借投资，可获稳定收益。</p></dd>
            </dl>
        </div>
        <div class="box">
            <dl>
                <dt><a href="" target="_blank" class="icon02_jrb png_fix"></a></dt>
                <dd><h3><a href="" target="_blank">信用贷款</a></h3><p>成为借款人，按照要求完善信用信息，获得信用认证后，通过发标进行借款。</p></dd>
            </dl>
        </div>
        <div class="box">
            <dl>
                <dt><a href="" target="_blank" class="icon03_jrb png_fix"></a></dt>
                <dd><h3><a href="{:U('Help/xszy')}" target="_blank">安全保障</a></h3><p>所有投资标均有安全保障，如遇贷款人违约，其个人信息将被公开。</p></dd>
            </dl>
        </div>
        <div class="box">
            <dl>
                <dt><a href="" target="_blank" class="icon04_jrb png_fix"></a></dt>
                <dd><h3><a href="" target="_blank">全保标志</a></h3><p>拥有全保标志的借贷，经过严格专业的审核，平台承诺100%保本，绝对安全的保障。</p></dd>
            </dl>
        </div>
        <div class="clearfix"></div>
        <!--登陆框开始-->

        <div class="denglu png_fix">
            <h1>登陆金融宝</h1>
            <form action="" method="post">
                <ul>
                    <li><img src="/frontend/images/login_name_bg.gif" alt="" title="用户名"/>
                        <input type="text" class="denglu_srk" placeholder="用户名/邮箱/手机号" name="name"  style=" float:left"/>
                    </li>
                    <li><img src="/frontend/images/login_password_bg.gif" alt=""  title="密码"/>
                        <input type="password" class="denglu_srk" placeholder="账号密码" name="pass"  style=" float:left"/>
                    </li>
                    <li><input placeholder="输入验证码" class="yanzhengma" name="verify"/><img src="" style=" margin-left:10px; vertical-align:middle;" title="验证码"/><b id="verify1"></b></li>
                </ul>
                <p><a href="">忘记密码？</a><a href="">免费注册</a></p>
                <div class="denglu_but_con"><input class="denglu_but" type="submit" value="&nbsp;"/></div>
            </form>
            <!---qq登录-->
            
            <!---qq登录end-->
            <!--<div class="denglu_but_con1" style=" float:left; width:80px; height:25px; line-height:25px;  color:#FFF; margin-top:15px; margin-left:30px; padding-bottom:5px; padding-top:5px; background:#999; display:inline;">
                <a href="javascript:toQzoneLogin()"><img src="__PUBLIC__//frontend/images/Connect_logo_7.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;"  title="QQ登陆"/></a></div>
            <div class="denglu_but_con2" style=" float:left; width:130px; height:25px; line-height:25px; vertical-align:middle; color:#FFF; margin-top:15px; padding-bottom:5px;padding-top:5px;background:#999;">
                <a href="{:U('AlipayLogin/AlipayLogin')}"><img src="__PUBLIC__//frontend/images/ico/1BIvZpQVQT.png" alt="" class="png_fix" style="vertical-align:middle; margin-left:15px;" title="支付宝登陆"/></a></div>-->
        </div>
        <div class="login_2 png_fix">
            <div class="login_2top">
                <div class="longin_2huanying">欢迎使用金融宝！</div>
                <div class="touxiang_2" >您当前正在使用的金融宝账号是：<p></p></div>
                <div class="clearfix"></div>
            </div>
            <a href=""><div class="login_2xinxi" style="color:#FFF;">
                    进入我的金融宝
                </div></a>
        </div>
        <!--登陆框结束-->
    </div>

</div>
<!-- 三大模块结束-->
<!--投资列表开始-->
<div class="touzi_liebiao">
    <h1 class="jrb_title">投资列表<a href="" class="jsq_but03">理财计算器</a></h1>
    <table class="liebiao_tt">
        <tr>
            <td class="in_line">累计成交总金额<p>万元</p></td>
            <td class="in_line">累计成交总笔数<p>笔</p></td>
            <td>为用户累计赚取<p>元</p></td>
        </tr>
    </table>
    <table class="touzi_liebiao_con">
        <thead>
            <tr>
                <th>借款标题</th>
                <th>信用等级</th>
                <th>借款金额</th>
                <th>还款期限</th>
                <th>借款时间</th>
                <th>投资热度</th>
                <th>状态</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tl_left">                    
                </td>                
        </tbody>

    </table>
    <div class="shuoming_lb"  style="padding:30px 0 0 0; background:#FFF; border-left:solid 1px #e6e6e6;border-right:solid 1px #e6e6e6;border-bottom:solid 1px #e6e6e6; height:60px;">
        <div class="shuoming_lbl">
            <ul>
                
            </ul>
        </div>
        <div class="gengduo_but_con" style="margin-right:10px;"><a href="" class="jrb_but01">查看更多借贷信息</a></div>
    </div>
</div>
<!--投资列表结束-->
<!--新闻中心开始-->
<div class="news_bg">
    <div class="news">
        <h1 class="jrb_title03">新闻中心</h1>
        <table class="news_liebiao_con">   
            <voList name="news_list" id="vo"> 
                <tr>
                    <td><img src="/frontend/images/ico/news.png" title="新闻" alt="新闻" /><a href="" target="_blank" title=""></a></td>
                    <td class="day"></td>
                </tr>
            </volist>
            <tr>
                <td> &nbsp </td>
                <td class="day"> 
                    <a href="">查看更多>></a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--新闻中心结束-->


<!--新闻列表开始-->
<!--新闻列表结束-->

@include('home.Public.footer')
<script type="text/javascript">
    //实现点击切换验证码
</script>
</body>
</html>