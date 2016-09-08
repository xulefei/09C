<!DOCTYPE html >
<html>
    <head>

    @include('home.Public.header')
    <link href="/frontend/css/user.css" type="text/css" rel="stylesheet"/>
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
        <div class="right_top4">
            <div class="zongjine_lkj">
                账户余额<p>&nbsp;元</p>
            </div>
            <div class="zongjine_r2kj">
                <ul>
                    <li>可用资金<p>元</p></li>
                    <li>已充值总额<p>元</p></li>
                    <li><a href="" class="jrb_but03">充&nbsp;&nbsp;值</a></li>
                </ul>
                <ul>
                    <li>冻结资金<p>元</p></li>
                    <li>已提现总额<p>元</p></li>
                    <li><a href=""  class="jrb_but03">提&nbsp;&nbsp;现</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div class="right_bottom">
            <form action="" method="get">
                <div class="jiaoyijilu_topkj">
                    <ul>
                        <li><span>查询类型</span>
                            <select name="type" class="biaodan_02">
                                <option value="0">全部</option>
                                
                            </select>
                        </li>
                        <li><span>查询时间</span>
                            <select name="time" class="biaodan_02">
                                <option value="0">不限</option>
                               
                            </select>
                        </li>
                        <li><input type="submit"  value="查&nbsp;&nbsp;询"  class="jrb_but04"/></li>
                    </ul>
                </div>
            </form>
            <div class="touzi_liebiao_little">
                <table class="touzi_liebiao_conlittle">
                    <thead>
                        <tr>
                            <th>类型明细</th>
                            <th>时间</th>
                            
                            <th>逾期费</th>
                            
                            <th>收入</th>
                          
                            <th>支出</th>
                            <th>结余</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr><td colspan="6">暂无记录</td></tr>
                        
                        <tr>
                            <td colspan="6">
                                <div class="fanye_jrb">
                                    <div class="fanye_fr">
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>   
        </div>
    </div>
    <!--右边栏结束-->
    <div class="clear"></div>
</div>
@include('home.Public.footer')
</body>
</html>
