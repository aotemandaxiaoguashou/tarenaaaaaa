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
function hot_merry(thisObj,Num){
if(thisObj.className == "clenk")return;
var tabObj = thisObj.parentNode.id;
var tabList = document.getElementById(tabObj).getElementsByTagName("li");
for(i=0; i <tabList.length; i++)
{
  if (i == Num)
  {
   thisObj.className = "clenk"; 
      document.getElementById(tabObj+"_Content"+i).style.display = "block";
  }else{
   tabList[i].className = "photo"; 
   document.getElementById(tabObj+"_Content"+i).style.display = "none";
  }
} 
}
function checksearch(){
	var aa = $("#hotelName_ct").val();
	//alert(aa);
}
/*dangqi*/
$(document).ready(function(){
		function random(min,max){
			return Math.floor(min+Math.random()*(max-min));
		}
		$("#close").click(function(){
			$("#calendarMsg").hide(); 
		});
		var md=new Array();
		$("#Wdate").click(function(){
			
			$('#Wdate').val("");
			
			WdatePicker({skin:'twoer',onpicked:function(dp){
				$("#calendarMsg").show();
				var md_=dp.cal.getNewDateStr()
				if(typeof(md[md_])=='undefined'){
					var dddd1 = random(10,40);
					md[md_]=dddd1;
				
				}else{
					var dddd1 = md[md_];
					
				}
					
				$(".dangqinum").html(dddd1);}
			});	
		});
	$("#sub_need_hotel1_sh").click(function(){
			if(DataLength($("#hotel_need_phone1_sh").val()) != 11 || $("#hotel_need_phone1_sh").val().match(/[^\d]/) || $("#hotel_need_phone1_sh").val().substr(0,1) != 1){
				$(".msg").show();
				return false;
			}
			$("#sub_need_hotel1_sh").attr("disabled",true);
			$.post("/0510AJAX.php?act=sub_hotel&tim=iscp&randid="+Math.random(),{member_phone_hotel:escape($("#hotel_need_phone1_sh").val()),member_hotelID:escape($("#member_hotelID").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
				var fhMSG = fhMSG.replace(/\r\n/gi, "");
				//alert(fhMSG);
				if(fhMSG.indexOf("already_order")>=0){	//����Ѿ�ԤԼ��
					alert("����д���ֻ����Ѿ�ԤԼ������رշ��أ�");
					$("#sub_need_hotel1_sh").attr("disabled",false);
				}
				if(fhMSG.indexOf("exceed_ten")>=0){	//���������ԤԼ����ʮ��
					alert("��һ�����Ѿ�ԤԼ����ʮ�Σ���رշ��أ�");
					$("#sub_need_hotel1_sh").attr("disabled",false);
				}
				if(fhMSG.indexOf("not_member")>=0){	//������ǻ�Ա��
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
							$("#calendarMsg").hide();
					}
					show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
					$("#set_member_phone").val($("#bottom_hotel_phone").val());
					$("#in_city").css({"visibility":"visible"});
					$("#sub_need_hotel1_sh").attr("disabled",false);
					Linktech();
				}
				if(fhMSG.indexOf("is_login_member")>=0){		//������Ѿ���¼�Ļ�Ա
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
							$("#calendarMsg").hide();
					}
					show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
					$("#sub_need_hotel1_sh").attr("disabled",false);
					Linktech();
				}
				if(fhMSG.indexOf("no_login_member")>=0){		//�����û�е�¼�Ļ�Ա
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
							$("#calendarMsg").hide();
					}
					show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
					$("#over_phone").val($("#bottom_hotel_phone").val());
					$("#sub_need_hotel1_sh").attr("disabled",false);
					Have_pwd(fhMSG);
					Linktech();
				}
				if(fhMSG.indexOf("user_phone_not_like")>=0){		//�ж��ֻ��������ϴ�ԤԼ���Ƿ�һ��,�����һ��
					showDiv('show_close_id');
					var fhMSG_1=fhMSG.split("&");
					$(".choise_phone_1").text(fhMSG_1[1]);
					$(".choise_phone_2").text($("#bottom_hotel_phone").val());
				//	$("#show_close_id").css({"visibility":"visible"});
					$("#choise_main_phone").css({"display":"block"});
					$("#hidden_v").val("96");
					$("#close_main_window").css({"display":"none"});
					$("#sub_need_hotel1_sh").attr("disabled",false);
				}
			})
			
		})
});
/*3��������*/
$(function(){
		$('.hotel_b1').click(function(){
			$('.hotel_b1').removeClass("hotr_new_0404p_2").addClass("hotelorder_new_0404p_2");
			$(this).addClass("hotr_new_0404p_2").removeClass("hotelorder_new_0404p_2");
		})
		$('.hotel_b2').click(function(){
			$('.hotel_b2').removeClass("hotr_new_0404p_3").addClass("hotelorder_new_0404p_3");
			$(this).addClass("hotr_new_0404p_3").removeClass("hotelorder_new_0404p_3");
		})
		$('.hotel_b3').click(function(){
			$('.hotel_b3').removeClass("hotr_new_0404p_3").addClass("hotelorder_new_0404p_3");
			$(this).addClass("hotr_new_0404p_3").removeClass("hotelorder_new_0404p_3");
		})
	})



/*��ʱ�Ż�*/
$(function(){
				var _pre=$('.prev');
				var _nex=$('.next');
				var _ul=$('#slide');
				var _li=_ul.find('li');
				var _liw=_li.outerWidth(true);
				var _lis=_li.length;
				var _ulw=_liw*_lis
				var _box=$('.box_container').width();
				var t;
		
				if(_lis>5){_ul.css({'width':_ulw,'margin-left':-_liw});_ul.find('li:first').before(_ul.find('li:last'));t=setInterval(playbox,2000);}else {_ul.css({'width':_ulw,'margin-left':0});}
				
				
				_pre.click(function(){
					_ul.animate({'margin-left':'+='+_liw},500,function(){
						if(_lis>5){_ul.css('margin-left',-_liw).find('li:first').before(_ul.find('li:last'));}else{_ul.css('margin-left',0).find('li:first').before(_ul.find('li:last'));}
						
					})
		
					
				})
				_nex.click(function(){
					_ul.animate({'margin-left':'-='+_liw},500,function(){
						if(_lis>5){_ul.css('margin-left',-_liw).find('li:first').appendTo(this);}else{_ul.css('margin-left',0).find('li:first').appendTo(this);}
						
					})
				})
				
				$('.srollpic').hover(function(){clearInterval(t)},function(){ if(_lis>5){t=setInterval(playbox,2000);}})
				$('.srollpic li').hover(function(){$(this).find('.sm_tx').show();},function(){ $(this).find('.sm_tx').hide();})
				
				function playbox(){
					_ul.animate({'margin-left':'-='+_liw},500,function(){
						if(_lis>5){_ul.css('margin-left',-_liw).find('li:first').appendTo(this);}else{_ul.css('margin-left',0).find('li:first').appendTo(this);}
					})
				}
				
});
							

$(function(){			
			var _ad = $('#adpica');
			var _li = $('#adtipa');
			var _ads = _ad.find("div");
			var _lis = _li.find('li');
			var r=0;
			
			$('.turn-pic').hover(function(){clearInterval(t)},function(){ t=setInterval(playbox,2000)})
			_lis.hover(function(){
				var index=_lis.index(this);
				_ads.eq(index).show().siblings().hide();
				$(this).addClass("current").siblings().removeClass('current');
				r=index;
			},function(){return;})
			
			function playbox(){
				_ads.eq(r).show().siblings().hide();
				_lis.eq(r).addClass("current").siblings().removeClass('current');
				r=r+1;
				if(r>_lis.length){r=0}
			}			
			var t=setInterval(playbox,2000)			
});

$(function(){			
			var _ad = $('.adpica_remen');
			var _li = $('.adtipa_remen');
			var _ads = _ad.find("div");
			var _lis = _li.find('li');
			var r=0;
			
			$('#turn-pic_remen').hover(function(){clearInterval(t)},function(){ t=setInterval(playbox,2000)})
			_lis.hover(function(){
				var index=_lis.index(this);
				_ads.eq(index).show().siblings().hide();
				$(this).addClass("current").siblings().removeClass('current');
				r=index;
			},function(){return;})
			
			function playbox(){
				_ads.eq(r).show().siblings().hide();
				_lis.eq(r).addClass("current").siblings().removeClass('current');
				r=r+1;
				if(r>_lis.length){r=0}
			}			
			var t=setInterval(playbox,2000)			
});
$(function(){			
			var _ad = $('.adpica_langman');
			var _li = $('.adtipa_langman');
			var _ads = _ad.find("div");
			var _lis = _li.find('li');
			var r=0;
			
			$('#turn-pic_langman').hover(function(){clearInterval(t)},function(){ t=setInterval(playbox,2000)})
			_lis.hover(function(){
				var index=_lis.index(this);
				_ads.eq(index).show().siblings().hide();
				$(this).addClass("current").siblings().removeClass('current');
				r=index;
			},function(){return;})
			
			function playbox(){
				_ads.eq(r).show().siblings().hide();
				_lis.eq(r).addClass("current").siblings().removeClass('current');
				r=r+1;
				if(r>_lis.length){r=0}
			}			
			var t=setInterval(playbox,2000)			
});
$(function(){			
			var _ad = $('.adpica_youlun');
			var _li = $('.adtipa_youlun');
			var _ads = _ad.find("div");
			var _lis = _li.find('li');
			var r=0;
			
			$('#turn-pic_youlun').hover(function(){clearInterval(t)},function(){ t=setInterval(playbox,2000)})
			_lis.hover(function(){
				var index=_lis.index(this);
				_ads.eq(index).show().siblings().hide();
				$(this).addClass("current").siblings().removeClass('current');
				r=index;
			},function(){return;})
			
			function playbox(){
				_ads.eq(r).show().siblings().hide();
				_lis.eq(r).addClass("current").siblings().removeClass('current');
				r=r+1;
				if(r>_lis.length){r=0}
			}			
			var t=setInterval(playbox,2000)			
});


/*ԭ_js/hotel_new.js?dd=51*/
function getObj(objName){return(document.getElementById(objName));}
function tag(id){
getObj("searconrow2").innerHTML=getObj("produce"+id).innerHTML;;
}
function loadme(){
getObj("searconrow2").innerHTML=getObj("produce1").innerHTML;
}

function changeList(obj, id, event)
{
	var obj2 = document.getElementById(id).getElementsByTagName("ul");	
	event = event || window.event;
	if (event.type == "mouseover") {
		for (var i = 0; i < obj2.length; i++) {
			if (obj2[i].className == "") {
				if (i != obj2.length - 1) {
					obj2[i].className = "no";
				} else {
					obj2[i].className = "no";
				}
			}
		}
		obj.className = "";
	}
}
$(function(){
	$(".link_dh").mouseover(function(){
			
			$(this).css("background-color","#ffedf2");
			$(this).css("color","#ff306a");
			$(this).css("cursor","pointer")
		});
	$(".link_dh").mouseout(function(){
			$(this).css("background-color","#FFF9FB");
			$(this).css("color","#666666");
	});
 });
$(function(){
    var page = 1;
    var i = 4; //ÿ���4��ͼƬ
	var len = $(".prolist_content ul").length;
	var page_count = Math.ceil(len / i) ; 
	var none_unit_width = $(".hotellist").width(); //��ȡ������ݵĿ��,������λ
	var $parent = $(".prolist_content"); 
	var $tttt=$(".tttt");
	$tttt.innerHTML=$parent.innerHTML;
    //���� ��ť
    $(".goRight").click(function(){ 
		if( !$parent.is(":animated") ){
			if( page == page_count ){  //�Ѿ������һ��������,�������󣬱�����ת����һ�����档
				$parent.animate({ left : 0}, 800); //ͨ���ı�leftֵ����ת����һ������
				page = 1;
			}else{
				$parent.animate({ left : '-='+none_unit_width}, 800);  //ͨ���ı�leftֵ���ﵽÿ�λ�һ������
				page++;
			}
		}
   });
    //���� ��ť
    $(".goLeft").click(function(){
	    if( !$parent.is(":animated") ){
			if( page == 1 ){  //�Ѿ�����һ��������,�������ǰ��������ת�����һ�����档
				$parent.animate({ left : '-='+none_unit_width*(page_count-1)}, 800); //ͨ���ı�leftֵ����ת�����һ������
				page = page_count;
			}else{
				$parent.animate({ left : '+='+none_unit_width}, 800);  //ͨ���ı�leftֵ���ﵽÿ�λ�һ������
				page--;
			}
		}
    });
	
});
//�����ύ



