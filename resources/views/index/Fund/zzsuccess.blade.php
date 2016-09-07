<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@include('home.Public.header')
<link href="frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
<link href="frontend/css/base.css" rel="stylesheet" type="text/css" />
<link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
<link href="frontend/css/eebao.css" rel="stylesheet" type="text/css" />
<script src="backend/bui/js/jquery-1.8.1.min.js" type="text/javascript"> </script>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
</head>
<body>
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>

<div class="eeb_box_bg">
  <div class="eeb_jisuanqi">
    <div class="jsq_top png_fix">
      <div class="jsq_topl"><img src="frontend/images/zhuanzhang_icon.png" class="png_fix" style=" vertical-align:middle;" title="转账"/>&nbsp;E额宝拥有更高收益，安全可靠，请放心操作</div>
                    <div class="jsq_topr"><img src="frontend/images/fanhui_icon.png" class="png_fix"  style=" vertical-align:middle;"  title="返回"/><a href="" style="color:#FFF">&nbsp;返回</a></div>
                                   <div class="clear"></div>
    </div>
    <div class="jsq_bottom">
      <div class="zhuanzhang_l">
        <dl>
          <dt><img src="frontend/images/check.png" class="png_fix" style=" margin-right:10px; vertical-align:middle"  title="转入成功"/>转入成功！请等待后台审核！</dt>
          <dd>金融宝转入<b>{$fund}</b>元至E额宝账户</dd>
          <dd>预计收益日期：<b></b><span>（最长不超过72小时）</span></dd>
        </dl>
      </div>
      <div class="zhuanzhang_r">
        <dl>
          <dt>E额宝三大优势：</dt>
          <dd><img src="_frontend/images/ggshouyi_icon.png"  style=" vertical-align:middle;" title="E额宝拥有更多收益"/>&nbsp;E额宝拥有更多收益</dd>
          <dd><img src="frontend/images/ggbaozhang_icon.png"  style=" vertical-align:middle;" title="E额宝安全更保障"/>&nbsp;E额宝安全更保障</dd>
          <dd><img src="frontend/images/ggtiexin_icon.png"  style=" vertical-align:middle;" title="E额宝服务更贴心"/>&nbsp;E额宝服务更贴心</dd>
        </dl>
      </div>
                                 <div class="clear"></div>
    </div>
  </div>  
</div>

@include('home.Public.footer')
</body>
</html>