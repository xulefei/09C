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
            <dt><img src="frontend/images/shangchuan_icon.png" class="png_fix"  title="上传认证"/></dt>
            <dd><b>认证说明：</b></dd>
            <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、您上传的证件必须是<span>真实有效的，</span>如若无效，则认证将无法通过。</dd>
            <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、请您上传您的<span>本人件复印件。</span></dd>
            <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
            <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、图片的尺寸<span>小于1.5M。</span>格式为：<span>jpg、png、gif。</span></dd>
            <dd><b>认证有效期：<span>永久。</span></b></dd>
            <dd>&nbsp;</dd>  
            <dd><b>上传身份证明：</b></dd>    
          </dl>
                <form enctype="multipart/form-data" action="Authhome/upload/id/<?php echo $_GET['id'];?>" method="post"> 
                    <ul> 
                        <li><input type="file" name="photo" class="choose_tc"  /></li>
                        <li><input type="submit" value="&nbsp;" class="put_tc" /></li>
                    </ul>
                </form>
                <div class="jindutiao">&nbsp;</div>
          </div>
          <div class="jinggao">
                <span>警告：</span> 金融宝是一个注重诚信的网络平台。如果我们发现您上传的资料是伪造或有人工修改痕迹，金融宝会将你加入系统黑名单，永久取消您在金融宝的借款资格。
                </div>
      </div>
<script>
$(document).ready(function(){
	$(".put_tc").click(function(){
		$(".jindutiao").show();
	}) 
  });
</script>

</body>

</html>
