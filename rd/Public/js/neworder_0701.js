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
function lookinfos(){
	$("html, body").animate({ scrollTop: 584 }, 80);
}
function subneed($r,$t){
	$marrydate=$($t).parent().parent().find('.marrydate').val();
	$need='';
	$($t).parent().parent().find("input[name='wed_need[]']:checkbox").each(function (){
		if ($(this).attr("checked")) { 
			if($need==''){
				$need=$(this).val();
			}else{
				$need+=','+$(this).val();
			}
		}
	})
	if($r=='1'){
		$price=$('input[name=wed_price[]][checked]').val();
	}else if($r=='2'){
		$price=$($t).parent().parent().find('.hunlyus').val();
	}
	$ty=true;
	if($ty==true){
		if($marrydate=="" && $($t).parent().parent().find(".dismarry").attr('checked')==false){
			alert("����д���Ļ���");
			$ty=false;
		}	
	}
	if($ty==true){
		if($need==""){
			alert("�빴ѡҪ�ﱸ������");
			$ty=false;
		}
	}
	if($ty==true){
		$("#subneed1").val($marrydate);
		$("#subneed2").val($price);
		$("#subneed3").val($need);
		showDiv('order');show_hide('orderFc',2);
	}	
	
}

//����ԤԼ��
function marrydateshow(){
	WdatePicker({skin:'twoer'});	
}
function dismarryshow($this){
	if($($this).attr('checked')==false){
		$($this).parent().parent().find('.marrydates').attr("disabled",false);
	}else{
		$($this).parent().parent().find('.marrydates').attr("disabled",true);
	}	
}

function sz_xx($t){
	$marrydate=$('.marrydates').val();
	$price=$('input[name=wed_price[]][checked]').val();
	$ty=true;
	if($ty==true){
		if($marrydate=="" && $(".dismarry").attr('checked')==false){
			alert("����д���Ļ���");
			$ty=false;
		}	
	}
	if($ty==true){
			var value="";
			var c=document.getElementsByName("wed_need[]");
		    for (var b=0;b<c.length;b++ ){
			   if(c[b].checked){ //�жϸ�ѡ���Ƿ�ѡ��
			   value=value+c[b].value + ","; //ֵ��ƴ�� .. ���崦�������Ҫ,
		  	 }
			}
			if(value==''){
				alert('�빴ѡ�����ڳﱸ�Ļ�����Ŀ');
				$ty=false;
			}
		}
	if($ty==true){
		$("#subneed1").val($marrydate);
		$("#subneed2").val($price);
		$("#subneed3").val(value);
		showDiv('order1');show_hide1('orderFc',5);
		//showDiv('order1_');
		
	}
			
}
function sz_xx_load($t){
	$marrydate=$('.marrydates').val();
	$price=$('input[name=wed_price[]][checked]').val();
	$ty=true;
	if($ty==true){
		if($marrydate=="" && $(".dismarry").attr('checked')==false){
			alert("����д���Ļ���");
			$ty=false;
		}	
	}
	if($ty==true){
			var value="";
			var c=document.getElementsByName("wed_need[]");
		    for (var b=0;b<c.length;b++ ){
			   if(c[b].checked){ //�жϸ�ѡ���Ƿ�ѡ��
			   value=value+c[b].value + ","; //ֵ��ƴ�� .. ���崦�������Ҫ,
		  	 }
			}
			if(value==''){
				alert('�빴ѡ�����ڳﱸ�Ļ�����Ŀ');
				$ty=false;
			}
		}
	if($ty==true){
		$("#subneed1").val($marrydate);
		$("#subneed2").val($price);
		$("#subneed3").val(value);
		showDiv('order1');show_hide1('orderFc',5);
		//showDiv('order1_');
		
	}
			
}
//����
function setvalue($id,$value1,$value2){
	
	if($value1!=2){
		$("#"+$id+"").val($value1);
		$("#"+$id+"1").text($value2);
	}else{
		//alert(1);
		var val="";
		var cc=document.getElementsByName("regions[]");
		for (var bc=0;bc<cc.length;bc++ ){
			if(cc[bc].checked){ //�жϸ�ѡ���Ƿ�ѡ��
				if(val){
					val=val + ","+cc[bc].value; //ֵ��ƴ�� .. ���崦�������Ҫ,
				}else{
					val=cc[bc].value;
				}
			}
		}
		//alert(val);
		$("#"+$id+"").val(val);
		$("#"+$id+"1").text($value2);
	}
	
}
function getVal(){
		$hotelNeed1=$("#dirt_bar").val().split(",");
		$hotelNeed2=$("#price_bar").val().split(",");
		$hotelNeed3=$("#num_bar").val().split(",");
		
		$("#subneed1").val($hotelNeed1[0]);
		$("#subneed2").val($hotelNeed2[0]);
		$("#subneed3").val($hotelNeed3[0]);
		
		$("#subneed11").text($hotelNeed1[1]);
		$("#subneed21").text($hotelNeed2[1]);
		$("#subneed31").text($hotelNeed3[1]);
		
	}
//�������ݳ���
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
function show_hide1($showID1,$type){
	
	$(".main_top_title").css({"display":"none"});
	$("#"+$showID1+"").css({"display":"block"});
	if($type==1){		//ԤԼ��ͨ��ҵ����
		$(".needt").css({"display":"none"});
		$(".needd").css({"display":"block"});
		$(".needh").css({"display":"none"});
	
	}else if($type==2){	//�ύ��ͨ��ҵ����
		$(".needt").css({"display":"block"});
		$(".needd").css({"display":"none"});
		$(".needh").css({"display":"none"});
	
	}else if($type==3){//ԤԼ�Ƶ�
		$(".needt").css({"display":"none"});
		$(".needh").css({"display":"none"});
		$(".needd").css({"display":"block"});	
	}else if($type==4){	//�ύ�Ƶ�����
		$(".order0506_des").removeClass('order0506_des').addClass('order0506_desh');
		$(".needt").css({"display":"block"});
		$(".needh").css({"display":"block"});
		$(".needd").css({"display":"none"});
	}else if($type==5){//������ҳ�����ύ
		$(".needt").css({"display":"block"});
		$(".needd").css({"display":"none"});
		$(".needh").css({"display":"none"});
	}
	$("#subbb").val($type);
}



function tj_mar($i){

		$len=true;
		
		if($len==true){
			if($('#member_0'+$i).val()<13000000000 || $('#member_0'+$i).val()>18999999999 || isNaN($('#member_0'+$i).val())){
				alert('����ȷ���������ֻ���');
				$('#member_0'+$i).focus();
				$len=false;
			}
		}
		if($len==true){
			var value="";
			var c=document.getElementsByName("needwedk_"+$i+"[]");
		    for (var b=0;b<c.length;b++ ){
			   if(c[b].checked){ //�жϸ�ѡ���Ƿ�ѡ��
			   value=value+c[b].value + ","; //ֵ��ƴ�� .. ���崦�������Ҫ,
		  	 }
			}
			if(value==''){
				alert('�빴ѡ������Ҫ�Ľ�鲹��');
				$len=false;
			}
		}
		if($len==true){
			$tj='';
			$re='need_'+$i+'_wed';
			$("input[name='needwedk_"+$i+"[]']:checkbox").each(function (){
				if($(this).attr("checked")) {
					if($tj){
						$tj=$tj+','+$(this).attr("id").replace($re,'');	
					}else{
						$tj=$(this).attr("id").replace($re,'');
					}
				}
			})
			
			
			//alert($tj);
			$.post('/comprehensive_ajax.php?act=sub_tj_wed&tim=ishl&randId='+Math.random(),{mobilePhone:escape($('#member_0'+$i).val()),price:escape(),Document_url:escape($('#Document_url').val()),need:escape($tj),phoNeed1:escape($("#subneed1").val()),phoNeed2:escape($("#subneed2").val()),cityId:escape($('#m_cityid').val()),phoNeed3:escape($("#subneed3").val())},function(fhMsg){
				//alert(fhMsg);	
				//alert($('#m_phone_').val());
				$(".orderFs3_ font").html($("#allpri").html());
				if(fhMsg.indexOf('not_member')>=0){
					//alert(1);
					
					showDiv('order1');
					//alert($('#m_phone_').val());
					show_hide1('orderFn',0);
					//alert($('#member_01').val());
					$("#pcount").html(parseInt($("#pcount").html())+1);
					$('#mobilePhone').val($('#member_0'+$i).val());
					$('#member_name').val($('#m_name_').val());
					//alert($('#member_01').val());
					//alert($('#mobilePhone').val());
				}else if(fhMsg.indexOf('old_member')>=0){
					
					showDiv('order1');
					show_hide1('orderFs',0);
				}
			})	
		}
	$("#member_wai_get_1").attr("disabled",true);
}

$(function(){
	$('.max_need_tiao_1').click(function(){
		$v=0;
		
		$("input[name='needwedk_1[]']:checkbox").each(function (){
			if ($(this).attr("checked")) { 
				if($v==0){
					$v=$(this).val();
					//alert($v);
				}else{
					$v=parseInt($v)+parseInt($(this).val());
				}
				//alert($v);
			}
		})
		
		$("#allpri").html($v);
	})
	
	$ty=true;
	$('#mobilePhone').focus(function(){
		$('#mobilePhone').removeClass('sub_mobilePhone').addClass('sub_mobilePhone_');
		if($('#mobilePhone').val()=='�������ֻ���'){
			$('#mobilePhone').val('');	
			$ty=false;
		}	
	})
	$('#mobilePhone').blur(function(){
		if($('#mobilePhone').val()<13000000000 || $('#mobilePhone').val()>18999999999 || isNaN($('#mobilePhone').val())){
			$('.msgErr').css({'display':'inline'});
			$ty=false;
		}else{
			$('.msgErr').css({'display':'none'});	
			$ty=true;
		}
	})
	$("#subPhone").click(function(){
		//alert('ϵͳ����');
		if($('#mobilePhone').val()<13000000000 || $('#mobilePhone').val()>18999999999 || isNaN($('#mobilePhone').val())){
			$ty=false;
		}
		if($("#subbb").val()==1){
			if($ty==true){
				//alert('ϵͳ����');
				$.post('/comprehensive_ajax.php?act=sub_tj_wed&tim=ispu&randId='+Math.random(),{cType:escape($("#m_cType").val()),mobilePhone:escape($('#mobilePhone').val()),companyID:escape($('#m_companyID').val()),cityId:escape($('#m_cityid').val()),Document_url:escape($('#Document_url').val()),isExp:escape($('#isExp').val())},function(fhMsg){
					//alert(fhMsg);
					if(fhMsg.indexOf('not_member')>=0){
						show_hide1('orderFn',0);
					}else if(fhMsg.indexOf('already_order')>=0){
						alert('���Ѿ�ԤԼ�����̼ҡ�');
						closeDiv('order1');
					}else if(fhMsg.indexOf('exceed_ten')>=0){
						alert('����ԤԼ����������������������');
						closeDiv('order1');
					}else if(fhMsg.indexOf('old_member')>=0){
						show_hide1('orderFs',0);
					}
				})	
			}	
		}else if($("#subbb").val()==2){
			$("#subPhone_need").attr("disabled",true);
			if($ty==true){
				//alert('ϵͳ����2');
				$.post('/comprehensive_ajax.php?act=sub_tj_wed&tim=ispho&randId='+Math.random(),{mobilePhone:escape($('#mobilePhone').val()),phoNeed1:escape($("#subneed1").val()),phoNeed2:escape($("#subneed2").val()),cityId:escape($('#m_cityid').val()),Document_url:escape($('#Document_url').val()),phoNeed3:escape($("#subneed3").val()),Needs_wed:escape($("#m_cType").val())},function(fhMsg){
					//alert(fhMsg);	
					if(fhMsg.indexOf('not_member')>=0){
						show_hide1('orderFn',0);
						$("#subPhone_need").attr("disabled",false);
					}else if(fhMsg.indexOf('old_member')>=0){
						show_hide1('orderFs',0);
						$("#subPhone_need").attr("disabled",false);
					}
				})	
			}
		}else if($("#subbb").val()==4){
			$("#subPhone_need").attr("disabled",true);
			if($ty==true){
				//alert('ϵͳ����2');
				$.post('/hotel_ajax.php?act=sub_hotel&tim=nocp&randId='+Math.random(),{mobilePhone:escape($('#mobilePhone').val()),phoNeed1:escape($("#subneed1").val()),phoNeed2:escape($("#subneed2").val()),cityId:escape($('#m_cityid').val()),Document_url:escape($('#Document_url').val()),phoNeed3:escape($("#subneed3").val()),Needs_wed:escape($("#m_cType").val())},function(fhMsg){
					//alert(fhMsg);	
					if(fhMsg.indexOf('not_member')>=0){
						show_hide1('orderFn',0);
						$("#subPhone_need").attr("disabled",false);
					}else if(fhMsg.indexOf('old_member')>=0){
						show_hide1('orderFs',0);
						$("#subPhone_need").attr("disabled",false);
					}
				})	
			}
		}else if($("#subbb").val()==5){
			$("#subPhone_need").attr("disabled",true);
			if($ty==true){
				//alert('ϵͳ����5');
				//alert($('#subneed1').val());
				$.post('/comprehensive_ajax.php?act=sub_tj_wed&tim=ishls&randId='+Math.random(),{mobilePhone:escape($('#mobilePhone').val()),Document_url:escape($('#Document_url').val()),phoNeed1:escape($("#subneed1").val()),phoNeed2:escape($("#subneed2").val()),cityId:escape($('#m_cityid').val()),phoNeed3:escape($("#subneed3").val())},function(fhMsg){
				//alert($('#subneed1').val());
				$(".orderFs3_ font").html($("#allpri").html());
					if(fhMsg.indexOf('not_member')>=0){
						//alert(1);
						//showDiv('order1');
						//alert($('#m_phone_').val());
						show_hide1('orderFn',0);
						//alert($('#member_01').val());
						$("#pcount").html(parseInt($("#pcount").html())+1);
						$('#mobilePhone').val($('#member_0'+$i).val());
						$('#member_name').val($('#m_name_').val());
						//alert($('#member_01').val());
						//alert($('#mobilePhone').val());
					}else if(fhMsg.indexOf('old_member')>=0){
						
						//showDiv('order1');
						show_hide1('orderFs',0);
					}
				})	
			}
		}
		$("#subPhone").attr("disabled",true);
	})
	
	
	$("#subMemberinfor").click(function(){
		$len=true;
		if($len==true){
			if(DataLength($('#member_name').val())>8 || DataLength($('#member_name').val())<2){
				alert('����ȷ������������');
				$('#member_name').focus();
				$len=false;
			}
		}
		if($len==true){
			if(DataLength($('#member_pwd').val())>20 || DataLength($('#member_pwd').val())<6){
				alert('����ȷ������������');
				$('#member_pwd').focus();
				$len=false;
			}
		}
		if($len==true){
			var reg=/^\w{3,}@\w+(\.\w+)+$/;
			$email=$('#member_email1').val()+'@'+$('#member_email2').val();
			if(!reg.test($email) || $('#member_email1').val()=='' || $('#member_email2').val()==''){
				alert('����ȷ�������������ַ��');
				$len=false;
			}
		}
		if($len==true){
			$.post('/orderNewAjax.php?randId='+Math.random(),{action:escape("subMeminfor"),cType:escape($("#m_cType").val()),mobilePhone:escape($('#mobilePhone').val()),memberName:escape($('#member_name').val()),memberPwd:escape($('#member_pwd').val()),memberSex:escape($("input[name=m_memberSex[]][checked]").val()),cityId:escape($('#m_cityid').val()),email1:escape($('#member_email1').val()),email2:escape($('#member_email2').val())},function(fhMsg){
				// alert(fhMsg);
				  if(fhMsg.indexOf('update_succ')>=0){
					  show_hide1('orderFd',0);
				  }else if(fhMsg.indexOf('update_error')>=0){
					  alert('��������æ�������Ժ�ԤԼ��');
				  }
			})
		}
	})
	
	
	
/*�����б�ײ�����*/

	$("#subMemberinfors").click(function(){
		$len=true;
		if($len==true){
			if(DataLength($('#member_names').val())>8 || DataLength($('#member_names').val())<2){
				alert('����ȷ������������');
				$('#member_names').focus();
				$len=false;
			}
		}
		if($len==true){
			if(DataLength($('#member_pwds').val())>20 || DataLength($('#member_pwds').val())<6){
				alert('����ȷ������������');
				$('#member_pwds').focus();
				$len=false;
			}
		}
		if($len==true){
			var reg=/^\w{3,}@\w+(\.\w+)+$/;
			$email=$('#member_email1s').val()+'@'+$('#member_email2s').val();
			if(!reg.test($email) || $('#member_email1s').val()=='' || $('#member_email2s').val()==''){
				alert('����ȷ�������������ַ��');
				$len=false;
			}
		}
		if($len==true){
			$.post('/orderNewAjax.php?randId='+Math.random(),{action:escape("subMeminfors"),cType:escape($("#m_cType").val()),mobilePhone:escape($('#mobilePhone_list').val()),memberName:escape($('#member_names').val()),memberPwd:escape($('#member_pwds').val()),memberSex:escape($("input[name=m_memberSex[]][checked]").val()),cityId:escape($('#m_cityid').val()),email1:escape($('#member_email1s').val()),email2:escape($('#member_email2s').val())},function(fhMsg){
				// alert(fhMsg);
				  if(fhMsg.indexOf('update_succ')>=0){
					  show_hide1('orderFd',0);
				  }else if(fhMsg.indexOf('update_error')>=0){
					  alert('��������æ�������Ժ�ԤԼ��');
				  }
			})
		}
	})

$('#mobilePhone_list').focus(function(){
		if($('#mobilePhone_list').val()=='�������ֻ���'){
			$('#mobilePhone_list').val('');	
		}	
	})
$("#subPhone_list").click(function(){
		
	/*start�ύ����*/	
	$marrydate=$('.marrydate').val();
	$price=$('input[name=wed_price[]][checked]').val();
	$ty=true;
	if($ty==true){
		if($marrydate=="" && $(".dismarry").attr('checked')==false){
			alert("����д���Ļ���");
			return false;
			$ty=false;
		}	
	}
	if($ty==true){
			var value="";
			var c=document.getElementsByName("wed_need[]");
		    for (var b=0;b<c.length;b++ ){
			   if(c[b].checked){ //�жϸ�ѡ���Ƿ�ѡ��
			   value=value+c[b].value + ","; //ֵ��ƴ�� .. ���崦�������Ҫ,
		  	 }
			}
			if(value==''){
				alert('�빴ѡ������Ҫ�Ľ�鲹��');
				return false;
				$ty=false;
			}
		}
	if($ty==true){
		$("#subneed1").val($marrydate);
		if($("#subneed2").val()=="40000-?"){
			$price=1;
		}
		if($("#subneed2").val()=="30000-40000"){
			$price=2;
		}
		if($("#subneed2").val()=="20000-30000"){
			$price=3;
		}
		if($("#subneed2").val()=="0-30000"){
			$price=4;
		}
		$("#subneed2").val($price);
		$("#subneed3").val(value);
		$("#subbb").val(6);
		//showDiv('order1');show_hide1('orderFc',5);
		
	}
		if($('#mobilePhone_list').val()=='�������ֻ���'){
			alert('�������ֻ����룡');
			return false;
		}	
		if($('#mobilePhone_list').val()<13000000000 || $('#mobilePhone_list').val()>18999999999 || isNaN($('#mobilePhone_list').val())){
				alert('�ֻ�������������ȷ���룡');
				return false;
		}
	/*�ύ����end*/
	if($("#subbb").val()==6){
	//alert('ϵͳ����');
			$("#subPhone_need").attr("disabled",true);
			if($ty==true){
				//alert('ϵͳ����6');
				//alert($('#subneed2').val());
				$.post('/comprehensive_ajax.php?act=sub_tj_wed&tim=ishls&randId='+Math.random(),{mobilePhone:escape($('#mobilePhone_list').val()),Document_url:escape($('#Document_url').val()),phoNeed1:escape($("#subneed1").val()),phoNeed2:escape($("#subneed2").val()),cityId:escape($('#m_cityid').val()),phoNeed3:escape($("#subneed3").val())},function(fhMsg){
				//alert(fhMsg.indexOf('not_member')+"ss"+fhMsg.indexOf('old_member'));
				$(".orderFs3_ font").html($("#allpri").html());
					if(fhMsg.indexOf('not_member')>=0){
						//alert(1);
						//showDiv('order1');
						//alert($('#m_phone_').val());
						show_hide1('orderFe',0);
						//alert($('#member_01').val());
						//$("#pcount").html(parseInt($("#pcount").html())+1);
						//$('#mobilePhone_list').val($('#member_0'+$i).val());
						//$('#member_name').val($('#m_name_').val());
						//alert($('#member_01').val());
						//alert($('#mobilePhone').val());
					}else if(fhMsg.indexOf('old_member')>=0){
						
						//showDiv('order1');
						show_hide1('orderFs',0);
					}
				})	
			}
		}
		$("#subPhone_list").attr("disabled",true);
		
	})
/*�����б�ײ�����end*/	
})
/*3���Ļ�ɴ*/
$(function(){
		$('.hotel_b1').click(function(){
			$('.hotel_b1').removeClass("hotr_new_0404p_2").addClass("hotelorder_new_0404p_2");
			$(this).addClass("hotr_new_0404p_2").removeClass("hotelorder_new_0404p_2");
		})
		$('.hotel_b2').click(function(){
			$('.hotel_b2').removeClass("hotr_new_0404p_3").addClass("hotelorder_new_0404p_3");
			$(this).addClass("hotr_new_0404p_3").removeClass("hotelorder_new_0404p_3");
		})
		$('.hotel_b2_a').click(function(){
			$('.hotel_b2_a').removeClass("hotr_new_0404p_3_a").addClass("hotelorder_new_0404p_3_a");
			$(this).addClass("hotr_new_0404p_3_a").removeClass("hotelorder_new_0404p_3_a");
		})
		$('.hotel_b3').click(function(){
			$('.hotel_b3').removeClass("hotr_new_0404p_3").addClass("hotelorder_new_0404p_3");
			$(this).addClass("hotr_new_0404p_3").removeClass("hotelorder_new_0404p_3");
		})
})