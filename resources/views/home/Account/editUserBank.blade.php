<!DOCTYPE html>
<html>
    <head>

    @include('home.Public.header')
    <link href="/frontend/css/user.css" type="text/css" rel="stylesheet"/>
    <style type="text/css">
        #TB_closeAjaxWindow{ width:48px; height:10px; overflow:hidden;}
    </style>
</head>
<body>
    <div class="lightbox">
        <br />
        <form data-name="addcard"  class="ui-form" method="post" id="updatecardForm" action="{:U('Account/updateUserBank')}">
            <input type="hidden" name="id" value="" />
            <dl>
                <dd>
                    <span><b>*</b>开户名</span>
                    <div class="yinhangka_rkj"></div><i style="color:#CCC; line-height:30px;">（请添加相同开户名的银行卡）</i>
                </dd>
                <dd>
                    <span><b>*</b>卡号</span>
                    <div class="yinhangka_rkj"></div>
                </dd>
                <dd></dd>
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
                    <input class="ui-input" type="text" value="" name="bankName" id="cardDeposit" />
                </dd>
                <dd>
                    <span>&nbsp;</span>
                    <input type="button" value="提&nbsp;&nbsp;交"  class="jrb_but02" id="submit_form"  /> 
                    <span id="msg-info" style="color:red;display: none;">修改成功</span>
                </dd>
                <dd><ul>
                        <li>温馨提示:</li>
                        <li>1、如果您填写的开户行支行不正确，可能将无法成功提现，由此产生的提现费用将不予返还。</li>
                        <li>2、如果您不确定开户行支行名称，可打电话到所在地银行的营业网点询问或上网查询。</li>
                        <li>3、不支持提现至信用卡账户。</li>
                    </ul></dd>
            </dl>
        </form>
    </div>
    <script src="/frontend/js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $("#province").change(function() {
                $.get('{:U("Account/ajaxGetArea")}', {
                    area_id: $(this).val()
                }, function(data, status) {
                    $("#city").empty();
                    $("#city").append(data);
                });
            });

            $("#cardDeposit").blur(function() {
                if (!isChina($("#cardDeposit").val())) {
                    $('#msg-info').text('开户行必须包含中文！').show();
                    return;
                } else {
                    $('#msg-info').hide();
                }
            });


            $("#submit_form").click(function() {
                if (!isChina($("#cardDeposit").val())) {
                    $('#msg-info').text('开户行必须包含中文！').show();
                    return;
                }
                $.post('{:U("Account/updateUserBank")}', $('#updatecardForm').serialize(), function(data, status) {
                    if (data === '200') {
                        $('#msg-info').text('支行名称不能为空').show();
                    } else {
                        $('#msg-info').text('修改成功').show();
                        location.reload();
                    }
                });
            });

        });

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
    </script>
</body>
</html>
