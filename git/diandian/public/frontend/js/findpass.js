// JavaScript Document
$(function(){
	
	$(".biaodan_007").hide();
    $(".biaodan_008").hide();
	
	$("#nameshow").click(function(){
    if($(".namexl").fadeIn()){
		$("#namehide").show();
		$('#nameshow').hide();
		exit();
		};
  });
    $("#youxiangshow").click(function(){
   $(".biaodan_007").fadeIn();
    $(".biaodan_008").hide();
  });
    $("#shoujishow").click(function(){
    $(".biaodan_008").fadeIn()
	 $(".biaodan_007").hide();
  });
	$("#namehide").click(function(){
		 if($(".namexl").fadeOut()){
		$("#namehide").hide();
		$('#nameshow').show();
		exit();
		};
	});
	
	 $("#clokshow").click(function(){
    if($(".passxl").fadeIn()){
		$("#clokhide").show();
		$('#clokshow').hide();
		exit();
		};
  });
	$("#clokhide").click(function(){
		 if($(".passxl").fadeOut()){
		$("#clokhide").hide();
		$('#clokshow').show();
		exit();
		};
	});
	 $("#emailshow").click(function(){
    if($(".emailxl").fadeIn()){
		$("#emailhide").show();
		$('#emailshow').hide();
		exit();
		};
  });
	$("#emailhide").click(function(){
		 if($(".emailxl").fadeOut()){
		$("#emailhide").hide();
		$('#emailshow').show();
		exit();
		};
	});
	$("#phoneshow").click(function(){
    if($(".phonexl").fadeIn()){
		$("#phonehide").show();
		$('#phoneshow').hide();
		exit();
		};
  });
	$("#phonehide").click(function(){
		 if($(".phonexl").fadeOut()){
		$("#phonehide").hide();
		$('#phoneshow').show();
		exit();
		};
	});
	$("#txshow").click(function(){
    if($(".txxl").fadeIn()){
		$("#txhide").show();
		$('#txshow').hide();
		exit();
		};
  });
	$("#txhide").click(function(){
		 if($(".txxl").fadeOut()){
		$("#txhide").hide();
		$('#txshow').show();
		exit();
		};
	});
});
