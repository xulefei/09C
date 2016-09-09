<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="/frontend/css/index.css" type="text/css" rel="stylesheet" />
<link href="/frontend/css/base.css" type="text/css"  rel="stylesheet" />
<link href="/frontend/css/user.css" type="text/css"  rel="stylesheet" />
@include('home.Public.header')

</head>

<body>
    @include('home.Public.main_nav')
    <div class="yinying_jrb2"></div>
<!--贷款中心开始-->
<div class="zhutineirong">
<!--筛选开始-->
  <div class="woyaojiekuan_t">
  	<div class="woyaojiekuan_tl2">
     <dl> 
      <dt><b></b><span></span></dt>
      <dd>
        <ul>
          <li>标的总额<span>元</span></li>
          <li>标的类型<span><img  src="res/images/loancenter/icon_safe.png" src="res/images/loancenter/icon_safe_ok.png" title="标的类型"/></span></li>
        </ul>
      </dd>
      <dd>
        <ul>
          <li>剩余时间<span>1天23小时15分</span></li>
          <li>投标进度<span>%</span></li>
        </ul>
      </dd>
      <dd>
        <ul>
          <li>还款方式<span>
                                        按月分期还款
                                        
                                        到期还本按月还息
                                        </span></li>
          <li>还款期限<span>个月</span></li>
        </ul>
      </dd>
      <dd>
<!--        <ul>
          <li>月还本息<span>10,000元</span></li>
        </ul>-->
      </dd>
     </dl>
               <div class="clear"></div>
    </div>
    
                  <div class="clear"></div> 
  </div>
<!--筛选结束-->
<!--投资列表开始-->
  <div class="woyaojiekuan_b2">
<!--右边栏开始-->
<div class="xiangqing_kj" id="right_top2">
  <div class="jiekuanxiangqing_lkj">
  <div class="tittle_xqkj"><b>还款记录</b></div>
    <dl>
      <dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款时间</dt>
      <foreach name="list" item="v">
      <dd>
        <ul>
          <li></li>
          <li>元</li>
          <li style="width: 150px;"></li>
        </ul>
      </dd>
    </foreach>
      <div align="center"></div>
    </dl>
  </div>
  <div class="jiekuanxiangqing_rkj">
    <div class="tittle_xqkj">还款总额<p><span>元</span></p></div>
    <div class="tittle_xqkj">还款次数
      <p><span>次</span></p></div>
  </div>
  
                <div class="clear"></div>
</div>
</div>
<!--投资列表结束-->
	
               <div class="clear"></div>    
</div>
<!--贷款中心结束-->
  @include('home.Public.footer')
</body>
</html>
