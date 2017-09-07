// JavaScript Document
function showDiv(divName){
	bodyDi();
	document.getElementById(divName).style.visibility='visible';
}

function closeDiv(divName){
	document.getElementById(divName).style.visibility='hidden';
	
	document.body.removeChild(document.getElementById("mybody"));
}
function bodyDi(){
    var w = document.createElement("div");
    w.setAttribute("id","mybody")
    with(w.style){
        position = 'absolute';
        zIndex = '498';
        width = Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth) + "px";
        height =Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) + "px";
        position="absolute";
        left = '0';
        top = '0';
        background = '#000000';
        filter = 'Alpha(opacity=70)';
        opacity = '0.7';
    }
    document.body.appendChild(w);
}
function DataLength(fData)
	{
		var intLength=0
		for (var i=0;i<fData.length;i++)
		{
			if ((fData.charCodeAt(i) < 0) || (fData.charCodeAt(i) > 255))
				intLength=intLength+2;
			else
				intLength=intLength+1;
		}
		return intLength;
	}
	function change1($a){
	//alert(1);
		if($("#"+$a+"").css("backgroundColor")=='rgb(210, 210, 210)'){
			$("#"+$a+"").css('backgroundColor', 'rgb(255, 75, 75)');
		}else if($("#"+$a+"").css("backgroundColor")=='rgb(255, 75, 75)'){
			$("#"+$a+"").css('backgroundColor', 'rgb(210, 210, 210)');
		}
	
	}

	function change($i){
		if($("#lab_"+$i+"").css("backgroundColor")=='rgb(210, 210, 210)'){
			$("#lab_"+$i+"").css('backgroundColor', 'rgb(255, 75, 75)');
		}else if($("#lab_"+$i+"").css("backgroundColor")=='rgb(255, 75, 75)'){
			$("#lab_"+$i+"").css('backgroundColor', 'rgb(210, 210, 210)');
		}
	
	}
	
function chk_num(){
		$ty=true;
		if($ty==true){
			if(DataLength($("#name_").val()) > 15 || $("#name_").val()=='' || $("#name_").val()=='您的姓名'){ 
				alert("您的姓名填写有误！");
				$("#name_").focus();
				$ty=false;
			}
	
		}
		if($ty==true){
			if(DataLength($("#phone_").val()) != 11 || $("#phone_").val().match(/[^\d]/)){ 
				alert("手机号码填写有误！");
				$("#phone_").focus();
				$ty=false;
			}
	
		}
		if($ty==true){
			var value="";
			var c=document.getElementsByName("chk_inp[]");
		    for (var b=0;b<c.length;b++ ){
			   if(c[b].checked){ //判断复选框是否选中
			   value=value+c[b].value + ","; //值的拼凑 .. 具体处理看你的需要,
		  	 }
			}
			if(value==''){
				alert('请勾选您所要筹备的项目');
				$ty=false;
			}
		}
		if($ty==true){
			$("#next_sub").attr("disabled",false);
			return true;
		}else{
			return false;
		}
	}
function chk_num_(){
		$ty=true;
		if($ty==true){
			if(DataLength($("#name_1").val()) > 15 || $("#name_1").val()=='' || $("#name_1").val()=='您的姓名'){ 
				alert("您的姓名填写有误！");
				$("#name_1").focus();
				$ty=false;
			}
	
		}
		if($ty==true){
			if(DataLength($("#phone_1").val()) != 11 || $("#phone_1").val().match(/[^\d]/)){ 
				alert("手机号码填写有误！");
				$("#phone_1").focus();
				$ty=false;
			}
	
		}
		
		if($ty==true){
			$("#next_sub1").attr("disabled",false);
			return true;
		}else{
			return false;
		}
	}

$(document).ready(function(){

	$(".name_,.phone_").focus(function(){
		$(this).css("border","1px solid #ff4b4b");
		$(this).css("color","#999999");
	});
	$(".name_,.phone_").blur(function(){
		$(this).css("border","1px solid #d2d2d2");
		$(this).css("color","#999999");
	});
})