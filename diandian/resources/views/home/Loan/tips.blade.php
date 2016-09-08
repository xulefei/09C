<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="frontend/css/go_auth.css"  rel="stylesheet" type="text/css"/>
        <link href="frontend/css/base.css"  rel="stylesheet" type="text/css" />
        <script src="frontend/js/jquery.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width">
    </head>
    <script type="text/javascript">
        $(function() {

            $("input[name='realname']").mouseout(function() {
                var reg = /^[\u4e00-\u9fa5]+$/;
                if (reg.test($("input[name='realname']").val())) {
                    $(".tscg1").html("<font color=\"red\"></font>");
                } else {
                    $(".tscg1").html("<font color=\"red\">真实姓名必须是中文!</font>");
                }
            })

            $("input[name='idcard']").mouseout(function() {
                var reg = /[1-9]([0-9]{14}|[0-9]{17})$/;
                if (reg.test($("input[name='idcard']").val())) {
                    $(".tscg2").html("<font color=\"red\"></font>");
                } else {
                    $(".tscg2").html("<font color=\"red\">身份证格式不正确!</font>");
                }
            })



        })


    </script>

    <body>
        <div id="myOnPageContent">
            <div class="auth">
                <div class="auth_top"> 
                <div class="renzhengshuoming">
                    <b>拆分详情：</b>
                    <ul>
                        <li>投资金额:<span>1000.00元</span></li>
                        <li>可拆分金额：<span>1000.00元</span></li>
                    </ul>  
                </div>
                <div  class="shangchuanzhengming">
                  <input type="submit" value="确认拆分">
                </div>

                </body>
                </html>
