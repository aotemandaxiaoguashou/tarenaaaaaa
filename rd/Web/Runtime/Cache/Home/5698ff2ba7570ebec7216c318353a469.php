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
		
	<title>CoolMarry-酷结网-抽奖区</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
		<script src="/rd/Public/js/jquery-1.js"></script>

		<script src="/rd/Public/js/global1.js"></script>
  <style>
	

    .quick-entry{margin-bottom:15px;}

    .quick-entry .quick-box{width:1100px; padding:0 7px;}

    .quick-entry .quick-box li{margin:0 15px;}
	
	
	<!--导航栏下拉样式-->
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
		
		
		
#lottery{width:800px;height:600px;padding:5px 20px;margin:20px auto;}
#lottery table td{width:150px;height:150px;text-align:center;vertical-align:middle;font-size:24px;color:#333;font-index:-999}
#lottery table td button{width:300px;height:300px;line-height:300px;display:block;font-size:50px;color:#aceace;background-color:#FA598F;}
#lottery table td.active{background-color:#ea0000;}

  </style>


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
			
<div id="did" style="width:250px;height:100px;border:1px solid #cyan;float:left;background:#aceace;font-size:18px;color:red;">
	亲爱的<?php echo ($rk); ?>--用户,你有一次抽奖机会,请珍惜机会.祝福您婚姻幸福美满!
</div>
<div class="w pb20">
    <!--标题-->
    
<div id="lottery">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lottery-unit lottery-unit-0"><img src="/rd/Public/images/prize/1.jpg" width="145px" height="145px" alt="公仔熊"></td>
			<td class="lottery-unit lottery-unit-1"><img src="/rd/Public/images/prize/2.jpg" width="145px" height="145px"></td>
			<td class="lottery-unit lottery-unit-2"><img src="/rd/Public/images/prize/3.jpg" width="145px" height="145px"></td>
            <td class="lottery-unit lottery-unit-3"><img src="/rd/Public/images/prize/4.jpg" width="145px" height="145px"></td>
		</tr>
		<tr>
			<td class="lottery-unit lottery-unit-11"><img src="/rd/Public/images/prize/5.jpg" width="145px" height="145px"></td>
			<td colspan="2" rowspan="2"><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">点击抽奖</button></td>
			<td class="lottery-unit lottery-unit-4"><img src="/rd/Public/images/prize/6.jpg" width="145px" height="145px"></td>
		</tr>
		<tr>
			<td class="lottery-unit lottery-unit-10"><img src="/rd/Public/images/prize/7.jpg" width="145px" height="145px"></td>
			<td class="lottery-unit lottery-unit-5"><img src="/rd/Public/images/prize/8.jpg" width="145px" height="145px"></td>
		</tr>
        <tr>
			<td class="lottery-unit lottery-unit-9"><img src="/rd/Public/images/prize/9.jpg" width="145px" height="145px"></td>
			<td class="lottery-unit lottery-unit-8"><img src="/rd/Public/images/prize/10.jpg" width="145px" height="145px"></td>
			<td class="lottery-unit lottery-unit-7"><img src="/rd/Public/images/prize/11.jpg" width="145px" height="145px"></td>
            <td class="lottery-unit lottery-unit-6"><img src="/rd/Public/images/prize/12.jpg" width="145px" height="145px"></td>
		</tr>
	</table>
</div>

<!--导航栏下拉菜单js-->

<script type="text/javascript" src="/rd/Public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	var lottery={
		index:-1,	//当前转动到哪个位置，起点位置
		count:0,	//总共有多少个位置
		timer:0,	//setTimeout的ID，用clearTimeout清除
		speed:20,	//初始转动速度
		times:0,	//转动次数
		cycle:50,	//转动基本次数：即至少需要转动多少次再进入抽奖环节
		prize:-1,	//中奖位置
		init:function(id){
			if ($("#"+id).find(".lottery-unit").length>0) {
				$lottery = $("#"+id);
				$units = $lottery.find(".lottery-unit");
				this.obj = $lottery;
				this.count = $units.length;
				$lottery.find(".lottery-unit-"+this.index).addClass("active");
			};
		},
		roll:function(){   //转动函数
			var index = this.index;
			var count = this.count;
			var lottery = this.obj;
			$(lottery).find(".lottery-unit-"+index).removeClass("active");  //转动的时候过了图片时去掉样式
			index += 1;//每次加一个
			if (index>count-1) {  //大于总数就重新开始
				index = 0;
			};
			$(lottery).find(".lottery-unit-"+index).addClass("active");//转动的时候到图片时加样式
			this.index=index;
			return false;
		},
		stop:function(index){  //停止函数
			this.prize=index;
			return false;
		}
	};

	function roll(){
		lottery.times += 1;
		lottery.roll();//调用转动过程的函数
		if (lottery.times > lottery.cycle+10 && lottery.prize==lottery.index) {
			//转动次数大于基本转动次数和得奖位置在起始位置是会自动清零
			clearTimeout(lottery.timer);
			lottery.prize=-1;
			lottery.times=0;
			click=false;
		}else{
			if (lottery.times<lottery.cycle) {
				lottery.speed -= 10;//降低转动速度
			}else if(lottery.times==lottery.cycle) {   //减少转动次数
				var index = Math.random()*(lottery.count)|0;
				lottery.prize = index;//得到得奖位置
			}else{
				if (lottery.times > lottery.cycle+10 && ((lottery.prize==0 && lottery.index==7) || lottery.prize==lottery.index+1)) {
					lottery.speed += 110;//加快转动速度
				}else{
					lottery.speed += 20;
				}
			}
			if (lottery.speed<40) {   //小于40的速度时  就固定速度
				lottery.speed=40;
			};
			
			//console.log(lottery.times+'^^^^^^'+lottery.speed+'^^^^^^^'+lottery.prize);
			lottery.timer = setTimeout(roll,lottery.speed);//设置转动时间
		}
		return false;
	}
	//alert("公仔熊");
	var click=false;
	var counts=1;
	window.onload=function(){
		//得到转动节点
		lottery.init('lottery');
		$("#lottery button").click(function(){   //按钮点击函数
			
			if (click) {
				return false;
			}else{
				counts++;
				if(counts==2){

					//$("#did").css("display","block");
					alert("亲爱的VIP用户,你有一次抽奖机会,请珍惜机会.祝福您");
					lottery.speed=100;  //开始的速度
					roll();
					click=true;
					return false;
				}else{
					alert("祝贺您亲爱的,你获得了由我们本站提供精美礼物,我们会将礼物尽快地发给你,请您填写一下地址");
					location.href="/rd/index.php/Home/Prize/info";
				}
			}
			
		});
	};
	
</script>
	
</div></div>

		</div>
	
<!--*********(BLOCK=eachCONTENT)结束*******************************************************************************************-->	
	
	
	<!--尾部部分的开始-->
		<!--contact部分开始，此处有的页面用了可能会有CSS方面的冲突，因此不用此处，若不用继承时将其覆盖即可-->
<!--*********************(BLOCK=CONTACT)开始******************************************************-->		
		
		<div class="contact">			
			<div class="cont-box">
				<div class="tel"><span class="iconfont"></span> 客服热线<br>400-616-6000</div>
				<div class="icon-box">
					<span class="iconfont">酷</span>
					<a href="http://weibo.com/coolmarry" target="_blank">关注我们</a>
				</div>
				<div class="icon-box">
					<span class="iconfont">结</span>
					<a href="https://wx.qq.com" target="_blank">官方微信</a>
				</div>
				<div class="icon-box wx">
					<img src="/rd/Public/images/wx.gif" alt="wx">
				</div>
				<div class="contact-box">
					<div class="bg"></div>
					<strong>CONTACT US 联系我们</strong>
					<p>工作时间：09:00-20:00<br>(星期一至星期五，节假日除外)</p>
				</div>
			</div>	
		</div>
		
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