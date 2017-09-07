/*导航下拉*/
function sidebar_up(e){
    $(".new_591wed_main_01_left").stop(true,true).slideUp(300);
}
var Timeout = null;
$(document).ready(function(e){
    $('#slider_hunli').mouseover(function(e){
        if(Timeout){clearTimeout(Timeout);}
		$(".new_591wed_main_01_left").stop(true,true).slideDown(300);
        'preventDefault' in e ? e.preventDefault() : e.returnValue = false;
    })
	$('.new_591wed_main_01_left').mouseleave(function(e){
        Timeout = setTimeout('sidebar_up("'+e+'")',100);
    });
    $('.new_591wed_main_01_left').mouseover(function(e){
        if(Timeout){clearTimeout(Timeout);}
    });
    $('#slider_hunli').mouseleave(function(e){
        Timeout = setTimeout('sidebar_up("'+e+'")',100);
    });
})

$(document).ready(function(){
//    nav-li hover e
    var num;
    $('.nav-main_aaa>li[id]').hover(function(){
       /*图标向上旋转*/
        $(this).find('a').children().removeClass().addClass('hover-up_xxx');
        /*下拉框出现*/
        var Obj = $(this).attr('id');
        num = Obj.substring(3, Obj.length);
        $('#box-'+num+'_xxx').stop(true,true).slideDown(300);
    },function(){
        /*图标向下旋转*/
        $(this).find('a').children().removeClass().addClass('hover-down_xxx');
        /*下拉框消失*/
        $('#box-'+num+'_xxx').stop(true,true).hide();
    });
//    hidden-box hover e
    $('.hidden-box_xxx').hover(function(){
        /*保持图标向上*/
        $('#li-'+num).find('a').children().removeClass().addClass('hover-up_xxx');
        $(this).show();
    },function(){
        $(this).slideUp(200);
        $('#li-'+num).find('a').children().removeClass().addClass('hover-down_xxx');
    });
});
/*滚动导航条*/
$(function(){
	$(window).scroll(function(){
		$scroll_top=$(document).scrollTop();
		if($scroll_top>=100){
			$("#ss_fuck_vv").addClass('sws');
		}else{
			$("#ss_fuck_vv").removeClass('sws');
		}
	})
});

/*滚动导航条*/
  $(function(){
	$top1=120;
	$(window).scroll(function(){
		$scroll_top=$(document).scrollTop();
		if($scroll_top>=$top1){
			$(".ct14_nav_10").addClass('sws');
		}else{
			$(".ct14_nav_10").removeClass('sws');
		}
	})
	
	});
$(function(){
	$('#new_591wed_hehe li').stop(true,true).mouseover(function(){
		$(this).css({"background":"#E7E7E7"});
	});
	$('#new_591wed_hehe li').stop(true,true).mouseout(function(){
		$(this).css({"background":"#FFFFFF"});
	});
	


});
/*小助手*/
function sidebar_ups(e){
    $(".zhushou").css({"display":"none" });
}
var Timeout = null;
$(document).ready(function(e){
    $('.xiaozhushou').mouseover(function(e){
        if(Timeout){clearTimeout(Timeout);}
		$(".zhushou").css({"display":"block" });
        'preventDefault' in e ? e.preventDefault() : e.returnValue = false;
    })
	$('.zhushou').mouseleave(function(e){
        Timeout = setTimeout('sidebar_ups("'+e+'")',100);
    });
    $('.zhushou').mouseover(function(e){
        if(Timeout){clearTimeout(Timeout);}
    });
    $('.xiaozhushou').mouseleave(function(e){
        Timeout = setTimeout('sidebar_ups("'+e+'")',100);
    });
})

$(document).ready(function(){
    $('#bbq_').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).find('img').css({"margin-top":"14px"});	
		$(this).css({"width":"76px"});
		$(this).css({"height":"67px"});
		$(this).addClass('share_line');
		if($('#qq_main').height()<91){
				$('#qq_main').css({"height":"80px"});
			}
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
/*五哥婚礼团*/
$(document).ready(function(){
    $('#bbq_qq').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		//$(this).find('img').css({"margin-top":"14px"});	
		$(this).css({"width":"76px"});
		$(this).css({"height":"36px"});
		$(this).addClass('share_line');
		if($('#qq_main').height()<91){
				$('#qq_main').css({"height":"80px"});
			}
	});
	$('#bbq_qq').mouseleave(function(){
		$(this).find('ul').hide();
		$(this).find('p').hide();
		//$(this).find('img').css({"margin-top":"15px"});	
		$(this).css({"width":"78px"});
		$(this).css({"height":"38px"});
		$(this).removeClass('share_line');
	});
	
});

$(document).ready(function(){
    $('#bbq_w').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).addClass('share_line');
		$(this).css({"width":"76px"});
		$(this).css({"height":"99px"});
	});
	$('#bbq_w').mouseleave(function(){
		$(this).find('ul').hide();
		$(this).find('p').hide();
		$(this).removeClass('share_line');
		$(this).css({"width":"78px"});
		$(this).css({"height":"102px"});
	});
	
});



/*五哥婚礼团end*/
$(document).ready(function(){
    $('#show_qq').mousemove(function(){
		$(this).find('ul').show();
		$(this).find('p').show();		
		$(this).find('img').css({"margin-top":"14px"});	
		$(this).css({"width":"76px"});
		$(this).css({"height":"88px"});
		$(this).addClass('share_line');
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

$(function(){
   $("#return_top").click(function() {
            $("html, body").animate({ scrollTop: 0 }, 120);
    })
});
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"都说结婚不容易，我在@591结婚网 轻松搞定婚礼筹备，又省心又省钱，期待梦中完美的婚礼能够美美的实现！亲们，赶紧祝福我吧 点击：http://www.591wed.com/","bdMini":"1","bdMiniList":false,"bdPic":"http://www.591wed.com/images/share_wed.jpg","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
