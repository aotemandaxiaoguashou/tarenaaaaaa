// JavaScript Document

function RunShop(){
		var speed=35;
		var tab=document.getElementById("demo");
		var tab1=document.getElementById("demo1");
		var tab2=document.getElementById("demo2");
		if(tab1.offsetWidth<930)
		{
			return;
		}
		tab2.innerHTML=tab1.innerHTML;
		function Marquee(){
		if(tab2.offsetWidth-tab.scrollLeft<=0)
			tab.scrollLeft-=tab1.offsetWidth;
			else{
			tab.scrollLeft++;
			}
		}
		var MyMar=setInterval(Marquee,speed);
		tab.onmouseover=function() {clearInterval(MyMar)};
		tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
	}
	//�������:

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
	$(document).ready(function(){
		var btnNext = $('#btn-next'),btnPrev = $('#btn-prev'),page =1,iwidth=$('#smallPic').outerWidth(true);
		btnNext.click(function(){
			var ipage=Math.floor(iwidth/260);
			if(page>ipage){
				$('#btn-next').attr('title','�ѵ����һҳ��').css('opacity',"0.5");
				return false;
			}else{
			$('#btn-prev').attr('title','').css('opacity',"1");
				$('#btn-next').attr('title','').css('opacity',"1");
			}
			$('#smallPic').animate({left:'-='+260+'px'},800);
			page++;
		});
		btnPrev.click(function(){
			//alert($('#smallPic').outerWidth(true));
			var ipage=Math.floor(iwidth/260);
			
			if(page<ipage || page==ipage){
				$('#btn-prev').attr('title','�ѵ����һҳ��').css('opacity',"0.5");
				return false;
			}else{
				$('#btn-next').attr('title','').css('opacity',"1");
				$('#btn-prev').attr('title','').css('opacity',"1");
			}
			$('#smallPic').animate({left:'+='+260+'px'},800);
			page--;
		});	
		$("#ehotelid").mouseover(function(){
			$(".hidfen").show();
		});
		$(".hidfen").mouseleave(function(){
			$(".hidfen").hide();
		});
		
	});
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
function clearDefaultText (el,message)
	{
	var obj = el;
	if(typeof(el) == "string")
	obj = document.getElementById(id);
	if(obj.value == message)
	{
	obj.value = "";
	}
	obj.onblur = function()
	{
	if(obj.value == "")
	{
	   obj.value = message;
	}
	}
	}
function testDisplay($divName,$num)
{ 
	if(document.getElementById($divName).style.display =="block")
	{
		for($i=0;$i<$num;$i++){
				document.getElementById("ssdd"+$i+"").style.display = "none";
			}
	}else
	{
		for($i=0;$i<$num;$i++){
			document.getElementById("ssdd"+$i+"").style.display = "none";
		}
		document.getElementById($divName).style.display ="block";
	}   
}
function testDisplay2($divName)
{ 
	var divD = document.getElementById($divName);
    if(divD.style.display=="none")
    {
        divD.style.display = "block";
    }
    else
    {
        divD.style.display = "none";
    }
    
}
function onZhong($title,$type){
		var arr2=['type_1','type_2','type_3'];
		for(var i=0;i<3;i++){
			if(arr2[i]==$type){
				$("#"+arr2[i]+"").addClass("nav_over").removeClass("groud_nav");
			}else{
				$("#"+arr2[i]+"").addClass("groud_nav").removeClass("nav_over");
			}
		}
		for($i=1;$i<4;$i++){
			$("#title_"+$i+"").css({"display":"none"});
		}
		$("#"+$title+"").css({"display":"block"});
}