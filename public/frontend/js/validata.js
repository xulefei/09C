 
		window.onload=function (){
			init();
		}
		function init(){
			checkForm();
		}
		var _f;
		function checkForm(){
			return false;
			_f=new formMatches({formId: "from1"});
			 
			_f.match({name: 'loca_title',must: true,maxLenght:15,minLength:5,dataType: 'hasCN',focus: '请输入必须包含中文'});
			
			//_f2.match({name: 'loca_title',must: true,maxLength: 2,minLength: 1,dataType: 'only_EN',focus: '必输，请输入姓名(至少1个字符，最多2个字符,只能英文大写)',fail: '您输入的姓名不合法！'});
		//	_f2.match({name: 'password',must: true,maxLength: 20,minLength: 10,dataType: 'only_en',focus: '必输，请输入密码（至少10个字符，最多20个字符,只能英文小写）'});
	//		_f2.match({name: 'email',must: true,dataType: 'email',focus: '必输，请输入email',success: '恭喜你，输入正确！'});
	//		_f2.match({name: 'address',must: true,maxLength: 20,minLength: 10,dataType: 'hasCN',focus: '必输，请输入地址（至少10个字符，最多20个字符,必须含有中文）'});
		
		}
		function focusEv(){
			document.getElementById("_callback").innerHTML="_callback-"+new Date().getTime();
		}function _sc(){
			alert("验证成功！");
		}		
 