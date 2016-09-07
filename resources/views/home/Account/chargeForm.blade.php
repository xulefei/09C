<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <link href="frontend/css/user.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="http://union.tenpay.com/bankList/css_col3.css "/>
    <style>
      .long-logo ul li input{ vertical-align:bottom; margin-right:20px;}
    </style>
</head>
<body>
    <!--头部导航-->
@include('home.Public.main_nav')
<div class="yinying_jrb2"></div>
<!--头部结束 -->
<!--导航栏开始-->

<!--导航栏结束-->
<div class="zhutineirong">
    <!--左边栏开始-->
    @include('home.Public.left_nav')
    <!--左边栏结束-->  
    <!--右边栏开始-->
    <div class="right">
        <!--选择充值方式开始-->
        <div class="right_2">
            <form action="" method="post" id="J_form"  />
            <div class="chongzhifangshi">
                <div class="title">选择银行卡</div>  
                　<div id="tenpayBankList" style=" margin-left:30px;"></div>
                 　<input type="hidden" name="bank_type_value" id="bank_type_value" value="0">
                <!--                <ul>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="ICBC"  /><img alt="工商银行" src="__PUBLIC__/frontend/images/icbc.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="ABC"  /><img alt="农业银行" src="__PUBLIC__/frontend/images/bank_abc.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="BCM"  /><img alt="交通银行" src="__PUBLIC__/frontend/images/bank_bcom.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="BOC"  /> <img alt="中国银行" src="__PUBLIC__/frontend/images/bank_boc.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="CCB"  /><img alt="建设银行" src="__PUBLIC__/frontend/images/bank_ccb.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="CEB"  /><img alt="光大银行" src="__PUBLIC__/frontend/images/bank_ceb.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="CIB "  /><img alt="兴业银行" src="__PUBLIC__/frontend/images/bank_cib.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="abc"  /><img alt="中信银行" src="__PUBLIC__/frontend/images/bank_citic.jpg" width="142" height="40" /></label></li>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="CMB"  /><img alt="招商银行" src="__PUBLIC__/frontend/images/bank_cmb.jpg" width="142" height="40" /></label></li>
                                </ul>-->
                <!--                <div class="title">银联在线支付</div>    
                                <ul>
                                    <li><label><input name="bank" type="radio" class="biaodan_05" value="unionpay" checked="checked"  /><img alt="银联在线" src="__PUBLIC__/frontend/images/unionpay_logo.gif" width="142" height="40" /></label></li>
                                </ul>-->
                <div style="clear: both;"></div>
                <div class="title">其他支付方式</div>    
                <ul style="margin-left:25px;">
                    <li><label><input name="bank_type" type="radio" class="biaodan_05" value="DEFAULT"  style="border:0"/><img alt="财付通" src="frontend/images/tenpay.jpg" width="142" height="40" title="财付通"/></label></li>
                    <li><label><input name="bank_type" type="radio" class="biaodan_05" value="unionpay"  style="border:0"/><img alt="银联在线" src="frontend/images/unionpay_logo.gif" width="142" height="40" title="银联在线"/></label></li>
                </ul>
            </div>
            <div class="chongzhijin_e">
                <div class="title">填写充值金额</div>
                <ul>
                    <li>
                        <span>账户余额</span>  
                        <b></b>&nbsp;&nbsp;元
                    </li>
                    <li><span><b style="color:#F00">*</b>充值金额</span>
                        <input type="text" class="jin_e" name="fund" />元<span style="color:red;float: right;margin-right: 100px;width: 105px;" id="errorMsg1"></span>
                    </li>
                    <li style=" margin-top:20px;"><span>&nbsp;</span><input type="button" id="submitForm"  value="充&nbsp;&nbsp;值"  class="jrb_but02"/></li>
                </ul>

            </div>
            <input type="hidden" name="balance" value="" />
            </form> 
            <div class="tips">
                <h2>温馨提示</h2>
                <ul>
                    <li>为了您的账户安全，请在充值前进行身份认证、手机绑定以及提现密码设置。</li>
                    <li>您的账户资金将由第三方平台托管。</li>
                    <li>请注意您的银行卡充值限制，以免造成不便。</li>
                    <li>禁止洗钱、信用卡套现、虚假交易等行为，一经发现并确认，将终止该账户的使用。</li>
                    <li>如果充值金额没有及时到账，请联系客服，0773-2668269。</li>
                </ul>
            </div>
            <div class="clear"></div>        
        </div>
    </div>
    <!--右边栏结束-->
    <div class="clear"></div>
</div>
@include('home.Public.footer')
<script>$.getScript("http://union.tenpay.com/bankList/bank.js");</script>
<script type="text/javascript">
    $(function() {
        $("#submitForm").click(function() {
            if (!$("input[name='fund']").val() || !checkMoney($("input[name='fund']").val())) {
                $("#errorMsg1").html('请输入合法金额!');
                return false;
            }
            if ($("#bank_type_value").val() == 0) {
                $("#errorMsg1").html('请选择充值方式!');
                return false;
            }
            $("#J_form").submit();
        });
        $("input[name='fund']").focus(function() {
            $("#errorMsg1").html('');
        });

        $("input[name='bank_type']").click(function() {
            $("input[name='bank_type_value']").val($(this).val())
        });
    });

    /**
     * 检查输入的资金是否合法
     * 
     * @param {type} money
     * @returns {Boolean}
     */
    function checkMoney(money) {
        var reg = /^[0-9]*\.?[0-9]{0,2}$/;
        return  reg.test(money) ? true : false;
    }
</script>
</body>
</html>
