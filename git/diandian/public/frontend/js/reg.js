$(document).ready(function(){
	//检查借款标题
	$('#loca_title').blur(function (){
		checkTitle();
	});
	//检查借款内容
	$('#loca_content').blur(function () {
		chkConetent();
	});
	//检查借款金额
	$('#loca_money').blur(function (){
		checkMoney();
	});
	
	//检查抵押金额
	$('#loca_money2').blur(function (){
		checkMoney2();
	});
	
	//检查借款有效期
	$('#loca_days').blur(function (){
		checkDays();
	});
	//检查还款方式
	$('#fangshi').blur(function (){
		//alert(11);
		checkFangshi1();
	});
	//检查还款期限
	$('#qixian').blur(function (){
		//alert(11);
		checkFangshi2();
	});
	
	// 注册
	$("#myfrom").bind("submit",function(){
		 
		var confirmBox = document.getElementById("agree");//cbId为checkbox的ID
		 if(!confirmBox.checked){
			 $("#sForm").attr('class','yz_error');
			 $("#sForm").html("<font  style=\"font-size:12px;color:red;\">&nbsp;必须同意本站协议才能注册！</font>");
		 
			return false;
		}
		//检查借款标题
		if(checkTitle('submit')==false){
			//location.hash="u"; 
			return false;
		}
		//检查借款内容
		if(chkConetent('submit')==false){
			//location.hash="p"; 
			return false;
		}
		//检查借款金额
		if(checkMoney('submit')==false){
			//location.hash="p2"; 
			return false;
		}
		//检查还款期限
		if(checkFangshi2('submit')==false){
		//	alert(22);
			return false;
		}
		
		//检查还款方式
		if(checkFangshi1('submit')==false){
		//	alert(22);
			return false;
		}
		//检查借款有效期
		if(checkDays('submit')==false){
		//	location.hash="m"; 
			return false;
		}
 
		return true;
	} ); 
	
//	$("input[name='loca_repay_pledge']").change(function(){
//		if($(this).val() == 1){
//			alert(11);
//		}else{
//			alert(22);
//		}
//	});
 
});

//检查借款标题
	function checkTitle() {
		var obj = $('#loca_title');
//		var chkObj = $('#checkusername');
		var username = $.trim(obj.val());
	 
		if(username == ''){
			$("#checkTitle").attr('class','yz_error');
			$("#checkTitle").html("<font  style=\"font-size:12px;color:red;\">&nbsp;标题不能为空！</font>");
			return false;
		}
		 var reg = /[\u4E00-\u9FA5]|[\uFE30-\uFFA0]/gi;
			if(!reg.test(username)){
				$("#checkTitle").attr('class','yz_error');
				$("#checkTitle").html("<font  style=\"font-size:12px;color:red;\">&nbsp;请输入中文！</font>");
				return false;
			}
	 
		var unLen = username.replace(/[^\x00-\xff]/g, '**').length;
		if(unLen < 5) {
			$("#checkTitle").attr('class','yz_error');
			 $("#checkTitle").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款标题不能小于5个字符'！</font>");
			return false;
		}
		if(unLen > 40) {
			$("#checkTitle").attr('class','yz_error');
			$("#checkTitle").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款标题不能大于40个字符'！</font>");
			return false;
		}
		$("#checkTitle").attr('class','yz_right');
		 $("#checkTitle").html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
		return  true;
}
	
//检查还款方式
function checkFangshi1(){
	 
	var obj = $('#fangshi');
//	var chkObj = $('#checkusername');
	var username = $.trim(obj.val());	
	
	 
	if(username == '22'){
		$('#fangshi_ok').attr('class','yz_error');
		$('#fangshi_ok').html("<font  style=\"font-size:12px;color:red;\">&nbsp;请选择还款方式！</font>");
		return false;
	}
 
	$('#fangshi_ok').attr('class','yz_right');
	$('#fangshi_ok').html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
	return  true;
}
	
//检查还款期限
function checkFangshi2(){
	 
	var obj = $('#qixian');
//	var chkObj = $('#checkusername');
	var username = $.trim(obj.val());	
	
	 
	if(username == '23'){
		$('#fangshi2_ok').attr('class','yz_error');
		$('#fangshi2_ok').html("<font  style=\"font-size:12px;color:red;\">&nbsp;请选择还款期限！</font>");
		return false;
	}
 
	$('#fangshi2_ok').attr('class','yz_right');
	$('#fangshi2_ok').html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
	return  true;
}

//检查输入的借款内容
function chkConetent(){
	var obj = $('#loca_content');
//	var chkObj = $('#checkmobile');
	var m = $.trim(obj.val());
	if(m == ''){
		$("#checkContent").attr('class','yz_error');
		$("#checkContent").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款内容不能为空！</font>");
		return false;
	}
	var unLen = m.replace(/[^\x00-\xff]/g, '**').length;
	 var reg = /[\u4E00-\u9FA5]|[\uFE30-\uFFA0]/gi;
	if(!reg.test(m)){
		$("#checkContent").attr('class','yz_error');
		$("#checkContent").html("<font  style=\"font-size:12px;color:red;\">&nbsp;请输入中文！</font>");
		return false;
	}
	if(unLen < 100) {
		$("#checkContent").attr('class','yz_error');
		 $("#checkContent").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款内容不能小于100个字符'！</font>");
		return false;
	}
	if(unLen > 400) {
		$("#checkContent").attr('class','yz_error');
		$("#checkContent").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款内容不能大于400个字符！</font>");
		return false;
	}
	
	$("#checkContent").attr('class','yz_right');
	$("#checkContent").html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
	 
	return  true;
}
 
	function checkMoney(){
		if($("input[name='loca_repay_pledge']").val() == 1){
			checkMoney1();
		}
		if($("#you").checked == true){
			checkMoney2();
		}
	}

//检查输入的借款金额
	function checkMoney1(){
		
 		var obj = $('#loca_money');
 	//	var chkObj = $('#checkmobile');
 		var m = $.trim(obj.val());
 		var creditScore = $.trim($('#creditScore').val());
 		 
 		if(m == ''){
 			$("#checkMoney").attr('class','yz_error');
 			$("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能为空！</font>");
 			return false;
 		}
 		var unLen = m.replace(/[^\x00-\xff]/g, '**').length;
 		var reg = /^[0-9]*$/;
 		if(!reg.test(m)){
 			$("#checkMoney").attr('class','yz_error');
 			$("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;请输入数字！</font>");
 			return false;
 		}
 		if(unLen < 3) {
 			$("#checkMoney").attr('class','yz_error');
 			 $("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能小于3位数'！</font>");
 			return false;
 		}
 		 if( m%100 != 0 ){
 			 $("#checkMoney").attr('class','yz_error');
 			 $("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额为100的倍数！</font>");
 			 return false;
 		 } 
 		 if( m<1000 ){
 			 $("#checkMoney").attr('class','yz_error');
 			 $("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额必须大于1000！</font>");
 			 return false;
 		 } 
// 		alert(creditScore);
// 		alert(m);
 		if((m - creditScore) > 0){
			 $("#checkMoney").attr('class','yz_error');
			 $("#checkMoney").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能大于信用额度！</font>");
			 return false;
		 } 
 		$("#checkMoney").attr('class','yz_right');
 		$("#checkMoney").html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
		 
		return  true;
}

	//检查输入的抵押金额
	function checkMoney2(){
		var obj = $('#loca_money2');
	//	var chkObj = $('#checkmobile');
		var m = $.trim(obj.val());
		if(m == ''){
			$("#checkMoney2").attr('class','yz_error');
			$("#checkMoney2").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能为空！</font>");
			return false;
		}
		var unLen = m.replace(/[^\x00-\xff]/g, '**').length;
		var reg = /^[0-9]*$/;
		if(!reg.test(m)){
			$("#checkMoney2").attr('class','yz_error');
			$("#checkMoney2").html("<font  style=\"font-size:12px;color:red;\">&nbsp;请输入数字！</font>");
			return false;
		}
		if(unLen < 3) {
			$("#checkMoney2").attr('class','yz_error');
			 $("#checkMoney2").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能小于3位数'！</font>");
			return false;
		}
		 if( m%100 != 0 ){
			 $("#checkMoney2").attr('class','yz_error');
			 $("#checkMoney2").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额为100的倍数！</font>");
			 return false;
		 } 
		 if( m <10000 ){
			 $("#checkMoney2").attr('class','yz_error');
			 $("#checkMoney2").html("<font  style=\"font-size:12px;color:red;\">&nbsp;借款金额不能小于10000！</font>");
			 return false;
		 } 
		$("#checkMoney2").attr('class','yz_right');
		$("#checkMoney2").html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
		 
		return  true;
}
//检查借款有效期
	function checkDays(){
		var obj = $('#loca_days');
		//	var chkObj = $('#checkmobile');
			var m = $.trim(obj.val());
			
			if(m == '24'){
				$('#checkDays').attr('class','yz_error');
				$('#checkDays').html("<font  style=\"font-size:12px;color:red;\">&nbsp;请选择借款有效期！</font>");
				return false;
			}
		 
			$('#checkDays').attr('class','yz_right');
			$('#checkDays').html("<font  style=\"font-size:12px;color:green;\">&nbsp; 验证通过</font>");
			return  true;
 
	}







