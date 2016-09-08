<!DOCTYPE html>
<html>
    <head>           

    @include('home.Public.header')
    <link href="frontend/css/user.css" type="text/css" rel="stylesheet"/>
    <style>
        .registerform li{padding-bottom:20px;}
        .Validform_checktip{margin-left:10px;}
        .registerform .label{display:inline-block; width:70px;}
        .action{padding-left:92px;}
        #TB_closeAjaxWindow{ width:48px; height:10px; overflow:hidden;}
    </style>

</head>
<body>
    <div class="lightbox">
        <br />
        <form data-name="addcard"  class="ui-form" method="post" id="updatecardForm" action="">
            <dl>
                <dd>
                    <span><b>*</b>开户名</span>
                    <div class="yinhangka_rkj"></div><i style="color:#CCC; line-height:30px;">（请添加相同开户名的银行卡）</i>
                </dd>
                <dd>
                    <span><b>*</b>选择银行</span>
                    <select id="selBankType" style="width:160px; height:30px; line-height:30px;" name="bankType">
                        <option value="">请选择</option>
                       
                    </select>   
                </dd>
                <dd><span><b>*</b>开户行所在地</span>
                    <select id="province" style="width:80px;height:30px; line-height:30px;" name="province">
                        <option value="">请选择</option>
                        
                    </select>  省 

                    <select id="city" style="width:90px;height:30px; line-height:30px;" name="city">
                        <option value="">请选择</option>
                    </select>  
                    市
                </dd>
                <dd>
                    <span><b>*</b>开户行</span>
                    <input class="ui-input" type="text" value=""  name="bankName" id="cardDeposit" /><span id="error1" style="color:red; margin-left:10px; float:none"></span>
                </dd>
                <dd>
                    <span><b>*</b>银行卡号</span>
                    <input class="ui-input" type="text" maxlength="20" name="cardNumber" id="cardId" data-is="isBankCard" /><span id="error2" style="color:red; margin-left:10px; float:none"></span>
                </dd>
                <dd>
                    <span><b>*</b>确认卡号</span>
                    <input class="ui-input" type="text" maxlength="20" name="reCardNumber" id="cardReId" data-is="isBankCard" onpaste="return false"/><span id="error3" style="color:red; margin-left:10px; float:none"></span>
                </dd>
                <dd>
                    <span>&nbsp;</span>
                    <input type="button" value="提&nbsp;&nbsp;交"  class="jrb_but02" id="submit_form"  /> 
                    <span id="msg-info" style="color:red; display:none">添加成功</span>
                </dd>
                <dd><ul>
                        <li>温馨提示：</li>
                        <li>1、如果您填写的开户行支行不正确，可能将无法成功提现，由此产生的提现费用将不予返还。</li>
                        <li>2、如果您不确定开户行支行名称，可打电话到所在地银行的营业网点询问或上网查询。</li>
                        <li>3、不支持提现至信用卡账户。</li>
                    </ul></dd>
            </dl>
        </form>
    </div>
    <script src="frontend/js/jquery.js" type="text/javascript"></script>
    <script src="frontend/js/validate_form.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $("#province").change(function() {
                $.post('{:U("Account/ajaxGetArea")}', {
                    area_id: $(this).val()
                }, function(data, status) {
                    $("#city").empty();
                    $("#city").append(data);
                });
            });

            $("#cardId").blur(function() {
                checkBankAccountByLuhm($('#cardId').val(), 'error2');
                if (checkCardSome($('#cardId').val())) {
                    $("#error2").html("请输入正确的银行卡号！");
                    return false;
                }
            });

            $("#cardDeposit").blur(function() {
                if ($("#cardDeposit").val() === '') {
                    $("#error1").html('请填写开户行！');
                } else if (!isChina($("#cardDeposit").val())) {
                    $("#error1").html('开户行必须包含中文！');
                } else {
                    $("#error1").html('');
                }
            });

            $("#cardReId").blur(function() {
                if ($('#cardId').val() !== $('#cardReId').val()) {
                    $('#error3').html('你输入的两次卡号不相等');
                } else {
                    $('#error3').html('');
                }
            });

            $("#submit_form").click(function() {

                if ($("#cardDeposit").val() === '') {
                    $("#error1").html('请填写开户行！');
                    return;
                } else if (!isChina($("#cardDeposit").val())) {
                    $("#error1").html('开户行必须包含中文！');
                    return;
                }

                if (!checkBankAccountByLuhm($('#cardId').val(), 'error2')) {
                    return;
                }

                if (checkCardSome($('#cardId').val())) {
                    $("#error2").html("请输入正确的银行卡号！");
                    return false;
                }

                if ($('#cardId').val() !== $('#cardReId').val()) {
                    $('#error3').html('你输入的两次卡号不相等');
                    return;
                }
                $.post('{:U("Account/addUserBank")}', $('#updatecardForm').serialize(), function(data, status) {
                    if (data === '10000') {
                        $('#msg-info').text('添加成功').show();
                        location.reload();
                    } else {
                        $('#msg-info').text(data).show();
                    }
                });
            });
        });

        /*
         * Luhm校验规则：16位银行卡号（19位通用）:
         * 1.将未带校验位的 15（或18）位卡号从右依次编号 1 到 15（18），位于奇数位号上的数字乘以 2。
         * 2.将奇位乘积的个十位全部相加，再加上所有偶数位上的数字。
         * 3.将加法和加上校验位能被 10 整除。
         */
        function checkBankAccountByLuhm(bankNum, errorBoxID)
        {
            var flag = false;
            var regExp = /^\d+$/;
            var errorObj = document.getElementById(errorBoxID);
            errorObj.innerHTML = "";
            if (bankNum.length === 0 || bankNum === null)
            {
                errorObj.innerHTML = "请输入银行卡号！";
            }
            else if (regExp.test(bankNum) === false)
            {
                errorObj.innerHTML = "银行卡号只能为数字！";
            }
            else
            {
                var lastNum = bankNum.substr(bankNum.length - 1, 1);
                var firstNum = bankNum.substr(0, bankNum.length - 1);
                var array = firstNum.split("");
                var luhmSum = 0;
                for (var i = array.length - 1, j = 0; i >= 0; i--, j++)
                {
                    var k = parseInt(array[i]);
                    if (j % 2 === 0)
                    {
                        k = k * 2;
                        if (k > 10)
                            k = 1 + k % 10;
                        else if (k === 10)
                            k = 1;
                    }
                    luhmSum += k;
                }
                var luhmNum = (parseInt(luhmSum) % 10 === 0) ? 0 : parseInt(10 - parseInt(luhmSum) % 10);
                if (lastNum !== String(luhmNum))
                {
                    errorObj.innerHTML = "请输入正确的银行卡号！";
                }
                else
                {
                    flag = true;
                }
            }
            return flag;
        }
        //检查是否包含中文
        function isChina(s) {
            var patrn = /[\u4E00-\u9FA5]|[\uFE30-\uFFA0]/gi;
            if (!patrn.exec(s)) {
                return false;
            }
            else {
                return true;
            }
        }

        function checkCardSome(txts) {
            var b = true;
            for (var i = 0; i < txts.length && b; i++) {
                for (var j = 0; j < txts.length; j++) {
                    if (txts[i] !== txts[j]) {
                        b = false;
                        break;
                    }
                }
            }
            return b;
        }
    </script>
</body>
</html>