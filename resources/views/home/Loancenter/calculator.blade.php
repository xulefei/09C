<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        @include('home.Public.header')
        <link href="__PUBLIC__//frontend/css/user.css" type="text/css"  rel="stylesheet" />
    </head>

    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--理财计算器开始-->
        <div class="licai_js">
            <div class="licai_jsb">
                <h1 class="jsq_title">理财计算器</h1>
                <table class="jisuanqi_lc">
                    <tr>
                        <td><span>出借金额</span><input maxlength="8" type="text" value="500" id="jiechu" class="biaodan_lc" />&nbsp;元<p id="err_msg1"><span>&nbsp;</span></td>
                        <td><span>年利率</span><input type="text" maxlength="6" value="12" id="lilv" class="biaodan_lc" />&nbsp;%<p id="err_msg2"><span>&nbsp;</span></p></td>
                    </tr>
                    <tr>
                        <td><span>借款期限</span>
                            <select id="qixian" class="biaodan_lc">
                                
                                <option value="">个月</option>
                                
                            </select>
                            <p><span>&nbsp;</span></p></td>
                        <td><span>还款方式</span><select id="fangshi" class="biaodan_lc"><option>按月分期还款</option></select><p><span>&nbsp;</span></p></td>
                    </tr>
                </table>
                <input type="button" value="开始计算" id="compute"  class="start_lc">
                    <h1 class="jsq_title">收益描述</h1>
                    <table class="jisuanqi_lc">
                        <tr>
                            <td><span>出借金额</span><b id="m_1">0.00</b>元</td>
                            <td><span>应得利息</span><b id="m_2">0.00</b>元</td>
                        </tr>
                        <tr>
                            <td><span>月收本息</span><b id="m_3">0.00</b>元</td>
                            <td>您将于<b id="m_4">0</b>个月后收回全部本息</td>
                        </tr>
                        <tr>
                            <td><span>总获得金额</span><b id="m_5">0.00</b>元</td>
                        </tr>
                    </table>
            </div>
        </div>
        <!--理财计算器结束-->
      @include('home.Public.footer')
        <script src="/frontend/vendor/formatCurrency/formatCurrency.js" type="text/javascript"></script>
        <script src="/frontend/vendor/formatCurrency/i18n/jquery.formatCurrency.zh-CN.js" type="text/javascript"></script>
    </body>
</html>
