<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<!--head部分-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="Keywords" content="婚庆公司，婚礼策划，婚庆布置，婚庆策划，婚礼策划，婚庆用品，婚庆网，婚礼服务，酷结网">
		<meta name="Description" content="酷结网是国内首家一站式婚庆服务网络直购平台,让新人直接选择心仪的婚礼策划师,婚礼主持,化妆师,摄影师,摄像师,花艺设计,婚纱摄影等,同样的婚礼最低的价格,帮助新">
		<meta property="qc:admins" content="42702303365131754636">
		<!--网页标题 开始-->
		
		<title>首页-酷结网</title>
		
		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
	<style>	
		<!--图片轮换区  开始-->
		html{position:relative;}
		*{margin:0px;padding:0px;}
		img{border:0px;}
		li{list-style:none;}
		/*轮换大区域*/
		.lunhuan{width:100%;height:420px;position:relative; margin-top:15px;}
		.lunhuan #lunhuanback{width:100%;height:420px;position:absolute;left:0px;top:0px;overflow:hidden;}
		.lunhuan #lunhuanback p{width:100%;height:420px;position:absolute;left:0px;top:0px;opacity:0;filter:alpha(opacity=0);background-repeat:no-repeat;background-position:50% 0px;}
		.lunhuan .lunhuan_main{width:1190px;height:420px;margin:0 auto;position:relative;}
		/*左侧所有商品列表*/
		.suoyouliebiao{width:239px;position:absolute;left:0px;top:0px;border-left:1px solid #E6E6E6;border-bottom:1px solid #E6E6E6;z-index:200;box-shadow:5px 5px 5px rgba(0, 0, 0, 0.2);}
		
		<!-- /*轮换中间区域*/
		.lunhuancenter{width:757px;height:420px;position:absolute;left:240px;top:0px;}
		.lunhuancenter .centergif{display:block;width:760px;height:420px;position:absolute;left:0px;top:0px;z-index:4;}
		.lunhuancenter b{position:absolute;left:0px;top:-40px;opacity:0;filter:alpha(opacity=0);z-index:3;width:760px;height:210px;display:block;} -->
			
		#lunbonum{height:14px;line-height:23px;position:absolute;left:19px;top:393px;z-index:5;}
		#lunbonum li{width:14px;height:14px;float:left;margin-right:9px;background:#B4B4B4;border-radius:14px;cursor:pointer;}
		#lunbonum .lunboone{background:#C80002;cursor:pointer;}
		<!--图片轮换区  结束-->

	</style>
	
	<!--图片轮换区JS 开始-->
	<script type="text/javascript" src="/rd/Public/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var ali=$('#lunbonum li');
			var aPage=$('#lunhuanback p');
			var aslide_img=$('.lunhuancenter b');
			var iNow=0;
			ali.each(function(index){
				$(this).mouseover(function(){
					slide(index);
				})
			});
			function slide(index){
				iNow=index;
				ali.eq(index).addClass('lunboone').siblings().removeClass();
				aPage.eq(index).siblings().stop().animate({opacity:0},600);
				aPage.eq(index).stop().animate({opacity:1},600);
				aslide_img.eq(index).stop().animate({opacity:1,top:-10},600).siblings('b').stop().animate({opacity:0,top:-40},600);
			}
			function autoRun(){
				iNow++;
				if(iNow==ali.length){
					iNow=0;
				}
				slide(iNow);
			}
			var timer=setInterval(autoRun,4000);
			ali.hover(function(){
				clearInterval(timer);
			},function(){
				timer=setInterval(autoRun,4000);
			});
		})
	</script>
	<!--图片轮换区JS 开始-->
	
	<!--CSS\JS链接-->
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/rd/Public/css/index-5.0.css">
	
	<link type="text/css" rel="stylesheet" href="/rd/Public/css/newhotel_index.css">
	<script type="text/javascript" src="/rd/Public/js/newhotel_index.js"></script>

		<!--头部占位结束-->
		
	<!--导航栏下拉样式 开始-->
	<style type="text/css" id="6409554000">
		.newnav *{
			text-decoration:none;
		}
		
		.newmenu{
			list-style:none;
		}
		.newnav{
			list-style:none;
			height:38px;
			margin:0 auto;	
		}
		.newnav li{
			float:left;
			position:relative;
		}
		.newnav li a{
			color:#fff;
			height:38px;
			line-height:38px;
			padding:0 0px;
			blr:expression(this.onFocus=this.close());
			blr:expression(this.onFocus=this.blur());
			display:inline-block;
		}
		.newnav li a:focus{ 
			-moz-outline-style: none; 
		}
		.newnav li .drop-down{
			position:absolute;
			top:37px;
			left:-1px;
			list-style:none;
			background-color:#333;
			display:none;
		}
		.newnav li .drop-down li{
			text-align:center;
			clear:left;
			width:90px;
			height:35px;
			line-height:35px;
			position:relative;
		}
		.newnav li .drop-down li a{
			height:34px;
			line-height:34px;
			width:90px;
			padding:0;
			display:inline-block;
		}
	</style>	
	<!--导航栏下拉样式 结束-->
		
	<!--导航栏下拉菜单js 开始-->
	<script>
		$(function(){
			$(".newnav>li").hover(function(){
				$(this).children('ul').stop(true,true).show(300);
			},function(){
				$(this).children('ul').stop(true,true).hide(300);
			})
		})
	</script>
	<!--导航栏下拉菜单js 结束-->
		
	</head>
	<!--head部分结束-->
	
	<body>
	<!--头部部分的开始-->
		<div id="header">
			<!--此处各个页面都相同，只需继承即可-->
			<div class="top-nav">
				<div class="w">
				  <ul class="fr">
					<?php if($_SESSION[C('SESSION_USER')]['islogin'] == 1): ?><li><a href="/rd/index.php/Home/User/index"><?php echo ($_SESSION[C('SESSION_USER')]['username']); ?></a></li>
					<li><a href="/rd/index.php/Home/Login/logout">退出</a></li>
					<?php else: ?><li><a href="/rd/index.php/Home/Login/login">登录</a></li>
					<li><a href="/rd/index.php/Login/reg">注册</a></li><?php endif; ?>
					<li><a href="/rd/index.php/User/index">我的酷结</a></li>
					<li><?php if($_SESSION[C('SESSION_USER')]['islogin'] == 1): ?><a href="/rd/index.php/Shopcar/index">购物车</a>
					<?php else: ?><a href="/rd/index.php/Home/Login/login">购物车</a><?php endif; ?>
					</li>
					<li><a href="/rd/index.php/article/articlelist/id/2">帮助中心</a></li>
					<li id="wx" class="wx"><a>酷结微信</a><img src="/rd/Public/images/wx.png" alt="微信二维码"></li>
				  </ul>
				</div>
			</div>
			<div class="header">
				<div class="w clearfix">
					<div id="logo"><a href="./"><img src="/rd/Public/images/201409231029163368.gif"></a></div>
					<div class="search-cart clearfix">
						<div id="search-form">
							<form action="/rd/index.php/Hole/search" method="get">
								<input name="keyword" class="keyword" value="请输入酒店名称" onfocus="if ($(this).val()=='请输入酒店名称') $(this).val(''); $(this).addClass('keyword-hover')" onblur="if ($(this).val()=='') $(this).val('请输入酒店名称');  $(this).removeClass('keyword-hover')" type="text">
								<button class="submit-btn" type="submit">提 交</button>
							</form>
							
							<div class="search-hot">
								<a href="#" target="_blank">主持人谢添</a>
								<a href="#" target="_blank">文博</a>
								<a href="#" target="_blank">邹祥</a>
								<a href="#" target="_blank">大张 </a>
								<a href="#" target="_blank">龙飞 </a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--上面不变部分的结束-->
			
<!--*****************(BLOCK=NAV)开始*********导航栏开始，此处各页面可能会有不同**************************************************-->
			 
			<div id="nav">
				
				<div class="w newmenu">
					<ul class="fl newnav"  style="position:absolute;z-index:999">
						<li class="nav-title">
							<a href="/rd/index.php/Index">首页</a>
						</li>
						<?php if(is_array($columns)): foreach($columns as $key=>$col): ?><li class="nav-title">
							<a href="/rd/index.php/<?php echo ($col['english']); ?>" target="_blank"><?php echo ($col['columnname']); ?></a>
							<ul class="drop-down">
								<?php if(is_array($col['col'])): foreach($col['col'] as $key=>$cols): ?><li><a href="/rd/index.php/<?php echo ($col['english']); ?>/<?php echo ($cols['english']); ?>"><?php echo ($cols['columnname']); ?></a></li><?php endforeach; endif; ?>
							</ul>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
				
			</div>
			
<!--***********************(BLOCK=NAV)结束****导航栏结束*****************************************-->	

		</div>
	<!--头部部分的结束-->
	
	
<!--*********(BLOCK=eachCONTENT)开始，各页面中间的自己独有的部分*****************************************************************************************-->
		<div class="eachContent">
			
    /rd/index.php


	<div class="warp">
<!--图片轮换区 开始-->
	<div class="photo">
		<div class="lunhuan">
			<div id="lunhuanback">
				<p style='background-image:url("/rd/Public/images/4.jpg");opacity: 1;filter:alpha(opacity=100);'></p>
				<p style='background-image:url("/rd/Public/images/2.jpg")'></p>
				<p style='background-image:url("/rd/Public/images/3.jpg")'></p>
				<p style='background-image:url("/rd/Public/images/1.jpg")'></p>
			</div>
			<div class="lunhuan_main">
				<!-- 轮换中间区域 -->
				<div class="lunhuancenter">
					<a href="javascript:void(0)" class='centergif'></a>
					<!-- <b class='slideUp' style='background-image:url("/rd/Public/images/0000.jpg");opacity:1;filter:alpha(opacity=100);top:-10px;'></b>
					<b></b>
					<b class='slideUp' style='background-image:url("/rd/Public/images/0000.jpg");'></b>
					<b></b>
					<b class='slideUp' style='background-image:url("/rd/Public/images/0000.jpg");'></b> -->
					<!-- 轮播的页码  开始 -->
					<ul id='lunbonum'>
						<li class='lunboone'></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<!-- 轮播的页码  结束 -->
				</div>
				<!-- 轮换中间区域结束 -->
			</div>
		</div>
		<div style="text-align:center;clear:both"><br>
		</div>
	</div>
<!--图片轮换区 结束-->
<!--婚礼案例 start -->
<div class="case">
    <div class="case-title">
        <span class="line"></span><span class="case-title1">婚礼案例</span> <div class="case-title2"><a href="/rd/index.php/Works" target="_blank">更多</a> </div>
    </div>
    <div class="case-mian">
        <ul>
        <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="case1">
                <div class="caseimg">
                    <a href="/rd/index.php/Works/info/id/<?php echo ($vo["id"]); ?>" target="_blank"> <img src="/rd/Public/<?php echo ($vo["pic_name"]); ?>" width="278px" height="199px"  alt="<?php echo ($vo["title"]); ?>"></a>
                    <div class="price"><?php echo ($vo["price"]); ?></div>
                </div>
                <div class="case1-l">
                    <p class="case1-title"><?php echo ($vo["title"]); ?></p>
                    <p>背景上设计的是他们一起去过的每个地方</p>
                </div>
                <div class="case1-r">
                    <a href="/rd/index.php/Works/info/id/<?php echo ($vo["id"]); ?>" target="_blank"> <img src="/rd/Public/<?php echo ($vo["pic_name"]); ?>" width="74px" height="74px"  alt=""></a>
                    <a href="#" target="_blank"> <p class="case1-title2">jaissy</p></a>
                    <p><?php echo ($vo["hole_name"]); ?></p>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>   
        </ul>
    </div>
</div>
<!--婚纱摄影-->
<div class="case">
    <div class="case-title">
        <span class="line"></span><span class="case-title1">婚纱摄影</span> <div class="case-title2"><a href="/rd/index.php/dresses" target="_blank">更多</a> </div>
    </div>
    <div class="case-mian">
        <ul>
		
		<?php if(is_array($wlist)): $i = 0; $__LIST__ = $wlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="case1">
                <div class="caseimg">
                    <a href="/rd/index.php/dresses/info/id/<?php echo ($vo["id"]); ?>" target="_self"><img src="/rd/Public/<?php echo ($vo["pic_name"]); ?>" width="278px" height="199px"  alt=""></a>
                    <div class="price" style="font-weight:bold;">￥<?php echo (number_format($vo["price"], 2, '.', '')); ?>元 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del style='color:#ccc'><?php echo (number_format($vo["sale"], 2, '.', '')); ?>元<del></div>
                </div>
                <div class="case1-l">
					<p class="case1-title"><?php echo (strdel($vo["title"],0,10)); ?></p>
                    <p><?php echo (strdel($vo["content"],0,20)); ?></p>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


<!--婚礼酒店-->
<div class="case">
    <div class="case-title">
        <span class="line"></span><span class="case-title1">婚宴酒店</span> <div class="case-title2"><a href="/rd/index.php/Hole" target="_blank">更多</a> </div>
    </div>
    <div class="case-mian">
        <ul>
			<?php if(is_array($holes)): $i = 0; $__LIST__ = $holes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hole): $mod = ($i % 2 );++$i;?><li class="case1">
                <div class="caseimg">
                    <a href="/rd/index.php/Home/Index/detail/id/<?php echo ($hole["id"]); ?>" target="_blank"> <span class="big-transparency"></span><img src="/rd/Public/Uploads/hole/<?php echo ($hole["pic"]); ?>" style="width:280px;height:199px;"></a>
                    <div class="price">￥<?php echo ($hole["price"]); ?>元/桌</div>
                </div>
                <div class="case1-l" style="width:268px;height:100px;">
                    <p><a href="/rd/index.php/Home/Index/detail/id/<?php echo ($hole["id"]); ?>" target="_blank" title="<?php echo ($hole["holename"]); ?>预订"><span class="allshow_title"><?php echo ($hole["holename"]); ?></span></a></p>
					<p><span class="allshow_style">酒店类型：<?php if($hole["style"] == 0): ?>五星级酒店<?php elseif($hole["style"] == 1): ?>四星级酒店<?php elseif($hole["style"] == 2): ?>三星级酒店<?php elseif($hole["style"] == 3): ?>连锁酒店<?php else: ?>草坪婚宴酒店<?php endif; ?></span></p>
					<p><span class="allshow_style">最大桌数：<?php echo ($hole["tabnum"]); ?>桌</span></p>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>



<!--婚礼团队 start -->
<div class="team">
    <div class="team-title"><img src="/rd/Public/images/customize-title2.jpg"> <span>婚礼团队</span>  </div>
    
	<div class="content">
        <div id="toastmaster" style="display: block;">
            <a href="/rd/index.php/compere" target="_blank" class="publicity">更多</a>
            <ul>
                <li class="team1">
                    <div class="team1-avatar"><a href="/rd/index.php/compere/work/id/<?php echo ($data[0]['id']); ?>" target="_blank"><img src="/rd/Public/Uploads/marriager/<?php echo ($data[0]['pic']); ?>"></a></div>
                    <div class="team1-main">
                        <div class="team1-name">
                            <a href="/rd/index.php/work/id/<?php echo ($data["id"]); ?>" target="_blank"><h5><?php echo ($data[0]['name']); ?></h5></a>
                            <p>主持人</p>
                        </div>
                        <div class="team-intro"><?php echo ($data[0]['detail']); ?></div>
                        <p class="team-price"><span class="team-del">市场价 ¥3000</span><span class="dollar">¥</span> 2500</p>
                        <div class="team-img">
                            <ul>
                                <li class="teamimg-l">
                                    <a href="/rd/index.php/compere/work/id/<?php echo ($data[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-1.jpg"> </a>
                                    <a href="/rd/index.php/compere/work/id/<?php echo ($data[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-2.jpg"> </a>
                                </li>
                                <li class="teamimg-r">
                                    <a href="/rd/index.php/compere/work/id/<?php echo ($data[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-3.jpg"> </a>
                                    <a href="/rd/index.php/compere/work/id/<?php echo ($data[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-4.jpg"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
				 <li class="team1">
                    <div class="team1-avatar"><a href="/rd/index.php/compere/work/id/<?php echo ($datas[0]['id']); ?>" target="_blank"><img src="/rd/Public/Uploads/marriager/<?php echo ($datas[0]['pic']); ?>"></a></div>
                    <div class="team1-main">
                        <div class="team1-name">
                            <a href="/rd/index.php/work/id/<?php echo ($datas["id"]); ?>" target="_blank"><h5><?php echo ($datas[0]['name']); ?></h5></a>
                            <p>造型师</p>
                        </div>
                        <div class="team-intro"><?php echo ($datas[0]['detail']); ?></div>
                        <p class="team-price"><span class="team-del">市场价 ¥3000</span><span class="dollar">¥</span> 2500</p>
                        <div class="team-img">
                            <ul>
                                <li class="teamimg-l">
                                    <a href="/rd/index.php/designer/work/id/<?php echo ($datas[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-4-3.jpg"> </a>
                                    <a href="/rd/index.php/designer/work/id/<?php echo ($datas[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-4-1.jpg"> </a>
                                </li>
                                <li class="teamimg-r">
                                    <a href="/rd/index.php/designer/work/id/<?php echo ($datas[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-3-4-2.jpg"> </a>
                                    <a href="/rd/index.php/designer/work/id/<?php echo ($datas[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-4-2-1.jpg"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
				
				 <li class="team1">
                    <div class="team1-avatar"><a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes[0]['id']); ?>" target="_blank"><img src="/rd/Public/Uploads/marriager/<?php echo ($dataes[0]['pic']); ?>"></a></div>
                    <div class="team1-main">
                        <div class="team1-name">
                            <a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes["id"]); ?>" target="_blank"><h5><?php echo ($dataes[0]['name']); ?></h5></a>
							<p>摄像师</p>
                        </div>
                        <div class="team-intro"><?php echo ($dataes[0]['detail']); ?></div>
                        <p class="team-price"><span class="team-del">市场价 ¥3000</span><span class="dollar">¥</span> 2500</p>
                        <div class="team-img">
                            <ul>
                                <li class="teamimg-l">
                                    <a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-4-1.jpg"> </a>
                                    <a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-4-2.jpg"> </a>
                                </li>
                                <li class="teamimg-r">
                                    <a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-4-3.jpg"> </a>
                                    <a href="/rd/index.php/cameraman/work/id/<?php echo ($dataes[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-4-4.jpg"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
				
				 <li class="team1">
                    <div class="team1-avatar"><a href="/rd/index.php/planner/work/id/<?php echo ($datae[0]['id']); ?>" target="_blank"><img src="/rd/Public/Uploads/marriager/<?php echo ($datae[0]['pic']); ?>"></a></div>
                    <div class="team1-main">
                        <div class="team1-name">
                            <a href="/rd/index.php/planner/work/id/<?php echo ($datae["id"]); ?>" target="_blank"><h5><?php echo ($datae[0]['name']); ?></h5></a>
							<p>摄像师</p>
                        </div>
                        <div class="team-intro"><?php echo ($dataes[0]['detail']); ?></div>
                        <p class="team-price"><span class="team-del">市场价 ¥3000</span><span class="dollar">¥</span> 2500</p>
                        <div class="team-img">
                            <ul>
                                <li class="teamimg-l">
                                    <a href="/rd/index.php/planner/work/id/<?php echo ($datae[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-2-1.jpg"> </a>
                                    <a href="/rd/index.php/planner/work/id/<?php echo ($datae[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-2-2.jpg"> </a>
                                </li>
                                <li class="teamimg-r">
                                    <a href="/rd/index.php/planner/work/id/<?php echo ($datae[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-2-3.jpg"> </a>
                                    <a href="/rd/index.php/planner/work/id/<?php echo ($datae[0]['id']); ?>" target="_blank"> <img src="/rd/Public/images/team-c-2-2-4.jpg"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
				
            </ul>
        </div>
          
    </div>
</div>
<!--新人评价-->
<div class="appraise">
    <div class="appraise-title"><img src="/rd/Public/images/customize-title3.jpg"> <span>新人评价</span>酷结新人怎么说
    </div>
    <div class="appraise-mian">
        <div class="appraise-l">
            <ul>
                <li>
                    <div class="appraise-line"></div>
                    <div class="appraise-avatar"><a href="http://weibo.com/1644199721/Bj3aunxED?mod=weibotime" target="_blank"><img src="/rd/Public/images/appraise-avatar1.png"></a> </div>
                    <div class="appraise-intro">
                        <span class="appraise-name">幸福加菲猫</span><img src="/rd/Public/images/star5.jpg">
                        <p class="appraise-intro1">心想找一个风格独特注重光与影运用的工作室来给自己拍一套美美的照片。翻遍了易结的合作商家，找到了一个让人眼前一亮的卜马。他家的油画风瞬间让我决定就是他了~！</p>
                        <a href="http://weibo.com/1644199721/Bj3aunxED?mod=weibotime" target="_blank" class="appraise-btn">评价详情</a>
                    </div>
                </li>
                <li>
                    <div class="appraise-line"></div>
                    <div class="appraise-avatar"><img src="/rd/Public/images/appraise-avatar2.png"></div>
                    <div class="appraise-intro">
                        <span class="appraise-name">笑儿</span><img src="/rd/Public/images/star5.jpg">
                        <p class="appraise-intro1">与婚庆公司不同，我能直接跟摄影师见面，并进行充分的沟通，最后效果才会这么好！</p>
                        <!--<a href="#" class="appraise-btn">评价详情</a>-->
                    </div>
                </li>
            </ul>
        </div>
        <div class="appraise-r">
            <ul>
                <li>
                    <div class="appraise-line"></div>
                    <div class="appraise-avatar"><img src="/rd/Public/images/appraise-avatar3.png"></div>
                    <div class="appraise-intro">
                        <span class="appraise-name">李姿</span><img src="/rd/Public/images/star5.jpg">
                        <p class="appraise-intro1">本来我特别担心化妆师，但易结客服根据我的需求，帮我挑选到了最适合我的</p>
                    </div>
                </li>
                <li>
                    <div class="appraise-line"></div>
                    <div class="appraise-avatar"><a href="http://weibo.com/p/1001603776838521470485" target="_blank"><img src="/rd/Public/images/appraise-avatar4.png"></a></div>
                    <div class="appraise-intro">
                        <span class="appraise-name">包静怡</span><img src="/rd/Public/images/star5.jpg">
                        <p class="appraise-intro1">直到今天婚礼结束我都要讲感谢我的明智之举牵手易结，感谢易结的给力推荐能让我的婚礼如此的完美。我想说的是美丽新娘一生就一次节省钱只是一方面，更多是如何节省钱还能够达到最最最想要的婚礼才是关键，易结肯定会帮助你实现你的女皇梦。</p>
                        <a href="http://weibo.com/p/1001603776838521470485" target="_blank" class="appraise-btn">评价详情</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


		</div>
	
<!--*********(BLOCK=eachCONTENT)结束*******************************************************************************************-->	
	
	
	<!--尾部部分的开始-->
		<!--contact部分开始，此处有的页面用了可能会有CSS方面的冲突，因此不用此处，若不用继承时将其覆盖即可-->
<!--*********************(BLOCK=CONTACT)开始******************************************************-->		
		
<!--*****************(BLOCK=CONTACT)结束  contact部分结束**********************************************************************-->
	
		
		<!--此处是页面尾部不变的部分，因此各页面都继承即可-->
		<div class="help-center w">
			<div class="help-box clearfix">
			<!-- 显示文章分类 -->
				<?php if(is_array($articleData)): foreach($articleData as $key=>$vo): ?><dl class="guidelinks">
					<dt><a href="/rd/index.php/Home/Article/articlelist/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["cat_name"]); ?></a></dt>
					<?php if(is_array($vo)): foreach($vo as $key=>$v2): if(is_array($v2)): foreach($v2 as $key=>$voo): ?><dd><a href="/rd/index.php/Home/Article/articleinfo/id/<?php echo ($voo["article_id"]); ?>"><?php echo ($voo["title"]); ?></a></dd><?php endforeach; endif; endforeach; endif; ?>
					</dl><?php endforeach; endif; ?>
			
			</div>
			<div class="f_nav">
			
				<?php if(is_array($footArtData)): foreach($footArtData as $key=>$vo): ?><a href="/rd/index.php/Home/Article/articleinfo/id/<?php echo ($vo["article_id"]); ?>"><?php echo ($vo["title"]); ?></a>|<?php endforeach; endif; ?>
					<a href="/rd/index.php/Home/Article/articlelist/id/2">帮助中心</a>
			</div>
		</div>

		<div id="footer">
			<div class="bot-nav">
			<?php if(is_array($friends)): foreach($friends as $key=>$vo): ?><span><a href="<?php echo ($vo["urls"]); ?>"><img src="/rd/Public/Uploads/links/<?php echo ($vo["logo"]); ?>" title="<?php echo ($vo["linksname"]); ?>" width='60px'></a></span><?php endforeach; endif; ?>
			</div>
			
			<p class="copyright">北京酷结网络技术有限公司&nbsp;&nbsp; 400-616-6000&nbsp;Copyright&nbsp;<a href="”mailto:www.coolmarry.com”">COOLMARRY</a> &nbsp;All Rights Reserved&nbsp; 京ICP备14040451号-1   京公网安备110105002103  100020     <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253323250'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s9.cnzz.com/z_stat.php%3Fid%3D1253323250%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253323250"><a href="http://www.cnzz.com/stat/website.php?web_id=1253323250" target="_blank" title="站长统计"><img src="http://icon.cnzz.com/img/pic.gif" border="0" hspace="0" vspace="0"></a></span><script src=" http://s9.cnzz.com/z_stat.php?id=1253323250&amp;show=pic" type="text/javascript"></script><script src="http://c.cnzz.com/core.php?web_id=1253323250&amp;show=pic&amp;t=z" charset="utf-8" type="text/javascript"></script></p>
			<p class="attestation">
				<a><img src="/rd/Public/images/x1.gif" alt="img"></a>
				<a><img src="/rd/Public/images/x2.gif" alt="img"></a>
				<script src="http://kxlogo.knet.cn/seallogo.dll?sn=e141103110105557699ypu000000&amp;size=0"></script><span style="display:inline-block;position:relative;width:auto;"><a href="https://ss.knet.cn/verifyseal.dll?sn=e141103110105557699ypu000000&amp;ct=df&amp;a=1&amp;pa=0.6754567698108634" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" style="display:inline-block;"><img src="http://rr.knet.cn/stati/rd/Public/images/logo/cnnic.png" style="border:none;" ></a></span>
				<a href="https://search.szfw.org/cert/l/CX20141031005807005872" target="_blank"><img src="/rd/Public/images/x4.gif" alt="诚信网站"></a>
			</p>
		</div>
		<!--尾部不变部分的结束-->
	<!--尾部部分的结束-->
	</body>
</html>