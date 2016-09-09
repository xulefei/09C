<!DOCTYPE html>
<html>
    <head>
        <title>金融宝认证页面</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="frontend/css/base.css"  rel="stylesheet" type="text/css" />
        <script src="frontend/js/jquery.js" type="text/javascript"></script>
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
                    <dt><img src="frontend/images/shangchuan_icon.png" class="png_fix"  title="上传认证"/>银行信用报告认证<p>个人信用报告是由中国人民银行出具，全面记录个人信用活动，反映个人信用基本状况的文件。本报告是金融宝了解您信用状况的一个重要参考资料。 您信用报告内体现的信用记录和信用卡额度等数据，将在您发布借款时经金融宝工作人员整理，在充分保护您隐私的前提下披露给金融宝借出者，作为借出者投标的依据。</p></dt>
                    <dd><b>认证说明：</b></dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、个人信用报告需<span>15日内</span>开具。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、上传您的<span>个人信用报告原件</span>的照片，每页信用报告需独立照相，并将整份信用报告按页码先后顺序完整上传。<a href="frontend/images/shili/xinyongbaogao.jpg" target="_blank">查看示例</a></dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、图片的尺寸<span>小于1.5M。</span>格式为：<span>jpg、png、gif。</span></dd>
                    <dd><b>认证条件：<span>信用记录良好。</span></b></dd>
                    <dd><b>认证有效期：<span>6个月。</span></b></dd>
                    <dd>&nbsp;</dd>    
                </dl>
                <form enctype="multipart/form-data" action="" method="post"> 
                    <iframe src="" scrolling="yes" style="width:570px; height:160px; border:0;"></iframe>
                    <input type="hidden" value="" name="paths" id="paths" />
                    <input type="hidden" value="3" name="id"  />
                    <input type="submit" class="jrb_but02" id="tj" value="提交审核" style="margin-left:220px; margin-top:10px; display:inline">
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
