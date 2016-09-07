// JavaScript Document
$(function() {
    //实名认证
    $("#smrzaj").click(function() {
        if ($("input[name='realname']").val() == "") {
            $(".zsxm").show();
        } else {
            $(".zsxm").hide();
        }
        if ($("input[name='idcard']").val() == "") {
            $(".sfzh").show();
			 $(".tscg1").html("<font color=\"#a9a9a9\"></font>");
        } else {
            $(".sfzh").hide();
        }
        if ($("input[name='idcard']").val() != "" && $("input[name='realname']").val() != "" && idcard() && realname()) {
            $.post('Safeinfo/realadd', $("#smyz").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".tscg1").html("<font color=\"#0E9DA9\">提交成功！</font>");
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } else {
                    $(".tscg1").html("<font color=\"#0E9DA9\">提交成功！</font>");
                    setTimeout(function() {
                        parent.location.reload();
                    }, 1000);
                }
            })

        }
    })
    //添加手机号
    $("#addphone").click(function() {
        if ($("input[name='phoneadd']").val() == "" || $("input[name='phone']").val() == "") {
            $(".yzts").html("<font color=\"#a9a9a9\">请输入完整信息！</font>");
        } else {
            $.post('Safeinfo/addphone', $("#phoneadd").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".yzts").html("<font color=\"#0E9DA9\">添加成功！</font>");
                    setTimeout(function() {
                        parent.location.reload();
                    }, 1000);
                } else if (str === '2') {
                    $(".yzts").html("<font color=\"#a9a9a9\">验证码输入错误！</font>");
                }
            })
        }
    })
    //修改手机号码
    $("#tjedit").click(function() {
        if ($("input[name='phoneedit']").val() == "" || $("input[name='txpass1']").val() == "") {
            $(".yzts").html("<font color=\"#a9a9a9\">请输入完整信息！</font>");
        } else {
            $.post('Safeinfo/phoneedit', $("#phoneedit").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".yzts").html("<font color=\"#0E9DA9\">验证成功！</font>");
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } else if (str === '2') {
                    $(".yzts").html("<font color=\"#a9a9a9\">验证码输入错误！</font>");
                } else if (str === '3') {
                    $(".yzts").html("<font color=\"#a9a9a9\">支付密码输入错误！</font>");
                } else if (str === '4'){
					$(".yzts").html("<font color=\"#a9a9a9\">您没有设置支付密码,请先设置！</font>");
					}
            })
        }
    })
    //验证验证码是否正确
    $("#tjyzm").click(function() {
        if ($("input[name='phonecode']").val() == "") {
            $(".yzts").html("<font color=\"#a9a9a9\">请输入手机验证码！</font>");
        } else {
            $.post('Safeinfo/phonecode', $("#phoneyz").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".yzts").html("<font color=\"#0E9DA9\">验证成功！</font>");
                    setTimeout(function() {
                         parent.location.reload();
                    }, 1000);
                } else {
                    $(".yzts").html("<font color=\"#a9a9a9\">验证失败！</font>");
                }
            })
        }
    })
    
    //验证验证码是否正确 之找回提现密码
    $("#tjyzmzh").click(function() {
        if ($("input[name='phonecode1']").val() == "") {
            $(".yzts").html("<font color=\"#a9a9a9\">请输入手机验证码！</font>");
        } else {
            $.post('Safeinfo/phonecode1', $("#txzh").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".yzts").html("<font color=\"#0E9DA9\">验证成功！</font>");
                    setTimeout(function() {
						  parent.location.reload();
						}, 1000);
                } else {
                    $(".yzts").html("<font color=\"#a9a9a9\">验证失败！</font>");
                }
            })
        }
    })
    //获取验证码
    $(".hqyzm").click(function() {
        $.post('Safeinfo/code', function(str) {
            str = $.trim(str);
            if (str === '1') {
                fun_timedown(60);

                $(".yzts").html("<font color=\"#0E9DA9\">已经发送！</font>");
                $(".hqyzm").attr("disabled", "disabled");
                $(".hqyzm").css({"color": "#000", "background-color": "#999"});
                setTimeout(function() {
                    $(".yzts").html("");
                }, 3000);

            } else {
                $(".yzts").html("<font color=\"#a9a9a9\">发送失败！</font>");
                setTimeout(function() {
                    parent.location.reload();
                }, 1000);
            }
        })
    })

    //获取输入的手机验证码
    $("#zm1").click(function() {
        if ($("input[name='phoneadd']").val() == "") {
            $(".yzts").html("<font color=\"#a9a9a9\">请输入手机号码！</font>");
        } else{
            $.post('Safeinfo/code1', $("#phoneadd").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    fun_timedown(60);

                    $(".yzts").html("<font color=\"#0E9DA9\">已经发送！</font>");
                    $("#zm1").attr("disabled", "disabled");
                    $("#zm1").css({"color": "#000", "background-color": "#999"});
                    setTimeout(function() {
                        $(".yzts").html("");
                    }, 3000);

                } else {
                    $(".yzts").html("<font color=\"#a9a9a9\">发送失败！</font>");
                    // setTimeout(function(){location.reload();},1000);
                }
            })
        }
    })
    //密码修改
    $("#passaj").click(function() {
        if ($("input[name='pass']").val() == "") {
            $(".pass").show();
			  $(".tscg2").html("<font color=\"#a9a9a9\"></font>");
        } else {
            $(".pass").hide();
        }
        if ($("input[name='newpass']").val() == "") {
            $(".newpass").show();
        } else {
            $(".newpass").hide();
        }
        if ($("input[name='rpass']").val() == "") {
            $(".rpass").show();
        } else {
            $(".rpass").hide();
        }
        if ($("input[name='pass']").val() != "" && $("input[name='newpass']").val() != "" && $("input[name='rpass']").val() != "" && pass()) {
            $.post('Safeinfo/passedit', $("#pass").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".tscg2").html("<font color=\"#0E9DA9\">提交成功！</font>");
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } else if (str === '2') {
                    $(".tscg2").html("<font color=\"#a9a9a9\">原始密码错误！</font>");
                    //setTimeout(function(){location.reload();},1000);
                } else if (str === '3') {
                    $(".tscg2").html("<font color=\"#a9a9a9\">两次密码输入不一致！</font>");
                    //setTimeout(function(){location.reload();},1000);
                }
            })

        }
    })


    //添加邮件
    $("#emailaj").click(function() {
        if ($("input[name='email']").val() == "") {
            $(".email1").show();
        } else {
            $(".email1").hide();
        }
        var email = check_email($("input[name='email']").val());
        if ($("input[name='email']").val() != "" && email) {
            $.post('Safeinfo/emailadd', $("#yj").serialize(), function(str) {
                str = $.trim(str);
                if (str === '1') {
                    $(".tscg3").html("<font color=\"#0E9DA9\">提交成功！</font>");
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } else if (str === '2') {
                    $(".tscg3").html("<font color=\"#a9a9a9\">该邮件已经被实用！</font>");
                }
            })

        }
    })

    //提现密码添加
    $("#txaj").click(function() {
        if ($("input[name='txpass']").val() == "") {
            $(".txpass").show();
        } else {
            $(".txpass").hide();
        }
        if ($("input[name='rtxpass']").val() == "") {
            $(".rtxpass").show();
        } else {
            $(".rtxpass").hide();
        }
        if ($("input[name='txpass']").val() != "" && $("input[name='rtxpass']").val() != "" && txpass()) {
            $.post('Safeinfo/txpassadd', $("#txadd").serialize(), function(data) {
                 $(".tscg4").html(data.msg);
                if (data.code === '10000') {
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } 
            },'json');

        }
    })

    //修改提现密码
    $("#txeditaj").click(function() {
        if ($("input[name='ytxpass']").val() == "") {
            $(".ytxpass").show();
			  $(".tscg5").html("<font color=\"#a9a9a9\"></font>");
        } else {
            $(".ytxpass").hide();
        }
        if ($("input[name='newtxpass']").val() == "") {
            $(".newtxpass").show();
        } else {
            $(".newtxpass").hide();
        }
        if ($("input[name='rnewtxpass']").val() == "") {
            $(".rnewtxpass").show();
        } else {
            $(".rnewtxpass").hide();
        }

        if ($("input[name='ytxpass']").val() != "" && $("input[name='newtxpass']").val() != "" && $("input[name='rnewtxpass']").val() != "" && txpassLength()) {
            $.post('Safeinfo/txpassedit', $("#txedit").serialize(), function(data) {
                 $(".tscg5").html(data.msg);
                if (data.code === '10000') {
                    setTimeout(function() {
                       parent.location.reload();
                    }, 1000);
                } 
            },'json');

        }
    })
    $("#nameshow").click(function() {
        if ($(".namexl").fadeIn()) {
            $("#namehide").show();
            $('#nameshow').hide();
			$('#shimingrenzheng02').show();
            exit();
        }
        ;
    });
    $("#namehide").click(function() {
        if ($(".namexl").fadeOut()) {
            $("#namehide").hide();
            $('#nameshow').show();
			$('#shimingrenzheng02').hide();
            exit();
        }
        ;
    });

    $("#clokshow").click(function() {
        if ($(".passxl").fadeIn()) {
            $("#clokhide").show();
            $('#clokshow').hide();
            exit();
        }
        ;
    });
    $("#clokhide").click(function() {
        if ($(".passxl").fadeOut()) {
            $("#clokhide").hide();
            $('#clokshow').show();
            exit();
        }
        ;
    });
    $("#emailshow").click(function() {
        if ($(".emailxl").fadeIn()) {
            $("#emailhide").show();
            $('#emailshow').hide();
            exit();
        }
        ;
    });
    $("#emailhide").click(function() {
        if ($(".emailxl").fadeOut()) {
            $("#emailhide").hide();
            $('#emailshow').show();
            exit();
        }
        ;
    });
    $("#phoneshow").click(function() {
        if ($(".phonexl").fadeIn()) {
            $("#phonehide").show();
			$("#bangdingshouji02").show();
            $('#phoneshow').hide();
            exit();
        }
        ;
    });
    $("#phonehide").click(function() {
        if ($(".phonexl").fadeOut()) {
            $("#phonehide").hide();
			$("#bangdingshouji02").hide();
            $('#phoneshow').show();
            exit();
        }
        ;
    });
	
	 $("#phoneshow1").click(function() {
        if ($(".phonexl").fadeIn()) {
            $("#phonehide1").show();
            $('#phoneshow1').hide();
			$("#bangdingshouji03").show();
            exit();
        }
        ;
    });
    $("#phonehide1").click(function() {
        if ($(".phonexl").fadeOut()) {
            $("#phonehide1").hide();
            $('#phoneshow1').show();
			$("#bangdingshouji03").hide();
            exit();
        }
        ;
    });
	 $("#phoneshow2").click(function() {
        if ($(".phonexl").fadeIn()) {
            $("#phonehide2").show();
            $('#phoneshow2').hide();
			$("#bangdingshouji04").show();
            exit();
        }
        ;
    });
    $("#phonehide2").click(function() {
        if ($(".phonexl").fadeOut()) {
            $("#phonehide2").hide();
            $('#phoneshow2').show();
			$("#bangdingshouji04").hide();
            exit();
        }
        ;
    });
    $("#txshow1").click(function() {
        if ($(".txxl").fadeIn()) {
            $("#txhide1").show();
            $('#txshow1').hide();
			$('#jiaoyimima02').show();
            exit();
        }
        ;
    });
    $("#txhide1").click(function() {
        if ($(".txxl").fadeOut()) {
            $("#txhide1").hide();
            $('#txshow1').show();
			$('#jiaoyimima02').hide();
            exit();
        }
        ;
    });
	
	  $("#txshow").click(function() {
        if ($(".txxl").fadeIn()) {
            $("#txhide").show();
            $('#txshow').hide();
			$('#jiaoyimima03').show();
			$('#jiaoyimima04').hide();
			 $("#zhhide").hide();
			 $("#zhshow").show();
			 $("#findpass").show();
            exit();
        }
        ;
    });
    $("#txhide").click(function() {
        if ($(".txxl").fadeOut()) {
            $("#txhide").hide();
            $('#txshow').show();
			$('#jiaoyimima03').hide();
			$('#findpass').hide();
            exit();
        }
        ;
    });

    $("#zhshow").click(function() {
        if ($(".zhpass").fadeIn()) {
            $("#zhhide").show();
            $('#zhshow').hide();
			$('#jiaoyimima04').show();
			$('#jiaoyimima03').hide();
			$('#txshow').show();
			$('#txhide').hide();
            exit();
        }
        ;
    });
    $("#zhhide").click(function() {
        if ($(".zhpass").fadeOut()) {
            $("#zhhide").hide();
            $('#zhshow').show();
			$('#jiaoyimima04').hide();
			$('#findpass').hide();
            exit();
        }
        ;
    });
});

//判断email
function check_email(val) {
    var reg = /^[a-zA-Z0-9_-]+(\.([a-zA-Z0-9_-])+)*@[a-zA-Z0-9_-]+[.][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*$/;
    if (val != "" && !reg.test(val)) {
        $(".tscg3").html("<font color=\"#a9a9a9\">邮件格式不正确！</font>");
        return false;
    } else {
        return true;
    }
}
//判断登录密码长度
function pass() {
    if ($("input[name='newpass']").val().length > 5 && $("input[name='newpass']").val().length < 13) {
        return true;
    } else {

        $(".tscg2").html("<font color=\"#a9a9a9\">密码必须要6-12位字母、数字和符号！</font>");
        return false;
    }
}
//判断添加提现密码长度
function txpass() {
    if ($("input[name='txpass']").val().length > 5 && $("input[name='txpass']").val().length < 13) {
        return true;
    } else {

        $(".tscg4").html("<font color=\"#a9a9a9\">密码必须要6-12位字母、数字和符号！</font>");
        return false;
    }
}
//判断修改提现密码长度
function txpassLength() {
    if ($("input[name='newtxpass']").val().length > 5 && $("input[name='newtxpass']").val().length < 13) {
        return true;
    } else {

        $(".tscg5").html("<font color=\"#a9a9a9\">密码必须要6-12位字母、数字和符号！</font>");
        return false;
    }
}
//判断身份证号码长度
function idcard() {
    if ($("input[name='idcard']").val().length > 17) {
        return true;
    } else {

        $(".tscg1").html("<font color=\"#a9a9a9\">身份证号码必须是18位！</font>");
        return false;
    }
}
//判断真实姓名必须是中文
function realname() {
    //var reg=/^[\u0391-\uFFE5]+$/;

    var reg = /^[\u4e00-\u9fa5]+$/;
    if (reg.test($("input[name='realname']").val())) {
        return true;
    } else {
        $(".tscg1").html("<font color=\"#a9a9a9\">真实姓名必须是中文!</font>");
        return false;
    }

}

//60秒倒计时
function fun_timedown(time)
{
    if (time == 'undefined')
        time = 60;
    //$("#hqyzm").html(time+"秒");
    $(".zm").attr("value", time + "秒");

    time = time - 1;
    if (time >= 0)
    {
        setTimeout("fun_timedown(" + time + ")", 1000);
    } else
    {
        $(".zm").attr("disabled", "");
        $(".zm").css({"color": "#FFF", "background-color": "#0E9DA9"});
        $(".zm").attr("value", "获取验证码");

    }
}