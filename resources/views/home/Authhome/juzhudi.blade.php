<!DOCTYPE html>
<html>
    <head>
        <title>金融宝认证页面</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="/frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="/frontend/css/base.css"  rel="stylesheet" type="text/css" />
        <script src="/frontend/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript" src="swfupload/swfupload.js"></script>
        <script type="text/javascript" src="swfupload/handlers.js"></script>
        <style type="text/css">
            .notice { border:1px solid #dedede; width:300px; height:100px; margin:auto; } 
            .notice .say { font-size:20px;}
            #TB_closeAjaxWindow{ width:48px; height:10px; overflow:hidden;}
        </style>
    </head>
    <body>
        <div id="myOnPageContent">

            <div class="touxiang_tc">
                <dl>
                    <dt><img src="/frontend/images/shangchuan_icon.png" class="png_fix"  title="上传认证"/>居住地认证<p>居住地的稳定性，是金融宝考核借款人的主要评估因素之一。</p></dt>
                    <dd><b>认证说明：</b></dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、请上传以下任何一项可证明<span>现居住地址</span>的证明文件原件的照片。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（1）用您姓名登记的水、电、气最近三期缴费单；</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（2）用您姓名登记固定电话最近三期缴费单；</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（3）您的信用卡最近两期的月结单；</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（4）您的自有房产证明；</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（5）您父母的房产证明，及证明您和父母关系的证明材料；</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、图片的尺寸<span>小于1.5M。</span>格式为：<span>jpg、png、gif。</span></dd>
                    <dd><b>认证有效期：<span>6个月。</span></b></dd>
                    <dd>&nbsp;</dd>   
                </dl>
                <form enctype="multipart/form-data" action="" method="post"> 
                    <iframe src="" scrolling="yes" style="width:570px; height:160px; border:0;"></iframe>
                    <input type="hidden" value="" name="paths" id="paths" />
                    <input type="hidden" value="9" name="id"  />
                    <input type="submit" id="tj" class="jrb_but02" value="提交审核" style="margin-left:220px; margin-top:10px; display:inline">
                    <span id="msg3" style=" float:left; margin-top:20px; margin-left:20px;"></span>
                </form>
            </div>
            <div class="jinggao">
                <span>警告：</span> 金融宝是一个注重诚信的网络平台。如果我们发现您上传的资料是伪造或有人工修改痕迹，金融宝会将你加入系统黑名单，永久取消您在金融宝的借款资格。
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".put_tc").click(function() {
                    $(".jindutiao").show();
                });
                
                 $('#tj').click(function() {
                    if ($('#paths').val() === '') {
                        $("#msg3").html("<font color=\"red\">请上传图片!</font>");
                        return false;
                    }
                });
            });
        </script>

    </body>

</html>
