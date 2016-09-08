<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="/frontend/css/user.css" type="text/css"  rel="stylesheet" />
    </head>

    <body>
        @include('home.Public.main_nav')
        <div class="yinying_jrb2"></div>
        <!--贷款中心开始-->
        <div class="zhutineirong">
            <!--筛选开始-->
            <div class="woyaojiekuan_t">
                <div class="woyaojiekuan_t01">
                    <div class="woyaojiekuan_tl2">
                        <dl> 
                            <dt><b></b>
                                <span>
                                    
                                    <a href="" target="_blank"><img src="/frontend/images/ico/_icon.jpg" title="" alt=""/></a>
                                
                                </span>
                            </dt>
                            <dd>
                                <ul>
                                    <li>标的总额<span style="color:#F00; font-size:24px;">元</span></li>
                                    <li>标的类型<span><img title="有抵押标" src="/frontend/images/shiwu_tubiao.png" title="无抵押信用标" alt="无抵押信用标" src="/frontend/images/xinyong_tubiao.png" style=" vertical-align:middle;"/></span></li>
                                </ul>
                            </dd>
                            <dd>
                                <ul>
                                    <li>剩余时间
                                        
                                        &nbsp;&nbsp;&nbsp;&nbsp;已满标
                                        
                                        <span class="countdown" data-total=""></span>
                                        
                                    </li>
                                    <li>还款期限<span style="color:#F00;">个月</span></li>
                                </ul>
                            </dd>
                            <dd>
                                <ul>
                                    <li>还款方式<span>
                                            
                                            按月分期还款
                                            
                                            到期还本按月还息
                                            
                                        </span><a href="#huankuanfangshi" title="还款期内，每月偿还同等数额的借款(包括本金和利息)" target="_blank"><img src="/frontend/images/wenhao_info.gif"  title="了解更多"/></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="woyaojiekuan_tr2">
                        <div class="tittle_xqkj"><b>投标</b><span></span><a href="" class="jsq_but04">理财计算器</a></div>
                        <form id="J_Form" action="" method="post">
                            <input type="hidden" value="" name="obj_id" />
                            <input type="hidden" value="" name="maxBid" />

                            <ul>
                                <li>最多可投金额<p>元</p></li>
                                <li>账户余额<a href="">（充值）</a><p>
                                       
                                        <a href="" style="font-size:12px">登录</a><font  style="color:#000; font-size:12px">后可见</font>
                                       
                                        元</p>
                    
                                </li>
                            </ul>
                            
                            <div class="chaifentishi"><a href="" style="font-size:16px;color: #ED994B">登录</a><font  style="color:#000; font-size:16px;margin-left: 5px;">后才可以投标</font></div>
                            
                            
                            <input type="button" id="giveup" j_data="" value="放弃投标" class="touzi_kj" />
                            <div class="chaifentishi">倒计时：<span id="cuttime" data-total="" style=" color:#F00"></span></div>
                            <input type="button"  value="已放弃" class="yimanbiao_kj" />
                            <ul>
                                <li style="color:#999">（年利率不能低于%）</li>
                                <li style="color:#999">(金额需为50的整数倍)</li>
                                <li>年利率&nbsp;&nbsp;<input name="lilv" id="lilv" maxLength="2" class="biaodan_01" />&nbsp;%</li>
                                <li><input name="fund" maxLength="8" id="fund" class="biaodan_02" />&nbsp;元</li>  
                            </ul>
                            <input type="button" value="投  标" id="doBid"  class="touzi_kj">
                                <div class="chaifentishi">(您所投资的金额可能会被拆分)</div>
                                
                                <div class="yimanbiao_kj">筹&nbsp;&nbsp;款&nbsp;&nbsp;中</div>
                                <div class="yimanbiao_kj">已&nbsp;&nbsp;满&nbsp;&nbsp;标</div>
                                <div class="yimanbiao_kj">已&nbsp;&nbsp;流&nbsp;&nbsp;标</div>
                        </form>
                        <!--
                        <div class="tittle_xqkj"><b>理财计算器</b></div>
                        <table class="jisuanqi_lc">
                            <tr>
                                <td>出借金额</td>
                                <td>年利率</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="biaodan_lc" />&nbsp;元<p>出借金额不能为空</p></td>
                                <td><input type="text" class="biaodan_lc" />&nbsp;%<p>年利率不能为空</p></td>
                            </tr>
                            <tr>
                                <td>借款期限</td>
                                <td>还款方式</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="biaodan_lc" />&nbsp;个月<p>借款期限不能为空</p></td>
                                <td><select><option>请选择</option><option>按月分期还款</option></select><p>还款方式不能为空</p></td>
                            </tr>
                        </table>
                        <input type="button" value="开始计算" id=""  class="start_lc">
                        <div class="tittle_xqkj"><b>收益描述</b></div>
                        <table class="jisuanqi_lc">
                            <tr>
                                <td>出借金额<span>500.00元</span></td>
                                <td>应收利息<span>6.30元</span></td>
                            </tr>
                            <tr>
                                <td>月收本息<span>253.10元</span></td>
                                <td>您将于<b>2</b>个月后收回全部本息</td>
                            </tr>
                        </table>
                        -->
                    </div>
                    <div class="clear"></div> 
                </div>
                <!--跟详细内容-->
                <div class="woyaojiekuan_t02">
                	
                    <div class="tittle_jrb002"><b>借款说明</b></div>
                        <div class="jiekuanshuoming_kj" style="text-align: left;"></div>
                    
                    
                    <div class="wenxingtishi_jk">
                        <span><img src="/frontend/images/yz_info_bg.gif" style="vertical-align:middle" title="温馨提示" alt="温馨提示"/>（投标后可查看更详细用户信息）</span>
                    </div>
                    <div class="xyjl_jrb">
                        <div class="tittle_jrb001"><b>信用记录</b></div>
                        <table>
                            <tr>
                                <td>信用总分<p>分</p></td>
                                <td>信用额度<p>元</p></td>
                                <td>剩余额度<p>0元</p></td>
                                <td>申请借款<p>笔</p></td>
                                <td>成功借款<p>笔</p></td>
                            </tr>
                            <tr>
                                <td>还清笔数<p>笔</p></td>
                                <td>借款总额<p>元</p></td>
                                <td>待还本息<p>0元</p></td>
                                <td>逾期总额<p>次</p></td>
                                <td>逾期次数<p>次</p></td>
                            </tr>
                        </table>
                    </div>

                    <div class="shzt_jrb">
                        <div class="tittle_jrb001"><b>审核状态</b></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>审核项目</th>
                                    <th>状态</th>
                                    <th>通过日期</th>
                                    <th>说明</th>
                                    <th>审核说明</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:left"><a href="#jinrongbaorenzheng" target="_blank"><img src="/frontend/images/ico/{$vo.auth_type}_icon.jpg" title="<"/></a></td>
                                    <td><img src="/frontend/images/yz_right_bg.gif"  style="vertical-align:middle" title="已认证"/></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="yhda_jrb">
                        <div class="tittle_jrb001"><b>用户档案</b></div>
                        <table>
                            <tr>
                                <td>昵称</td>
                                <td class="line_002"><span></span></td>
                                <td>公司行业</td>
                                <td class="line_002"><span></span></td>
                                <td>生日</td>
                                <td><span></span></td>
                            </tr>
                            <tr>
                                <td>公司规模</td>
                                <td class="line_002"><span>人</span></td>
                                <td>学历</td>
                                <td class="line_002"><span></span></td>
                                <td>居住地址</td>
                                <td><span></span></td>
                            </tr>
                            <tr>
                                <td>学校</td>
                                <td class="line_002"><span></span></td>
                                <td>岗位职位</td>
                                <td class="line_002"><span></span></td>
                                <td>婚姻</td>
                                <td><span></span></td>
                            </tr>
                            <tr>
                                <td style="border-bottom:none">月收入范围</td>
                                <td class="line_002" style="border-bottom:none"><span></span></td>
                                <td style="border-bottom:none">房产</td>
                                <td class="line_002" style="border-bottom:none"><span>未验证</span></td>
                                <td style="border-bottom:none">车产</td>
                                <td style="border-bottom:none"><span>验证通过未验证</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="tx_jrb">
                        <div class="tittle_jrb001">*金融宝及其合作机构将始终秉持客观公正的原则，严控风险，最大程度的尽力确保借入者信息的真实性，但不保证审核信息100%无误。
                            <p>*借入者若长期逾期，其个人信息将被公布。</p></div>
                    </div>
                </div>
                <!--更详细内容结束-->
            </div>
            <!--筛选结束-->
            <!--投资列表开始-->
            <div class="woyaojiekuan_b2">
                <!--右边栏开始-->
                <div class="tab">
                    <a href=""><div class="cur" id="tz">加入记录</div></a>
                    <a href=""><div class="cur" id="tz">还款记录</div></a>
                    <div class="clear"></div>
                </div>
                <div class="xiangqing_kj" id="right_top1">
                    <div class="jiekuanxiangqing_lkj" align="center">
                        请 <a href="" style="color:#ED994B">登录</a> 或 <a href="" style="color:#ED994B">注册</a> 后查看</div>
                    
                    <div class="goto_pay"><a href="#">我&nbsp;要&nbsp;投&nbsp;标</a></div>
                    <div class="jiekuanxiangqing_lkj">
                        <dl>
                            <dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投标人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投标金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投标时间</dt>
                            
                            <dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款日期</dt>
                            
                            
                                <dd>
                                    <ul>
                                        <li></li>
                                        <li>元</li>
                                        <li style="width:150px;"></li>
                                    </ul>
                                </dd>
                            
                            <div align="center"></div>
                        </dl>
                    </div>
                        <div class="jiekuanxiangqing_rkj">
                            <div class="tittle_xqkj">投标总额<p><span>元</span></p></div>
                            <div class="tittle_xqkj">加入人次<p><span>人次</span></p></div>
                        </div>
                   
                        <div class="jiekuanxiangqing_rkj">
                            <div class="tittle_xqkj">还款总额<p><span>元</span></p></div>
                            <div class="tittle_xqkj">还款次数<p><span> 次</span></p></div>
                        </div>
                    <div class="clear"></div>
                </div>
                <div class="liuchengtu_jk">
                    <ul>
                        <li><span>1.账户充值</span><img src="/frontend/images/shuomingditu_icon.png"  title="下一步"/></li>
                        <li><span>2.挑选投资项目</span><img src="/frontend/images/shuomingditu_icon.png" title="下一步" /></li>
                        <li><span>3.投标后查看更多信息</span><img src="/frontend/images/shuomingditu_icon.png" title="下一步" /></li>
                        <li><span>4.有两个小时考虑时间是否放弃投标</span><img src="/frontend/images/shuomingditu_icon.png" title="下一步" /></li>
                        <li><span>5.等待借款人确认</span><img src="/frontend/images/shuomingditu_icon.png" title="下一步" /></li>
                        <li><span>6.轻松赚取收益</span></li>
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
