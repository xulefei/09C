<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="/frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="/frontend/css/base.css"  rel="stylesheet" type="text/css" />
         
        <meta name="viewport" content="width=device-width">
        
        <style type="text/css">
		#TB_closeAjaxWindow{ width:48px; height:10px; overflow:hidden;}
    </style>
    </head>
    <body>
        <div id="myOnPageContent">
            <div class="touxiang_tc">
                <dl>
                  <dt><img src="/frontend/images/shangchuan_icon.png" class="png_fix"  title="上传认证"/>视频认证</dt>
                  <dd><b>视频录制要求：</b></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、您上传的视频必须是<span>真实有效的，</span>如若无效，则认证将无法通过。</dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、视频认证文件大小<span>不得超过50M。</span></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、请上传真实有效的<span>本人的视频。</span></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、视频文件格式可以是<span>RMVB、WMV、mp4 、 AVI</span>等类型的文件</dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5、视频认证必须图像清晰，声音清楚</dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6、视频认证必须衣冠整洁，禁止出现抽烟，赤裸等形象</dd>
                  <dd><b>认证有效期：<span>永久。</span></b></dd>
                  <dd>&nbsp;</dd>
                  <dd><b>视频录制内容。请针对本次借款录制视频，视频中需包括以下内容：</b></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、首先，请朗读以下文字：我是 ***，我在金融宝的用户名是***，我的身份证号是 ***************，现在我正在做金融宝的视频确认。我在此做出以下承诺：<span>我愿意接受金融宝的使用条款和借款协议；我提供给金融宝的信息及资料均是真实有效的；我愿意对我在金融宝上的行为承担全部法律责任；在我未能按时归还借款时，我同意金融宝采取法律诉讼、资料曝光等一切必要措施。</span></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、读完声明后，请您将<span>身份证正面(有身份证号)</span>对准摄像头，并保持5秒，需要保证画面中能同时看到您和您的身份证，并且身份证内容清晰可见。</dd>
                  <dd>&nbsp;</dd>
                  <dd><b>视频提交办法：您可以选择下列方法之一进行视频认证的提交：</b></dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.您可以将视频文件发送至kefu@ruituo.net，请在邮件中注明您的金融宝用户名及真实姓名。</dd>
                  <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.当您通过上述方式提交过视频认证文件之后，请选择下面的选项并点击“提交审核”</dd>
                  <dd>&nbsp;</dd>  
                  <dd><b>上传身份证明：</b></dd> 
                </dl>
                  <form method="post" action="Authhome/video_auth"> 
                      <input type="hidden" name="video" value="视频已发送" />
                      <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
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
