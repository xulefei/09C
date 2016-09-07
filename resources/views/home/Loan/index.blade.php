<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @include('home.Public.header')
        <link href="frontend/css/user.css" rel="stylesheet" type="text/css" />
        <script src="frontend/js/jquery.js" type="text/javascript"></script>
        <link href="frontend/css/thickbox.css" rel="stylesheet" type="text/css" />
        <script src="frontend/js/thickbox-compressed.js" type="text/javascript"></script>
        <script src="frontend/js/jquery.cookie.js" type="text/javascript"></script>
    </head>
    <body>
        <!--顶部导航-->
        @include('home.Public.main_nav')
        <!--顶部导航end-->
        <!--导航栏开始-->
        <div class="yinying_jrb2"></div>
        <!--导航栏结束-->
        <div class="zhutineirong">
            <!--左边栏开始-->
            @include('home.Public.left_nav')
            <!--左边栏结束-->  
            <!--右边栏开始--> 
            <div class="right">
                <div class="right_top4">
                    <div class="zongjine_lkj">
                        借款总金额<p><b></b>&nbsp;元</p>
                    </div>
                    <div class="zongjine_rkj">
                        <ul>
                            <li>逾期金额<p><b></b>&nbsp;元</p></li>
                            <!--   <li>待还金额<p>0.00元</p></li>-->
                            <li>近一个月应还金额<p><b></b>&nbsp;元</p></li>
                            <li style="float:right; margin:0;"><a href="" class="jrb_but02">我要借款</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--还款开始-->
                <div class="right_bottom3">
                    <div class="tab">
                        <div  id="tz"> <a href="" class="cur">全部</a></div><div  id="tz"> <a href="" <class="cur">还款中的借款</a></div><div id="sx" ><a href="" class="cur">已还清的借款</a></div><div id="ts" ><a href="" class="cur">申请中借款</a></div><div id="sd" ><a href="" class="cur">收到的借款</a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="right_top2" id="right_top1" style="display:none" >
                         <div class="jiedaizhanghu_top2" >
                            <span>借款总金额：<b></b>&nbsp;元</span>
                        </div>
                        <div class="touzi_liebiao_little">
                            <!--还款中的借款-->
                            <table class="touzi_liebiao_conlittle">
                                <thead>
                                    <tr>
                                        <th>借款标题</th>
                                        <th>借款时间</th>
                                        <th>借款金额</th>
                                        <th>已还金额</th>
                                        <th>还款期限</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <volist name="data_list" id="vo" >
                                        <tr>
                                            <td class="tl_left">
                                                
                                                <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标"  class="png_fix"/>
                                                
                                                <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                                
                                                <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                                <span><a href="" target="_blank" title="{$vo.title}"></a></span>
                                            </td>
                                            <td></td>
                                            <td>元</td>
                                            <td>元</td>
                                            <td>个月</td>
                                            <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                                        </tr>
                                    </volist>
                                    <tr>
                                        <td colspan="7">
                                            <!--翻页-->
                                            <div class="fanye_jrb">
                                                <div class="fanye_fr">
                                                   
                                                </div>
                                            </div>
                                            <!--翻页-->
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="7"><div align="center">暂无记录</div></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!--还款中的借款end-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="right_top2" id="right_top1" style="display:none" >
                         <div class="jiedaizhanghu_top2" >
                            <span>待还款总金额：<b>
                                      0.00
                                    </b>&nbsp;元</span>
                        </div>
                        <div class="touzi_liebiao_little">
                            <!--还款中的借款-->
                            <table class="touzi_liebiao_conlittle">
                                <thead>
                                    <tr>
                                        <th>借款标题</th>
                                        <th>借款时间</th>
                                        <th>借款金额</th>
                                        <th>已还金额</th>
                                        <th>还款期限</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td class="tl_left">
                                                
                                                <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标"  class="png_fix"/>
                                                
                                                <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                                
                                                <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                                <span><a href="" target="_blank" title="{$loan.title}"></a></span>
                                            </td>
                                            <td></td>
                                            <td> 元</td>
                                            <td>元</td>
                                            <td>个月</td>
                                            <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                                        </tr>
                                        <else/>
                                        <tr>
                                            <td colspan="6">
                                                <!--翻页-->
                                                <div class="fanye_jrb">
                                                    <div class="fanye_fr">
                                                        
                                                    </div>
                                                </div>
                                                <!--翻页-->
                                            </td>
                                        </tr>
                                    </if>	
                                </tbody>
                            </table>
                            <!--还款中的借款end-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="right_top2" id="right_top2" style="display:none">
                         <div class="jiedaizhanghu_top2">
                            <span>已还清总金额：<b>
                                    
                                        0.00
                                    </b>&nbsp;元</span>
                        </div>
                        <div class="touzi_liebiao_little">
                            <table class="touzi_liebiao_conlittle">
                                <thead>
                                    <tr>
                                        <th>借款标题</th>
                                        <th>最后还款日期</th>
                                        <th>借款金额</th>
                                        <th>还款期限</th>
                                        <!--<th>还款进度</th>-->
                                        <th></th>
                                    </tr>
                                </thead>
                                <!--已还清的借款-->
                                <tbody>
                                    
                                        <volist name="data_list" id="vo" >
                                            <tr>
                                                <td class="tl_left">
                                                    
                                                    <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标"  class="png_fix"/>
                                                    
                                                    <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                                   
                                                    <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                                    <span><a href="" target="_blank" title=""></a></span>
                                                </td>
                                                <td></td>
                                                <td>元</td>
                                                <td>个月</td>
                                                <!--<td>{$vo.schedule}%</td>-->
                                            </tr>
                                        </volist>
                                        <tr>
                                            <td colspan="6">
                                                <!--翻页-->
                                                <div class="fanye_jrb">
                                                    <div class="fanye_fr">
                                                        
                                                    </div>
                                                </div>
                                                <!--翻页-->
                                            </td>
                                        </tr>
                                        <else/>
                                        <tr>
                                            <td colspan="6"><div align="center">暂无记录</div></td>
                                        </tr>
                                    </if>
                                </tbody>
                                <!--已还清的借款end-->
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>       
                    <div class="right_top2" id="right_top3" style="display:none" >
                         <div class="jiedaizhanghu_top2">
                            <span>申请总金额：<b></b>&nbsp;元</span>
                        </div>
                        <div class="touzi_liebiao_little">
                            <table class="touzi_liebiao_conlittle">
                                <thead>
                                    <tr>
                                        <th>借款标题</th>
                                        <th>发布时间</th>
                                        <th>借款金额</th>
                                        <!--<th>借款进度</th>-->
                                        <th>还款期限</th>
                                        <th>状态</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        
                                            <tr>
                                                <td class="tl_left">
                                                   
                                                    <img src="frontend/images/shiwu_tubiao.png"  title="有抵押信用标"  class="png_fix"/>
                                                    
                                                    <img src="frontend/images/xinyong_tubiao.png"  title="无抵押信用标" alt="无抵押信用标"  class="png_fix"/>
                                                    
                                                    <img src="frontend/images/quanbao_tubiao.png" title="平台承诺100%保本" alt="平台承诺100%保本" class="png_fix" />
                                                    <span><a href="" target="_blank" title="">{</a></span>
                                                </td>
                                                <td></td>
                                                <td>元</td>
                                                <td>个月</td>
                                                <td>申请中
                                                    审核未通过
                                                    筹款中
                                                </td>
                                                <td><a href="" target="_blank" class="list_chakan_but"></a></td>
                                            </tr>
                                        </volist>
                                        <tr>
                                            <td colspan="6">
                                                <!--翻页-->
                                                <div class="fanye_jrb">
                                                    <div class="fanye_fr">
                                                        
                                                    </div>
                                                </div>
                                                <!--翻页-->
                                            </td>
                                        </tr>
                                        <else/>
                                        <tr>
                                            <td colspan="6"><div align="center">暂无记录</div></td>
                                        </tr>
                                    </if>
                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="right_top2" id="right_top4"style="display:none" >
                         <form action="" method="post">
                            <div class="jiedaizhanghu_top2">
                                <span style=" margin-left:25px;">已选总金额：<b>
                                        
                                            
                                       
                                    </b>&nbsp;元</span>
                                <span>已收到总金额：<b>
                                        </b>&nbsp;元</span>
                            </div>
                            <div class="touzi_liebiao_little">
                                <table class="touzi_liebiao_conlittle">
                                    <thead>
                                        <tr>
                                            <th>投资人</th>
                                            <th>
                                                <a href="">借出时间
                                                    
                                                        <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="借款时间降序" />
                                                      
                                                        <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序" />
                                                  
                                                </a></th>
                                            <th><a href="" >借款金额
                                                    
                                                        <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="借款时间降序" />
                                                        <else/>
                                                        <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序" />
                                                    </if>
                                                </a>
                                            </th>
                                            <th><a href="" >借款利率
                                                    
                                                        <img src="frontend/images/tz_list_px_arrow_clicked_down.gif" alt="借款时间降序" />
                                                        <else/>
                                                        <img src="frontend/images/tz_list_px_arrow_default.gif" alt="默认排序" />
                                                    </if>
                                                </a></th>
                                            <th>状态</th>
                                            <th>选择</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            
                                                <tr>
                                                    <input type="hidden" value="" id="sId" />
                                                    <input type="hidden" value="" id="uId" />
                                                    <input type="hidden" value="" id="money" />
                                                    <input type="hidden" value="" id="bid" />
                                                    <td class="tl_left">
                                                        <img  src="frontend/images/shiwu_tubiao.png"/>
                                                        <!--<a href="{:U('Repayment/index',array('id'=>$vo['id']))}>{$vo.u_username}</a>-->
                                                        <a href="#TB_alert=true?height=500&width=620&inlineId=myOnPageContent" class="thickbox" type="button" title=""></a>
                                                    </td>
                                                    <td></td>
                                                    <td> 元</td>
                                                    <td>%</td>
                                                    <td>
                                                        未操作</if>
                                                        同意</if>
                                                        不同意</if>
                                                        收益中(只读)</if>
                                                        已还清(只读)</if>
                                                    </td>
                                                    <td >
                                                        <input type="checkbox" disabled ="disabled"   checked="checked" class="ids" j_money="" j_id="" j_lilv=""   j_uid="" j_obj_id=""  j_status="yes" name="cid[]"  id="cIds" style=" border:0; width:25px; height:25px;"></td>
                                                </tr>
                                            </volist>
                                            <tr>
                                                <td colspan="6">
                                                    <!--翻页-->
                                                    <div class="fanye_jrb">
                                                        <div class="fanye_fr">
                                                            
                                                        </div>
                                                    </div>
                                                    <!--翻页-->
                                                </td>
                                            </tr>
                                            <else/>
                                            <tr>
                                                <td colspan="6"><div align="center">暂无记录</div></td>
                                            </tr>
                                        </if>
                                        <table id="json_table" style="display:none;">
                                            <th width="100">此标将被拆分</th>
                                            <tr>
                                                <td width="80">拆分的用户</td>
                                                <td width="100">拆分的金额</td>
                                                <td width="80">拆分的利率</td>
                                            </tr>
                                            <tr>
                                                <td id="json_uid"></td>
                                                <td id="json_money" ></td>
                                                <td id="json_lilv"></td>
                                            </tr>
                                        </table>

                                    </tbody>
                                </table>
                                <div class="queren_kj">
                                    <input type="button" value="确认借款" id="submitForm" class="zengsan_kj" />
                                    <input type="hidden" value="" id="hasSelected" />
                                    <input type="hidden" value="" id="objTotalMoney" />
                                    <input type="button"  id="abandon"  j_obj_id="" value="取消借款" class="zengsan_kj"  style="background: #666"/>
                                </div>
                            </div>   
                            <input type="hidden" id="J_data_obj_id" name="obj_id" value="" />
                        </form>
                        <div class="clear"></div>
                    </div> 
                </div>
                <div class="clear"></div>
            </div>

            <!--右边栏结束-->   
            <div class="clear"></div>   
        </div>
        @include('home.Public.footer')        
    </body>
</html>
