$(function(){
		//大图轮播
		$("#main .foucs_photo").hover(function(){
		$(".foucs_photo .prev,.foucs_photo .next").fadeTo(300,0.2);
		},function(){
			$(".foucs_photo .prev,.foucs_photo .next").hide();
		});
		
		$(".foucs_photo .prev,.foucs_photo .next").hover(function(){
			$(this).fadeTo("slow",0.7);
		},function(){
			$(this).hide();
		});
		
		$("#main .foucs_photo").slide({ titCell:".num ul" , mainCell:".pic" , effect:"fold", autoPlay:true, delayTime:700 , autoPage:true });
		
		// 首页菜单导航
		$("#header .navi .node>li").hover(function(){
			$(this).find(".nodetwo").slideDown("slow").css("position","absolute");//绝对定位;
		},function(){
			$(".nodetwo").hide();
		});
		
		//网站公告无缝滚动
		setInterval(function(){
			$("#main .notice").find("li:last").hide().prependTo(".notice").slideDown("slow");
		},2500);
		
		//个人中心
		$("#main .l_menu h3").click(function(){
			var index=$(this).index();
			//$("#main .l_menu ul:visible").slideUp();//所有可见的隐藏
			//$(this).find("i").removeClass("open").addClass("close");
    		//$(this).next("ul").slideUp("slow");//当前的显示
		});
});