$(document).ready(function(){
  $(".f_xian li").mouseover(function(){
		$(this).removeClass("f_xian_li").addClass("f_xian_over");
		$(this).find('span').removeClass("f_xian_span").addClass("f_xian_span_ca");
  });
  
  $(".f_xian li").mouseout(function(){
		$(this).removeClass("f_xian_over").addClass("f_xian_li");
		$(this).find('span').removeClass("f_xian_span_ca").addClass("f_xian_span");		
  });
});

$(function(){
		$("#sub_sen_yh").click(function(){
			if(DataLength($("#send_mobile").val()) != 11 || $("#send_mobile").val().match(/[^\d]/) || $("#send_mobile").val().substr(0,1) != 1){
				alert("�������ֻ��ţ�");
				$('#send_mobile').focus();
				//location.href='http://www.591wed.com/new_login.php?Fu='+url;
				return false;
			}
			$.post("/send_yh_AJAX.php?randid="+Math.random(),{send_mob:escape($("#send_mobile").val()),send_mob_cID:escape($("#send_mob_cID").val())},function(fhMSG){
				var fhMSG = fhMSG.replace(/\r\n/gi, "");
				if(fhMSG==1){
					alert("���ŷ��ʹ���Ƶ�������Ժ����ԣ�");
				}else if(fhMSG==2){
					alert("���ŷ����쳣��");
				}else if(fhMSG==3){
					alert("�Ż�ȯ�Ѿ����͵������ֻ�������գ�");
					$("#sub_sen_yh").attr("disabled",true);
					$("#l1").html(parseInt($("#l1").html())+1);
				}else if(fhMSG==4){
					alert("�Ż�ȯ����ʧ�ܣ�����ϵ���ǣ�");
				}else{
					alert("id:"+fhMSG);
				}
				//alert(fhMSG);
				$("#nums_load").text(parseInt($("#nums_load").text())+1);
			});
		})
		
	});
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
		function postRate(rateid){
			/*alert(rateid);*/
			
			$.post("/send_rate_AJAX.php?randid="+Math.random(),{send_rateid:rateid},function(fhMSG){
				//alert(fhMSG);
				if(fhMSG!="abc"){
					$('#'+rateid+'').html(fhMSG);
				}else{
					alert("�Բ���,���Ѿ���ͬ��������!");
				}
			});
		}
        //��������
        function postWedding(rateid){
            /*alert(rateid);*/

            $.post("/send_wed_AJAX.php?randid="+Math.random(),{send_rateid:rateid},function(fhMSG){
                //alert(fhMSG);
                if(fhMSG!="abc"){
                    $('#'+rateid+'').html(fhMSG);
                }else{
                    alert("�Բ���,���Ѿ���ͬ��������!");
                }
            });
        }
		function postInfo(){
		
			//alert($("#subInfoMobile").val());
			if(DataLength($("#subInfoMobile").val()) != 11 || $("#subInfoMobile").val().match(/[^\d]/) || $("#subInfoMobile").val().substr(0,1) != 1){
				alert("��������ȷ���ֻ��ţ�");
				$("#subInfoMobile").focus();
				return false;
			}
			/*alert($("#send_mob_cID").val());
			exit();*/
			$("#sendInfoMobile").attr("disabled",true);
			$.post("/send_info_AJAX.php?randid="+Math.random(),{send_mob:escape($("#subInfoMobile").val()),send_mob_cID:escape($("#send_mob_cID").val())},function(fhMSG){
			
				//alert(fhMSG);
				var fhMSG = fhMSG.replace(/\r\n/gi, "");
				if(fhMSG==1){
					alert("���ŷ��ʹ���Ƶ�������Ժ����ԣ�");
				}else if(fhMSG==2){
					alert("���ŷ����쳣��");
					$("#sendInfoMobile").attr("disabled",false);
				}else if(fhMSG==3){
					alert("��Ϣ�Ѿ����͵������ֻ�������գ�");
					hidMobile2();
					hidMobile();
					//$("#sub_sen_yh").attr("disabled",true);
					//$("#l1").html(parseInt($("#l1").html())+1);
				}else if(fhMSG==4){
					alert("�Ż�ȯ����ʧ�ܣ�����ϵ���ǣ�");
					$("#sendInfoMobile").attr("disabled",false);
					//alert("id:"+fhMSG);
				}else{
					alert("id:"+fhMSG);
					$("#sendInfoMobile").attr("disabled",false);
				}
				//
				
			});
		}

$(document).ready(function(){
	  $("#iknow").click(function(){
		 $(".floatimg").animate({marginLeft:"700px",marginTop:"500px",width:"0px",height:"0px"},400);
		});
    var wedurl = window.location.href;
    if(wedurl.indexOf("wedding_good") >= 0)
    {
        changeRate(1)
    }
    if(wedurl.indexOf("wedding_fine") >= 0)
    {
        changeRate(2)
    }
    if(wedurl.indexOf("wedding_poor") >= 0)
    {
        changeRate(3)
    }
})

$(document).ready(function(){
	$("#hotelName_ct").focus(function(){
	var bb = $("#hotelName_ct").val();
	$("#hotelName_ct").css({"color":"#000000"});
	if(bb == "�����볡�����ơ�·���������򳡵�����"){
		$("#hotelName_ct").val("");
	}
  });

  $("#hotelName_ct").blur(function(){
   // $("#hotelName_ct").css("background-color","#D6D6FF");
	//$("#hotelName_ct").val("�����볡�����ơ�·���������򳡵�����");
  });
});
$(document).ready(function(){
			$("#subInfoMobile").focus(function(){
				if($("#subInfoMobile").val()=="�������ֻ���"){
					//alert("sss");
					$("#subInfoMobile").val("");
					$("#subInfoMobile").css("color","#666666");
				}
			});

			$("#subInfoMobile").blur(function(){
				if($("#subInfoMobile").val()==""){
					$("#subInfoMobile").css("color","#c8c8c8");
					$("#subInfoMobile").val("�������ֻ���");
				}else{
					$("#subInfoMobile").css("color","#666666");
					
				}
			});

})
function showMobile2(){
	$("#hidmobile2").css({"display":"block"});
}
function hidMobile2(){
	$("#hidmobile2").css({"display":"none"});
}
	
	
function showMobile(){
		document.getElementById('hidmobile').style.display="block";
	}
function hidMobile(){
	document.getElementById('hidmobile').style.display="none";
}
function changeRate(num){
	for($i=0; $i<=4;$i++){
		if($i==num){
			$("#rate1"+$i).css({"display":"block"});
			$("#span"+$i).addClass("haverate").removeClass("noselectrate");
		}else{
			$("#rate1"+$i).css({"display":"none"});
			$("#span"+$i).removeClass("haverate").addClass("noselectrate");
		}
	}
}

$(document).ready(function(){
    $('.list_item').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).find('h1 a').addClass('hov');
	});
	$('.list_item').mouseleave(function(){
		$(this).find('ul').hide();
		$(this).find('p').hide();
		$(this).find('h1 a').removeClass('hov');
	});
	
});

$uuu_rl=window.location.hash;
$cc=window.location.pathname;
$TType=($cc.split(/\//)[1]);
//alert($TType);
if($uuu_rl=='#reserve'){
$(document).ready(function(){
showDiv('order');show_hide('easyOrder_pu','easyOrder_pu_main',$TType);
})
}