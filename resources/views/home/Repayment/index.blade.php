<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        @include('home.Public.header')
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/frontend/css/user.css" type="text/css"  rel="stylesheet" />
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
                                <li>标的总额<span style="color:#F00; font-size:24px;">元</span></li>
                                <li>标的类型<span><img title="有抵押标" src="/frontend/images/shiwu_tubiao.png"  title="无抵押信用标" alt="无抵押信用标" src="/frontend/images/xinyong_tubiao.png"/></span></li>
                            </ul>
                        </dd>
                        <dd>
                            <ul>
                                
                                <li>下次还款日期<span>审核中！</span></li>
                                
                                <li>下次还款日期<span>审核不通过！</span></li>
                                
                                <li>下次还款日期<span>筹款中！</span></li>
                                
                                <li>下次还款日期<span>已流标！</span></li>
                                
                                <li>下次还款日期<span> 已还清 ！</span></li
                                >
                                <li>还款期限<span style="color:#F00;">个月</span></li>
                            </ul>
                        </dd>
                        <dd>
                            <ul>
                                <li>还款方式<span> 
                                        按月分期还款
                                        
                                        到期还本按月还息
                                </span>
                                    <a href="#" title="还款期内，每月偿还同等数额的借款(包括本金和利息)"><img src="/frontend/images/wenhao_info.gif"  title="查看更多"/></a>
                                </li>

                            </ul>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="woyaojiekuan_tr2">
                    <div class="tittle_xqkj"><b>投标</b><span></span></div>
                    <form action="" method="post">
                        <input type="hidden" value="" name="objId" />
                        <ul>
                            <li>可用金额<p>元</p></li>
                            <li>账户余额<a href="">（充值）</a><p>元</p></li>
                        </ul>
                        <input type="submit" value="还&nbsp;&nbsp;款"  class="touzi_kj">
                            <div class="yimanbiao_kj">已&nbsp;&nbsp;还&nbsp;&nbsp;清</div>
                            <div class="yimanbiao_kj">已&nbsp;&nbsp;流&nbsp;&nbsp;标</div>
                            <div class="yimanbiao_kj">审&nbsp;&nbsp;核&nbsp;&nbsp;中</div>
                            <div class="yimanbiao_kj">审核未通过</div>     
                            <div class="yimanbiao_kj">筹&nbsp;&nbsp;款&nbsp;&nbsp;中</div>
                    </form>
                </div>
                <div class="woyaojiekuan_t02">
                <div class="tittle_jrb002"><b>借款说明</b></div>
                        <div class="jiekuanshuoming_kj" style="text-align: left;"></div>
                        </div>
                <div class="chengkai" style=" float:left; width:1000px; height:50px">&nbsp;</div>
                <div class="clear"></div> 
            </div>
            <!--筛选结束-->
			
            <!--投资列表开始-->
            <div class="woyaojiekuan_b2">
                <div class="tab">
                    <a href=""><div class="cur" id="tz">还款记录</div></a><a href=""><div  id="sx">加入记录</div></a>
                    <div class="clear"></div>
                </div>
                <!--右边栏开始-->
                <div class="xiangqing_kj" id="right_top2">
                    <div class="jiekuanxiangqing_lkj">
                        <dl>
                            <?php $sumFund = 0;?>
                            <dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;借款标题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款时间</dt>
                
                                <dd>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li style="width: 150px;"></li>
                                    </ul>
                                </dd>
            
                            
                        </dl>
                    </div>
                    <div class="jiekuanxiangqing_rkj">
                        <div class="tittle_xqkj">还款总额<p><span>元</span></p></div>
                        <div class="tittle_xqkj">还款次数<p><span>次</span></p></div>
                    </div>

                    <div class="clear"></div>
                </div>
				
                <div class="liuchengtu_jk">
                    <ul>
                        <li><span>1.借款成功</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>2.查看下次还款日期</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>3.账户充值</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>4.于还款日期前点击还款</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>5.输入还款金额</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>6.当月还款成功</span></li>
                    </ul>
                </div>
            </div>
            <!--投资列表结束-->
            <div class="clear"></div>    
        </div>
        <!--贷款中心结束-->
        @include('home.Public.footer')
    </body>
</html>
