<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
</head>
<body>
        <div class="touxiang_tc02">
                <form enctype="multipart/form-data" action="Authhome/upload/id/<?php echo $_GET['id'];?>" method="post"> 
                    <ul> 
                        <li><input type="file" name="photo" class="choose_tc"  /></li>
                        <li><input type="submit" value="&nbsp;" class="put_tc" /></li>
                    </ul>
                </form>
                <div class="jindutiao_04">&nbsp;</div>
          </div>
<script>
$(document).ready(function(){
	$(".put_tc").click(function(){
		$(".jindutiao_04").show();
	}) 
  });
</script>
</body>

</html>
