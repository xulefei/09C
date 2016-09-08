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
                    <dt><img src="/frontend/images/shangchuan_icon.png" class="png_fix"  title="上传认证"/>工作认证<p>您的工作状况是金融宝评估您信用状况的主要依据。请您上传真实可靠的工作资料。</p></dt>
                    <dd><b>认证说明：</b></dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、请提交下面任意一项资料：</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（1）加盖单位公章的劳动合同。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（2）最近一个月内开具的加盖单位公章的在职证明。<a href="/frontend/images/shili/gongzuo.jpg" target="_blank">查看示例</a></dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、图片的尺寸<span>小于1.5M。</span>格式为：<span>jpg、png、gif。</span></dd>
                    <dd><b>认证条件：<span>需在现单位工作满3个月。</span></b></dd>
                    <dd><b>认证有效期：<span>6个月。</span></b></dd>
                    <dd>&nbsp;</dd>  
                </dl>
                <form enctype="multipart/form-data" action="{:U('Authhome/doSubmit')}" method="post"> 
                    <iframe src="<?php echo C('IMG_UPLOAD_URL');?>" scrolling="yes" style="width:570px; height:160px; border:0;"></iframe>
                    <input type="hidden" value="" name="paths" id="paths" />
                    <input type="hidden" value="2" name="id"  />
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
