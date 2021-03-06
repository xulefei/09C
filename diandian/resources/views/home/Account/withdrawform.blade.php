<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <link href="frontend/css/user.css" type="text/css" rel="stylesheet"/>
    <link href="frontend/css/thickbox.css" type="text/css" rel="stylesheet"/>
    <link href="frontend/vendor/jq.validate/tip-yellowsimple/tip-yellowsimple.css" type="text/css" rel="stylesheet"/>
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
            <form action="" id="J_form" method="post" type="validate"/>
            <div class="chongzhifangshi">
                <div class="title">选择提现银行卡</div>    
                <div class="tixian_kj">
                    
                    <div class="yinhangka_kj J_event" J_data="">
                        <div class="yinhangka_img"><img  src="/setting/"  title="银行卡"/></div>
                        <div class="yinhangka_xgkj"></div>
                    </div>
                   
                    <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=540&width=650&modal=false" class="thickbox">
                        <div class="yinhangka_kj">
                            <div class="yianhangka_img"><img src="frontend/images/ico/add.jpg"  title="添加银行卡"/></div>     
                            <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=540&width=650&modal=false" class="thickbox">添加银行卡</a>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="chongzhijin_e">
                <div class="title">填写提现金额</div>
                <ul>
                    <li><span>可用资金</span>  
                        <b></b>&nbsp;&nbsp;元
                    </li>
                   
                    <li><span><b style="color:#F00">*</b>提现金额</span>
                        <input class="jin_e" type="text" maxlength="8" name="fund" regString="^[0-9]*\.?[0-9]{0,2}$" valType="OTHER" msg="<font color=red>*</font>请输入合法金额" />元
                    </li>
                    <li><span>预计到账日期</span>  
                        <b></b>&nbsp;&nbsp;(1-4个工作日)
                    </li>
                    <li><span><b style="color:#F00">*</b>交易密码</span>
                        <input type="password" class="jin_e" maxlength="16" name="safePass" valType="required" msg="<font color=red>*</font>请输入交易密码" />
                    </li>
                    <li style="color:red;display: none;" id="err"><span>&nbsp;</span></li>
                    <li style=" margin-top:20px;"><span>&nbsp;</span><input type="button"  id="submitForm" value="提&nbsp;&nbsp;现"  class="jrb_but02"/></li>
                    <?php else:?>
                    <span style="color:red">转出资金，需要先设置交易密码！ <a href="" style="color:blue">去设置 >></a></span>
                   
                </ul>
            </div>
            <input type="hidden" id="bankCardId" name="bankCardId" />
            <input type="hidden" id="userFund" value="" />

            </form> 
            <div class="tips">
                <h2>温馨提示</h2>
                <ul>
                    <li>请确保您输入的提现金额，以及银行帐号信息准确无误</li>
                    <li>如果您填写的提现信息不正确可能会导致提现失败，由此产生的提现费用将不予返还。</li>
                    <li>在双休日和法定节假日期间，用户可以申请提现，金融宝会在下一个工作日进行处理。由此造成的不便，请多多谅解！</li>
                    <li>禁止洗钱、信用卡套现、虚假交易等行为，一经发现并确认，将终止该账户的使用。</li>
                    <li>如果提现出现问题，请联系客服，0773-2668269。</li>
                </ul>
            </div>
            <div class="clear"></div>        
        </div>
    </div>
    <!--右边栏结束-->
    <div class="clear"></div>
</div>
@include('home.Public.footer')
<script language="javascript" type="text/javascript" src="__PUBLIC__/frontend/js/thickbox-compressed.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/frontend/vendor/jq.validate/jquery.poshytip.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/frontend/vendor/jq.validate/jq.validate.js"></script>
<script type="text/javascript">
    $(function() {

        var vali = new Validators();
        $("#submitForm").bind("click", vali.subByJs);

        $(".J_event").click(function() {
            $(".J_event").removeClass('yinhangka_xzkj').addClass('yinhangka_kj');
            if ($(this).hasClass('yinhangka_kj')) {
                $(this).removeClass("yinhangka_kj").addClass('yinhangka_xzkj');
                $("#bankCardId").val($(this).attr('J_data'));
            } else {
                $(this).removeClass("yinhangka_xzkj").addClass('yinhangka_kj');
                $("#bankCardId").val('');
            }
        });

        $("#province").change(function() {
            $.get('{:U("Account/ajaxGetArea")}', {
                area_id: $(this).val()
            }, function(data, status) {
                $("#city").empty();
                $("#city").append(data);
            });
        });

        $("#submitForm").click(function() {
            if (!checkMoney($("input[name='fund']").val())) {
                $("#err").html('<span>&nbsp;</span>请输入合法金额!');
                $("#err").show();
                return false;
            }

            if (parseFloat($("#userFund").val()) < $("input[name='fund']").val()) {
                $("#err").html('<span>&nbsp;</span>提现金额不能大于您的余额！');
                $("#err").show();
                return false;
            }
            if (!$("input[name='bankCardId']").val()) {
                $("#err").html('<span>&nbsp;</span>请选择提现银行卡！');
                $("#err").show();
                return false;
            }
            $('#submitForm').attr('disabled',true);
            $("#J_form").submit();
        });

        $("input[name='fund']").bind('keyup blur', function() {
            var s = $(this).val();
            if (parseFloat($("#userFund").val()) < s) {
                $("#err").html('<span>&nbsp;</span>提现金额不能大于您的余额！');
                $("#err").show();
            }
        });
        $("input[name='fund']").focus(function() {
            $("#errorMsg1").html('');
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
