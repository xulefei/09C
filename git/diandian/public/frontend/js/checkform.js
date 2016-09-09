/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * @auther shanks
 */


var checkobj={
	mail:"email",         //验证邮箱格式
	phone:"PhoneCall",    //验证手机号码
	num:"jsfoot",         //验证数字格式
	chinese:"realname",   //验证中文汉字
	address:"address"     //验证空值
}
XformCheck(document.forms[0],checkobj);
/*
descript : XformCheck;
author   : popper.w
date     : 2008-6-22
@pram xfromElement 需要检测的form对象
@pram checkobj 设置需要检测的项
默认有mail（邮件地址）、phone（手机或固定电话）、num（数字）、chinese（汉字）、empty（是否为空）、length（长度）、url（url地址合法）等检测
//例如：如果某一项name为"xxx"需要检测email格式，则给checkobj中添加{mail:"xxx"}，如果仅仅是检测是否为空，则直接添加{xxx,"xxx"}即可*/
function XformCheck(xfromElement,checkobj){
	var om={};
	if(checkobj){
		om=checkobj
	}
	if(!xfromElement){
		return false;
	}
		for(var o in checkobj){
			xfromElement[checkobj[o]].onblur=function(e){
				e=window.event||e;
				var eSrc=e.srcElement||e.target;
				var Xvalue=trim(this.value);
				
				if(isEmpty(Xvalue)){
					ShowMes(eSrc,"此项不能为空","wrong");
				}else{
					switch(this.name){
						case om.mail:
					if(!isEmail(Xvalue)){
						ShowMes(eSrc,"邮箱地址不正确","wrong");
					}else{
						ShowMes(eSrc,"","right");
				}
				break;
				
				case om.phone:
				if(!isPhone(Xvalue)){
					ShowMes(eSrc,"电话号码格式不正确","wrong");
				}else{
					ShowMes(eSrc,"","right");
				}
				break;
	
				case om.num :
				if(!isNum(Xvalue)){
					ShowMes(eSrc,"只能是数字","wrong");
				}else{
					ShowMes(eSrc,"","right");
				}
				break;
	
				case om.chinese :
				if(!isChinese(Xvalue)){
					ShowMes(eSrc,"必须为汉字","wrong");
				}else{
					ShowMes(eSrc,"","right")
				}
				break;
	
				case om.url :
				if(!isUrl(Xvalue)){
					ShowMes(eSrc,"url地址不正确","wrong");
				}else{
					ShowMes(eSrc,"","right");
				}
				break;
	
				case om.length :
				if(!isProperLen(Xvalue)){
					ShowMes(eSrc,"长度不正确不正确","wrong");
				}else{
					ShowMes(eSrc,"","right");
				}
				break;
	
				default :
					ShowMes(eSrc,"","right")
			}
		}
	}
}

/*判断为空*/
function isEmpty(o){
	return o==""?true:false;
}
/*判断是否为合适长度 6-32 位*/
function isProperLen(o){
	var len=o.replace(/[^\x00-\xff]/g,"11").length;
	if(len>32||len<6){
		return false;
	}else{
		return true;
	}
}
/*判断是否为Email*/
function isEmail(o){
	var reg=/^\w+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/i;
	return reg.test(o);
}
/*判断url是否正确*/
function isUrl(o){
	var reg=/^(http\:\/\/)?(\w+\.)+\w{2,3}((\/\w+)+(\w+\.\w+)?)?$/;
	return reg.test(o);
}
/*判断是否为电话号码 可以是手机或 固定电话*/
function isPhone(v){
	var reg=/((15[89])\d{8})|((13)\d{9})|(0[1-9]{2,3}\-?[1-9]{6,7})/i;
	if(reg.test(v)){
		return true;
	}else{
		return false;
	}
}
function isNum(o){
	var reg=/[^\d]+/;
	return reg.test(o)?false:true;
}
function isChinese(o){
	var reg=/^[\u4E00-\u9FA5]+$/;
	return reg.test(o);
}
/*去除空白字符*/
function trim(str){
	return str.replace(/(^\s*)|(\s*$)/g, "");
}
function ShowMes(o,mes,type){
	if(!o.ele){
		var Xmes=document.createElement("div");
		document.body.appendChild(Xmes);
		o.ele=Xmes;
	}
	o.ele.className=type;
	o.ele.style.display="block";
	o.ele.style.left=(XgetPosition(o).x+220)+"px";
	o.ele.style.top=XgetPosition(o).y+"px";
	o.ele.innerHTML=mes;
	}
}
function XgetPosition(e){
	var left = 0;
	var top  = 0;
	while(e.offsetParent){
		left += e.offsetLeft;
		top  += e.offsetTop;
		e= e.offsetParent;
	}
	left += e.offsetLeft;
	top  += e.offsetTop;
	return {
		x:left, y:top
	};
}