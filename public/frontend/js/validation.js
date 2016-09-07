
/**====================================================================================================================
 * 表单验证工具  //为了避免一个页面有多个form表单时不相互影响，使用函数操作对象
 * --------------------------------------------------------------------------------------------------------------------
 * copyRight wsmalltiger@163.com
 * @ create at 2012-02-09
 * @ author wang_xh
 * @ email  : wsmalltiger@163.com
 * ====================================================================================================================
 *
 *************************************JAVA QQ 技术交流群 SoftWare Group 58156559*****************************************
 *
 */
/**********************************************************************************************************************
使用说明：
var _fm=new formMatches({
	formId: '', //要验证的表单id
	showType: '' //消息提示类型 0 div（默认）,1 alert弹框
});
_fm.match({//调用匹配方法，参数（数组）
	name: '', //form表单下的控件name，name与id写一个即可，如果有共存，则id优先
	id: '', //要在当前form下验证的控件id
	dataType: '',数据类型 str 字符串（默认）,int 数字（正，负，零）,email 邮件,float 小数（正，负，零）,float2 小数（正）,date 日期,time 时间,dateTime 精确时间,phone 电话,cardNO 省份证,hasCN 必须含有中文
				only_CN 只能中文,only_En 只能英文,only_EN 只能英文大写,only_en 只能英文小写,only_num 只能正整数,only_numEN 只能是数字或英文
				//*****************************************************************************************************************-///
				//类型可自定义，需在FM.REARR中有对应的正则匹配  格式要求：* regExp_* 例：新定义一个类型 demo1 则在FM.REARR中声明 regExp_demo1 。   -///
				// only_* 类型的验证，将在输入时验证，即只能输入匹配正则的数据（只在ie中有效，chrome，firefox 暂时还不支持）                         -///
				//*****************************************************************************************************************-///
	must: '',//是否是必输项 true，false(默认)
	maxLength: '', //最大长度
	minLength: '', //最小长度
	maxLen: '',//最大长度，中文为两个字符
	minLen: '',//最小程度，中文为两个字符
	maxNum: '', //最大值(仅支持数字，日期)
	minNum: '', //最小值(仅支持数字，日期)
	regExp: '', //自定义正则验证 (*** 如果存在此项，将忽略所有系统自带验证 ***)
	focus:'', onfocus时的提示消息
	focusEvent: function(){},//onfocus时调用事件，默认将在验证后调用，如果有多个函数要调用，可参考 function (){aa();bb();}
	focusEventSeq: '0',//onfocus时调用事件的顺序 0验证后（默认），1验证前
	blurEvent: '',onblur时调用事件，默认将在验证后调用
	blurEventSeq: '0',//onblur时调用事件的顺序 0验证后（默认），1验证前
	success: '',//验证通过提示的消息 （默认：验证通过！）
	successEvent: function (){},//验证通过后调用的方法
	fail: '',验证不通过提示信息 （默认：您的输入有误！）
});
_fm.remove({id:'',name:''});//移除验证控件的name或id，id优先
_fm.matchAll();//验证全部，返回验证结果（true or false）
**********************************************************************************************************************/
var timeOut=null;

function formMatches(_config) {//初始化
	_config = _config||{};
	var _div=document.createElement('div');
	_div.id='wsmalltiger20120209';
	_div.style.position="absolute";
	document.body.appendChild(_div);
	FM.wDivHide();
	var _fo = FM.byId(_config.formId);
	FM.config.showType = (!_config.showType || _config.showType === "") ? "0" : _config.showType;
	if (_fo) {
		return new _fromMatchseOnly(_fo,new Array());
	}
	FM.error("\u521d\u59cb\u5316form\u8868\u5355ID\u4e0d\u5b58\u5728\uff01");
	return;
}

function _fromMatchseOnly(_form,_domData) {
	this.matchAll = function () {//匹配全部
		return FM._wxhlFromMatchesAll(_domData);
	};
	this.match = function (settings) {//加载匹配项函数
		settings=settings||{};
		var _id=settings.id;
		var _dom=null;
		if(_id){//id优先
			_dom=FM.byId(_id);
		}else{
			var _name=settings.name;
			if(_name){
				_dom=eval("_form."+_name);
			}else{
				FM.error("找不到对象！（当前控件id和name属性都为null）");
				return false;
			}
		}
		if(!_dom){return false;}//如果控件不存在，不继续执行
		if(_dom.tagName!='SELECT'){
			if( _dom.length!== undefined && _dom[_dom.length-1].type !== null && _dom[_dom.length-1].type.toUpperCase()!='RADIO'&&_dom[_dom.length-1].type.toUpperCase()!='CHECKBOX'){
				_dom=_dom[0];//如果name存在重复，取第一个
			}
		}
		var _data={
			dom: _dom,
			_oldBorderColor: _dom.length===undefined?_dom.style.borderColor:_dom[0].style.borderColor,
			dataType: settings.dataType,
			must: settings.must,
			maxLength: settings.maxLength,
			minLength: settings.minLength,
			maxLen: settings.maxLen,
			minLen: settings.minLen,
			maxNum: settings.maxNum,
			minNum: settings.minNum,
			regExp: settings.regExp,
			focus: settings.focus,
			focusEvent: settings.focusEvent,
			focusEventSeq: settings.focusEventSeq,
			blurEvent: settings.blurEvent,
			blurEventSeq: settings.blurEventSeq,
			success: settings.success,
			successEvent: settings.successEvent,
			fail: settings.fail};
		_domData.push(_data);//将要验证的控件放入Array中
		FM.bind(_dom,'focus',function (){//绑定获得焦点事件
			if(settings.focusEventSeq!='0' && settings.focusEvent){//如果回调函数再提示前执行
				FM._runEvent(settings.focusEvent);
			}
			FM.msgAlert(2,settings.focus,_dom);//提示
			if(settings.focusEventSeq=='0' && settings.focusEvent){//如果回调函数再提示后执行
				FM._runEvent(settings.focusEvent);
			}
		},false);
		FM.bind(_dom,'blur',function (){//绑定失去焦点事件
			if(settings.blurEventSeq!='0' && settings.blurEvent){//如果回调函数再验证前执行
				FM._runEvent(settings.blurEvent);
			}
			if(!_dom.unbind){//如果控件没有解绑验证
				var b=false;
				if(_dom.tagName=='SELECT'){
					b=FM.matchSelect(_data);
				}else if(_dom.tagName=='TEXTAREA'){
					b=FM.matchTextArea(_data);
				}else if(_dom.tagName=='INPUT'){
					b=FM.matchInput(_data);
				}
			}
			if(settings.blurEventSeq=='0' && settings.blurEvent){//如果回调函数再验证后执行
				FM._runEvent(settings.blurEvent);
			}
			return b;
		},false);
		var _tp=_data.dataType;//only 或者int类型的，再输入时控制
		if(_tp && (_tp.indexOf('only')!=-1 || _tp=='int')){
			FM.bind(_dom,'keypress',function (){
				return FM.regInput(_dom,new RegExp(eval('FM.REARR.regExp_'+_tp)),String.fromCharCode(event.keyCode));
			},false);
			FM.bind(_dom,'paste',function (){
				return FM.regInput(_dom,new RegExp(eval('FM.REARR.regExp_'+_tp)),window.clipboardData.getData('Text'));
			},false);
			FM.bind(_dom,'drop',function (){
				return FM.regInput(_dom,new RegExp(eval('FM.REARR.regExp_'+_tp)),event.dataTransfer.getData('Text'));
			},false);
			if(_tp!='only_CN'){
				_dom.style.imeMode='disabled';
			}
		}
	};
	this.remove=function(settings){//解除验证
		FM.wDivHide();
		var _id=settings.id;
		var _dom=null;
		if(_id){
			_dom=FM.byId(_id);
		}else{
			var _name=settings.name;
			if(_name){
				_dom=eval("_form."+_name);
				_dom=_dom.length===undefined?_dom:_dom[0];
			}else{
				FM.error("找不到对象！（当前控件id和name属性都为null）");
				return false;
			}
		}
		if(!_dom){return false;}
		_dom.unbind=true;//设置解除绑定属性
		_dom.style.borderColor='';
		_domData=_domData._remove(_domData._indexOf(_dom));//移除验证Array
	};
	/*FM.bind(_form,'submit',function (){
		return FM._wxhlFromMatchesAll(_domData);
	},false);*/
}


var FM = {byId:function (_id) {
	return document.getElementById(_id);
}, byName:function (_name) {
	return document.getElementsByName(_name);
}, byTagName:function (_tagName) {
	return document.getElementsByTagName(_tagName);
}, config:{//默认参数
	showType:"0", 
	successMsg: '验证通过！',
	failMsg: '您的输入有误！',
	failBXMsg: '该项为必选项！',
	failBSMsg: '该项不能为空！',
	dataType: 'str'
}, REARR: {//正则验证集合，要验证的dataType需在此集合中存在，规则 regExp_*   用户可自定义类型，与FM.matchValue函数关连，方便日后维护
	regExp_date: '^([0-9]{1,4})(-|\/)([0-9]{1,2})(-|\/)([0-9]{1,2})$',
	regExp_time: '^([0-9]{1,2})(:)?([0-9]{1,2})(:)?([0-9]{1,2})$',
	regExp_dateTime: '^([0-9]{1,4})(-|\/)([0-9]{1,2})(-|\/)([0-9]{1,2}) ([0-9]{1,2})(:)?([0-9]{1,2})(:)?([0-9]{1,2})$',
	regExp_email: '^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$',
	regExp_phone: '^(([0\\+]\\d{2,3}-)?(0\\d{2,3})-)?(\\d{7,8})(-(\\d{3,}))?$',
	regExp_cardNO: '^[1-9]([0-9]{14}|([0-9]{13}[0-9a-zA-Z]{4}))$',
	regExp_hasCN: '^\\.|[\u4E00-\u9FA5]+|\\.$',
	regExp_only_CN: '^[\u4E00-\u9FA5]*$',
	regExp_only_En: '^[a-zA-Z]*$',
	regExp_only_EN: '^[A-Z]*$',
	regExp_only_en: '^[a-z]*$',
	regExp_only_num: '^[1-9]\\d*$',
	regExp_only_numEN: '^[0-9a-zA-Z]*$',
	regExp_int: '^([+-]?)[1-9]\\d*$',
	regExp_float: '^([+-]?)\\d{1,8}(\\.\\d{1,2})?$',
	regExp_float2: '^\\d{1,8}(\\.\\d{1,2})?$'
},error:function (errorMsg) {
	alert(" formMatches ERROR :\n\n " + errorMsg);
},msgAlert: function(flag,msg,dom){//消息提示函数
	if(flag==1){//1  验证失败
		if(this.config.showType!='0'){//消息提示类型，非0就弹框
			alert(msg);
		}else{//默认div显示
			this.wDiv(1,msg,this.getTop(dom),this.getLeft(dom));
		}
	}else if(flag===0){//验证成功
		this.wDiv(0,msg,this.getTop(dom),this.getLeft(dom));
	}else{//获得焦点时提示
		if(msg && msg!=='' && msg !== undefined){
			this.wDiv(2,msg,this.getTop(dom),this.getLeft(dom));
		}
	}
	return false;
},_runEvent: function (ev){//执行事件
	if(typeof(ev)=='function'){
		ev();
	}else{
		if(ev.indexOf(")")!=-1){
			eval(ev);
		}else{
			eval(ev+"()");
		}
	}
},regInput: function (obj, reg, inputStr){//这则匹配必输项
	var docSel= document.selection.createRange();
	if (docSel.parentElement().tagName != "INPUT" && docSel.parentElement().tagName != "TEXTAREA"){return false;}
	oSel = docSel.duplicate();
	oSel.text = "";
	var srcRange= obj.createTextRange();
	oSel.setEndPoint("StartToStart", srcRange);
	var str = oSel.text + inputStr + srcRange.text.substr(oSel.text.length);
	return reg.test(str);
},matchValue: function (val,type){//自定义验证函数，type需在FM.REARR中有定义
	if(!val||val===''){return true;}
	var _reArr=eval('FM.REARR.regExp_'+type);
	if(_reArr===undefined){
		FM.error('找不到需要的正则匹配！');
		return false;
	}
	var _reg=new RegExp(_reArr);
	return _reg.test(val);
},getCNLength: function (str){
	return str.replace(/[^\x00-\xff]/g,"**").length;
},matchSelect: function (data,b){//匹配下拉框
	if((data.must||data.must=='true')&&data.dom.value===''){
		data.dom.style.borderColor='red';
		FM.msgAlert(1,FM.config.failBXMsg,data.dom);
		return false;
	}
	if(!b){//如果是匹配全部，则成功的不提示
		FM.msgAlert(0,data.success||FM.config.successMsg,data.dom);
	}
	data.dom.style.borderColor=data._oldBorderColor;
	timeOut=setTimeout('FM.wDivHide()',1000);
	if(data.successEvent){//执行验证成功回调函数
		FM._runEvent(data.successEvent);
	}
	return true;
},matchTextArea: function (data,b){//匹配textarea
	var _regExp=data.regExp;
	var _value=data.dom.value;
	var dataType=data.dataType;
	var _isOk=true;
	if((data.must||data.must=='true')&&_value==''){
		data.dom.style.borderColor='red';
		FM.msgAlert(1,FM.config.failBSMsg,data.dom);
		return false;
	}else if(_regExp && _value){
		if(typeof(_regExp)=='object'){
			_isOk = _value.match(_regExp);
		}else{
			try{_isOk = _value.match(new RegExp(_regExp));}catch(e){alert(e);}
		}
	}else if(dataType || data.maxLength || data.minLength || data.maxLen || data.minLen || data.maxNum || data.minNum){
		if(dataType){
			if(dataType.indexOf('only')==-1){
				_isOk = FM.matchValue(_value,dataType);
			}
		}if( _isOk && data.maxLen){
			_isOk = FM.getCNLength(_value) <= data.maxLen;
		}if( _isOk && data.minLen){
			_isOk = FM.getCNLength(_value) >= data.minLen;
		}if( _isOk && data.maxLength){
			_isOk = _value.length <= data.maxLength;
		}if( _isOk && data.minLength){
			_isOk = _value.length >= data.minLength;
		}if( _isOk && data.maxNum){
			_isOk = parseFloat(_value) <= parseFloat(data.maxNum);
		}if( _isOk && data.minNum){
			_isOk = parseFloat(_value) >= parseFloat(data.minNum);
		}
	}else{
		_isOk=true;
	}
	if(_isOk){
		if(((!data.must || data.must!='true') && data.dom.value=='')){b=true;}
		if(!b){//如果是匹配全部，则成功的不提示
			FM.msgAlert(0,data.success||FM.config.successMsg,data.dom);
			timeOut=setTimeout('FM.wDivHide()',1000);
		}
		if(data.successEvent){//执行验证成功回调函数
			FM._runEvent(data.successEvent);
		}
		data.dom.style.borderColor=data._oldBorderColor;
	}else{
		data.dom.style.borderColor='red';
		FM.msgAlert(1,data.fail||FM.config.failMsg,data.dom);
	}
	return _isOk;
},matchInput: function (data,b){
	if(data.dom.length!=undefined){//如果存在length，则可能是radio或checkbox
		if(!data.must && data.must!='true'){return true;}//如果没有配置必输项，则不验证
		var _b=false;
		for(var i=0;i<data.dom.length;i++){
			if(data.dom[i].checked){
				_b=true;
				break;
			}
		}
		if(_b){//验证通过
			if(!b){//如果是匹配全部，则成功的不提示
				FM.msgAlert(0,data.success||FM.config.successMsg,data.dom[data.dom.length-1]);
				timeOut=setTimeout('FM.wDivHide()',1000);
			}
			if(data.successEvent){//执行验证成功回调函数
				FM._runEvent(data.successEvent);
			}
			FM.wDivHide();
		}else{
			FM.msgAlert(1,FM.config.failBXMsg,data.dom[data.dom.length-1]);
		}
		return _b;
	}else{
		return this.matchTextArea(data,b);
	}
},compareDate: function (dat1,dat2){//比较两个日期 返回 dat1 > dat2
	return dat1 > dat2;
},wDiv: function (flag,msg,_top,_left){//创建提示div
	clearTimeout(timeOut);
	var _div=this.byId('wsmalltiger20120209');
	_div.style.left=_left;
	_div.style.top=_top;
	var _html='<img src="';
	var _backGround='';
	if(flag==0){
		_html+='images/reg0.gif';
		_backGround='#E9FFEB';
	}else if(flag==1){
		_html+='images/reg1.gif';
		_backGround='#FFF2E9';
	}else{
		_html+='images/reg2.gif';
		_backGround='#E9F0FF';
	}
	_html+='" align="absmiddle" id="'+new Date()+'">';
	_div.style.background=_backGround;
	if(FM.BROWSERVERSION().indexOf('MSIE6.0')!=-1){
		_html+='<span id="_formMatches_wxh_MSG_SPAN" style="overflow: hidden;"><select style="margin-left: -4px; margin-top: -4px; font-size: 12px; background-color: '+
		_backGround+ '; border: 0px; height: 22px;" id="_formMatches_wxh_MSG_SELECT" multiple="multiple" onfocus="this.blur()" onclick="this.selectedIndex=-1"><option>'+msg+'</option></select></span>';
	}else{
		_html+='<span style="font-size: 12px;">'+msg+'</span>';
	}
	
	_div.innerHTML=_html;
	this.byId('wsmalltiger20120209').style.display='block';
	
	if(FM.BROWSERVERSION().indexOf('MSIE6.0')!=-1){
		var _se=document.getElementById("_formMatches_wxh_MSG_SELECT");
		var _sp=document.getElementById("_formMatches_wxh_MSG_SPAN");
		_sp.style.width=_se.offsetWidth-22;
		_sp.style.height=_se.offsetHeight-8;
		_se.selectedIndex=-1;
	}
	
},wDivHide: function (){//影藏提示div
	this.byId('wsmalltiger20120209').style.display='none';
},getTop: function (dom){//取到控件的高度
	var _top=dom.offsetTop;
	while(dom=dom.offsetParent){
		_top+=dom.offsetTop;
	}
	return _top;
},getLeft: function (dom){//取到控件的左边距
	var _left=dom.offsetLeft+dom.offsetWidth+2;
	while(dom=dom.offsetParent){
		_left+=dom.offsetLeft;
	}
	return _left;
},bind: function (dom,evt,fn,is){//绑定事件
	if(dom.attachEvent){
		dom.attachEvent("on"+evt,eval(fn));
	}else if(dom.addEventListener){
		dom.addEventListener(evt,eval(fn),is);
	}
},_wxhlFromMatchesAll: function (_domData){//匹配全部
		var b=true;
		for(var i=0;i<_domData.length;i++){
			if(_domData[i].dom.length!=undefined && _domData[i].dom.tagName!='SELECT'){
				b=FM.matchInput(_domData[i],true);
			}else{
				if(_domData[i].dom.tagName=='SELECT'){
					b=FM.matchSelect(_domData[i],true);
				}else if(_domData[i].dom.tagName=='TEXTAREA'){
					b=FM.matchTextArea(_domData[i],true);
				}else if(_domData[i].dom.tagName=='INPUT'){
					b=FM.matchInput(_domData[i],true);
				}
			}
			if(!b){
				break;
			}
		}
		return b;
},BROWSERVERSION: function (){
	return navigator.appVersion.toUpperCase().replace(/[ ]/g,'');
}};
Array.prototype._indexOf=function (cop){
	for(var i=0;i<this.length;i++){
		if(this[i].dom.id==cop.id||this[i].dom.name==cop.name){
			return i;
		}
	}
	return -1;
}
Array.prototype._remove=function (ind){
	if(ind<0){
		return this;
	}else{
		return this.slice(0,ind).concat(this.slice(ind+1,this.length));
	}
}