<!DOCTYPE html>
<html>
    <head>

        @include('home.Public.header')
        <link href="frontend/css/user.css" type="text/css" rel="stylesheet"/>
        <link href="frontend/css/thickbox.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <!--导航栏开始-->
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--导航栏结束-->
        
        <div class="zhutineirong">
            <!--左边栏开始-->
            @include('home.Public.left_nav')
            <!--左边栏结束-->  

            <!--右边栏开始-->
            <div class="right">
                <div class="right_top2">
                    <div class="tittle_kj">已添加银行卡</div>
                    <div class="gerenxinxi_kj">
                       
                        <div class="yinhangka_kj">
                            <div class="yinhangka_img">
                                <img src="setting/{$vo.logo}" title="银行卡"/>
                                <div style="color: gray;"></div>
                            </div>
                            <div class="yinhangka_xgkj"><a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=540&width=650&modal=false" title="修改银行卡" class="thickbox" >修改</a><a class="bankCarkDel" J_bank_id="" href="javascript:void(0);">删除</a></div>
                        </div>
                        <?php endforeach;?>
                        <a href="?placeValuesBeforeTB_=savedValues&TB_alert=true&height=540&width=650&modal=false" class=" thickbox"> <div class="yinhangka_kj">
                            <div class="yianhangka_img"><img src="frontend/images/ico/add.jpg" title="添加银行卡"/></div>     
                            <a href="#TB_alert=true?height=540&width=650&modal=false" class="thickbox">添加银行卡</a>
                        </div></a>
                        <!--右边栏结束-->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
                              <div class="clear"></div>
        </div>
    @include('home.Public.footer')
    <script language="javascript" type="text/javascript" src="frontend/js/thickbox-compressed.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#cardId').mouseout(function() {
                checkBankAccountByLuhm($(this).val(), 'errorBox');
            });
            $(".bankCarkDel").click(function() {
                if (confirm('确定要删除记录吗?')) {
                    $.post("{:U('Account/deleteUserBank')}", {
                        id: $(this).attr('J_bank_id')
                    }, function(data, status) {
                        if (data === '10000') {
                            alert('删除成功！');
                            location.reload();
                        }
                    });
                }
            });

        });
    </script>
</body>
</html>
