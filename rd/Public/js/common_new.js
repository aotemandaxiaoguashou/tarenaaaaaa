//导航条滚屏
var new_url=window.location.href;

$(function(){
	$top1=$('#new_header_scroll').offset().top;
	$top2=$('#candy_top').offset().top;
	$top3=$('#carherde_ww').offset().top;
	$(window).scroll(function(){
		$scroll_top=$(document).scrollTop();
		if($scroll_top>=$top1){
			$("#new_header_scroll").addClass('sw');
			
		}else{
			$("#new_header_scroll").removeClass('sw');
			
		}
		if($scroll_top>=$top1){
			
			$("#candy_top").addClass('sw_');
		}else{
			$("#candy_top").removeClass('sw_');
		}
		if($scroll_top>=$top1){
			
			$("#carherde_ww").addClass('sw_');
		}else{
			$("#carherde_ww").removeClass('sw_');
		}
	})
})

//返回顶部JS

/*$(function(){
    var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
            $("html, body").animate({ scrollTop: 0 }, 120);
    }), $backToTopFun = function() {
        var st = $(document).scrollTop(), winh = $(window).height();
        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
        //IE6下的定位
        if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });
});*/

$(function(){
   $("#return_top").click(function() {
            $("html, body").animate({ scrollTop: 0 }, 120);
    })
});

$(document).ready(function(){
    $('#bbq_').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).find('img').css({"margin-top":"14px"});	
		$(this).css({"width":"76px"});
		$(this).css({"height":"67px"});
		$(this).addClass('share_line');
	});
	$('#bbq_').mouseleave(function(){
		$(this).find('ul').hide();
		$(this).find('p').hide();
		$(this).find('img').css({"margin-top":"15px"});	
		$(this).css({"width":"78px"});
		$(this).css({"height":"69px"});
		$(this).removeClass('share_line');
	});
	
});
$(document).ready(function(){
    $('#show_qq').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).find('img').css({"margin-top":"14px"});	
		$(this).css({"width":"76px"});
		$(this).css({"height":"88px"});
		$(this).addClass('share_line');
		if($('#qq_main').height()<91){
				$('#qq_main').css({"height":"80px"});
			}
	});
	$('#show_qq').mouseleave(function(){
		$(this).find('ul').hide();
		$(this).find('p').hide();
	$(this).find('img').css({"margin-top":"15px"});	
		$(this).css({"width":"78px"});
		$(this).css({"height":"91px"});
		$(this).removeClass('share_line');
	});
	
});
//关闭对联广告
function CloseQQ(id)
{
	if(id==1){
		document.getElementById("lovexin1").style.display="none";
	}else if(id==2){
		document.getElementById("lovexin2").style.display="none";
	}else if(id==3){
		document.getElementById("lovexin3").style.display="none";
	}else if(id==4){
		document.getElementById("lovexin4").style.display="none";
	}
	return true;
}

function View_movie($t,$cou){
	$("#main_movie_new_"+$t).css({"display":"block"});
	for($i=0;$i<$cou;$i++){
	$("#View_movie_"+$i).addClass("have_main").removeClass("have_main_hover");
		if($i!=$t){
		$("#main_movie_new_"+$i).css({"display":"none"});
		}
	}
	$("#View_movie_"+$t).addClass("have_main_hover").removeClass("have_main");
	$top=$('#mot').offset().top;
	//alert($top);
	//$("html,body").scrollTop($top);
}
function getCookie(objName){//获取指定名称的cookie的值
    var arrStr = document.cookie.split("; ");
    for(var i = 0;i < arrStr.length;i ++){
     var temp = arrStr[i].split("=");
     if(temp[0] == objName) return unescape(temp[1]);
    }
}
function check(i){document.getElementById(i).focus();}



//酒店收藏
function addcook(val,act){
		$.ajax({
				type:"GET",
				url:"/ajax_addcokie.php",
				data:{"val":val,"act":act},
				success:function(data){
					if(data=="isfalse"){
						alert("请勿重复收藏！");
					}else if(data=="isfalse_"){
						alert("删除出错！");	
					}else{
					//$("#sctitles").html(data);
					//alert(data);
						alert('收藏成功！');
					}
				}
		})
}


/*友情链接*/
function $$(id){
	return document.getElementById(id);
}

/*友情链接*/
function nTabs(thisObj,Num){
if(thisObj.className == "active")return;
var tabObj = thisObj.parentNode.id;
var tabList = document.getElementById(tabObj).getElementsByTagName("li");
for(i=0; i <tabList.length; i++)
{
  if (i == Num)
  {
   thisObj.className = "active"; 
      document.getElementById(tabObj+"_Content"+i).style.display = "block";
  }else{
   tabList[i].className = "normal"; 
   document.getElementById(tabObj+"_Content"+i).style.display = "none";
  }
} 
}

/*导航滑动门*/
function getObj(objName){return(document.getElementById(objName));}
function tag(id){
getObj("searconrow2").innerHTML=getObj("produce"+id).innerHTML;;
}
function loadme(id){
getObj("searconrow2").innerHTML=getObj("produce"+id).innerHTML;
}


function showDiv(divName){
	bodyDi();
	hiddenSelect('1');
	document.getElementById(divName).style.visibility='visible';
	

		$('#new_header_scroll').css({"visibility":"hidden"});
		$('#candy_top').css({"visibility":"hidden"});
		$('#carherde_ww').css({"visibility":"hidden"});
		$('#Hprojectdp').css({"visibility":"hidden"});
}

function closeDiv(divName){
	hiddenSelect('2');
	document.getElementById(divName).style.visibility='hidden';
	
	document.body.removeChild(document.getElementById("mybody"));
		$('#new_header_scroll').css({"visibility":"visible"});
		$('#candy_top').css({"visibility":"visible"});
		$('#carherde_ww').css({"visibility":"visible"});
		$('#Hprojectdp').css({"visibility":"visible"});
}
function hiddenSelect(m)
{ 
	var s=document.getElementsByTagName("select");
	
	if(s[0]=="undefined"){return}
	for(var i=0;i<s.length;i++)
	{
			if(s[i].className!="selll_jj"){
	  if(m==1){s[i].style.visibility="hidden";}
	   else{s[i].style.visibility="";}
	 }
	}
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

function dis(i){
	if(document.getElementById(i).style.display=="none")
	{
		document.getElementById(i).style.display="block";
	}else
	{
		document.getElementById(i).style.display="none";
	}
}

function setAddress(id)
{
	var value="";
	for (var i=0;i<document.getElementsByName('regions').length;i++ ){
		if(document.getElementsByName('regions')[i].checked)
		{ //判断复选框是否选中
			if(value=="")
			{
				value="丨"+document.getElementsByName('regions')[i].value+"丨";
			}else
			{
				value=value+"，丨"+document.getElementsByName('regions')[i].value+"丨"; //值的拼凑 .. 具体处理看你的需要,
			}
		}
	}
	document.getElementById(id).value=value;
	///alert(document.getElementById('my_add1').value);
}

//婚期未定
function disabledSelect(obj)
{
	if(obj.checked)
	{
		$("#yy").attr("disabled","true");
		$("#mm").attr("disabled","true");
		$("#dd").attr("disabled","true");
	}else{
		$("#yy").removeAttr("disabled");
		$("#mm").removeAttr("disabled");
		$("#dd").removeAttr("disabled");
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
	
	$("#examples_body").mouseover(function(){
		$("#head_up").css("background","url(http://www.591wed.com/images/new_ass_gr.jpg) no-repeat");
		$("#head_up").css("color","#FC7198");
	 })
	$("#examples_body").mouseout(function(){
		$("#head_up").css("background","url(http://www.591wed.com/images/new_ass_wh.jpg) no-repeat");
		$("#head_up").css("color","#666666");
	 })

   $("#examples_body").hover(function(){
		$("#subnav").stop(true,true).slideDown(400);
	},function(){
		$("#subnav").stop(true,true).slideUp("fast");
	});
	
	  $("#qq_show").hover(function(){
		$("#qq_show_1").stop(true,true).slideDown(400);
	},function(){
		$("#qq_show_1").stop(true,true).slideUp("fast");
	});
   
 });