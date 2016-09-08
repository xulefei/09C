<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>利息和费率-桂林金融宝众投借贷平台</title>
    @include('home.Public.header')
<link href="/frontend/css/lixuena_style.css" rel="stylesheet" type="text/css" />
<link href="/frontend/css/user.css" rel="stylesheet" type="text/css" />
<link href="/frontend/js/jquery.js" rel="stylesheet" type="text/css" />
 </head>
<body>
<!--头部开始-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--头部内容结束-->
<div id="content">
    @include('home.Public.help_nav')
  <div class="help_right_con">
    <h1>借款人费用</h1>
    <h2>1. 借款管理费</h2>
    <p>金融宝将按照借款人的借款金额，一次性向借款人收取其借款本金的0.30%作为借款管理费。</p>
    <ul>
    <li>计算公式为：借款人借款管理费 = 借款本金*借款管理费比例</li>
    <li>M=P*R</li>
    <li>M：借款管理费</li>
    <li>P：借款本金</li>
    <li>R：借款管理费比例</li>
    <li>金融宝借款管理费比例为：0.30%</li>
    </ul>
    <h2>2. 还款管理费</h2>
    <p>金融宝将按照借款人的每月还款本金与每月还款利息，每月向借款人收取其（每月还款本金+每月还款利息）的0.30%作为还款管理费。
    <ul>
    <li>计算公式为：借款人每月还款管理费 = (每月还款本金+每月还款利息)*还款管理费比例</li>
    <li>M=(P+I)*R</li>
    <li>M：每月还款管理费</li>
    <li>P：每月还款本金</li>
    <li>I：每月还款利息</li>
    <li>R：还款管理费比例</li>
    <li>金融宝还款管理费比例为：0.30%</li>
    </ul>
    </p>  
    <h2>3. 逾期管理费</h2>
    <p>用户的借款发生逾期时，将产生预期管理费。按照下面公式计算。</p>
    <ul>
    <li>逾期管理费计算方式为：逾期管理费 = 当月还款本息*逾期管理费比例*逾期的天数。</li>
    <li>M=(P+I)*R*D</li>
    <li>M：逾期管理费</li>
    <li>P：当月还款本金</li>
    <li>I：当月还款利息</li>
    <li>R：逾期管理费比例</li>
    <li>D：逾期天数</li>
    <li>金融宝逾期管理费比例为：0.01%</li>
    </ul>
    <h2>4. 严重逾期管理费</h2>
    <p>超过15天为严重逾期。按照下面公式计算。</p>
    <ul>
    <li>严重逾期管理费计算方式为：严重逾期管理费 = 当月还款本息*逾期管理费比例*逾期的天数+当月还款本息*严重逾期管理费比例*严重逾期的天数。</li>
    <li>M=(P+I)*R*D+(P+I)*R2*(D-15)</li>
    <li>M：严重逾期管理费</li>
    <li>P：当月还款本金</li>
    <li>I：当月还款利息</li>
    <li>R：逾期管理费比例</li>
    <li>R2：严重逾期管理费比例</li>
    <li>D：逾期天数</li>
    <li>金融宝逾期管理费比例为：0.01%</li>
    <li>金融宝严重逾期管理费比例为：0.10%</li>
    </ul>
    <p class="fg_line">注意：金融宝以上收费项目均在国家法律规定范围内。</p>  
  </div>
  <div class="clear"></div>
</div>
<!--底部内容开始-->
@include('home.Public.footer')
<!--底部内容结束-->
</body>
</html>
