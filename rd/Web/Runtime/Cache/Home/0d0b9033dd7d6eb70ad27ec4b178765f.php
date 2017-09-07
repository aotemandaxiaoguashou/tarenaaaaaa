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
		
	<title><?php echo ($linfo["title"]); ?>-酷结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
    <link type="text/css" rel="stylesheet" href="/rd/Public/css/hotel_new_css.css">
	<link type="text/css" rel="stylesheet" href="/rd/Public/css/newhotel_header.css">
	<link rel="stylesheet" type="text/css" href="/rd/Public/css/max_hotel_header.css">
	<script src="/rd/Public/js/jquery.js" type="text/javascript"></script>
	<script src="/rd/Public/js/jquery.imageLens.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript">
		$(function () {
			$("#imgbig").imageLens({ lensSize: 200 });
		});	
	</script>
	

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
			
	<div class="w page-here mb10">
		<span>当前位置：</span><a href="/rd/index.php/Index">首页</a>&gt;<a href="/rd/index.php/Dresses">婚纱摄影列表</a>&gt; <em><?php echo ($linfo["title"]); ?></em>
	</div>
	<div class="w clearfix">
		<div class="sidebar fl">
			<div class="module2">
				<div class="mod-hd">酷结推荐</div>
				<div class="mod-bd">
					<ul class="recommen-list img-box">
						<li class="item">
							<a href=""><img src="/rd/Public/images/201412161329477548.jpg" alt="主持人筱玮"></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="">主持人筱玮</a> </div>
						</li>
						<li class="item">
							<a href="#"><img src="/rd/Public/images/201412161332439950.jpg" alt="主持人李沐坤"></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="#">主持人李沐坤</a> </div>
						</li>
						<li class="item">
							<a href="#"><img src="/rd/Public/images/201412161330521462.jpg" alt="主持人小松 "></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="#">主持人小松 </a> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="module2">
				<div class="mod-hd">大家还喜欢</div>
				<div class="mod-bd">
					<ul class="item-list">
						<li>
							<div class="imgbox">
							  <a href="#"><img title="婚纱摄影青木社摄影创作中心" alt="婚纱摄影青木社摄影创作中心" src="/rd/Public/images/thumb_201412311537086314.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="婚纱摄影青木社摄影创作中心" href="#">婚纱摄影青木社摄影创作中心</a>
							</div>
							<p class="price">市场价：<del>￥14300</del><br>酷结价：￥10999</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="#"><img title="婚礼摄影师宣野" alt="婚礼摄影师宣野" src="/rd/Public/images/thumb_201412311530099448.JPG" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="婚礼摄影师宣野" href="#">婚礼摄影师宣野</a>
							</div>
							<p class="price">市场价：<del>￥3500</del><br>酷结价：￥2000</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="#"><img title="主持人刘驰" alt="主持人刘驰" src="/rd/Public/images/thumb_201412311516496448.png" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="主持人刘驰" href="#">主持人刘驰</a>
							</div>
							<p class="price">市场价：<del>￥6000</del><br>酷结价：￥3600</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="#"><img title="化妆造型师蓉蓉" alt="化妆造型师蓉蓉" src="/rd/Public/images/thumb_201412311510109920.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="化妆造型师蓉蓉" href="#">化妆造型师蓉蓉</a>
							</div>
							<p class="price">市场价：<del>￥1500</del><br>酷结价：￥1000</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="#"><img title="『金手指花艺』粉色花艺套餐" alt="『金手指花艺』粉色花艺套餐" src="/rd/Public/images/thumb_201412311505213087.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="『金手指花艺』粉色花艺套餐" href="#">『金手指花艺』粉色花艺套餐</a>
							</div>
							<p class="price">市场价：<del>￥18000</del><br>酷结价：￥10260</p>
						</li>
					</ul>
				</div>
			</div>
        </div>
	<div class="main-cont fr">
		<div class="product mb15">
			<div class="hotelinfo_new_jiben">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td width="500">
								<img  id="imgbig" src="/rd/Public/<?php echo ($linfo["pic_name"]); ?>" style="margin-top: 5px;" title="<?php echo ($linfo["title"]); ?>" alt="<?php echo ($linfo["title"]); ?>" height="280" width="470">
								<p style="color:#EA2285;font-size:16px"><?php echo ($linfo["content"]); ?></p>
							</td>
							<td valign="top">
								<div class="h11"><h1><?php echo ($linfo["title"]); ?></h1></div>
								<div class="clear"></div>
								<div class="clear"></div>
								<p class="hotelinfo_new_p3_2"> <span onclick="showDiv('order');show_hide('easyOrder_Hotel','easyOrder_Hotel_main','');" id="hotel_in_order">免费预约豪礼相送</span>
								<!-- <a href="javascript:addcook('2395','add');" title="收藏北京港澳中心瑞士酒店" class="hotelinfo_new_margin1">收藏</a></p> -->
								<div class="hotel_in_p">
									<p class="hotel_in_lb">先预约再订单加送28888元新婚大礼包!</a></p>
								</div>
								<span class="hotelinfo_new_p3 hotelinfo_new_p3_1">市场价格：:<?php echo (number_format($linfo["sale"], 2, '.', '')); ?>&nbsp元</span>
								<span class="hotelinfo_new_p3" style="margin-left:55px;">优惠价：<?php echo (number_format($linfo["price"], 2, '.', '')); ?>&nbsp元</span>
							
								<p class="hotelinfo_new_p3">更新时间：                    
									<span><?php echo (date('Y-m-d H:i:s',$linfo["addtime"])); ?></span>
								</p>
								<p class="hotelinfo_new_p3">咨询热线：<span class="top_phone"><?php echo ($linfo["phone"]); ?></span>(9:30-18:00)</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="product-promise">
				<p><img alt="" src="/rd/Public/images/112.jpg" style="width: 965px; height: 52px;"></p>
			</div>
		</div>
			<div class="porduct-details mb15">
				<ul id="pro-det-title" class="pro-det-title">
					<li class="pro-curr">详细介绍</li>
				</ul>
				<div id="pro-de-wrap" class="pro-de-wrap" style='padding:10px; border:1px solid #f4f4f4'>
                  
					<?php echo ($linfo["info"]); ?>
                                                                        
                </div>
			</div>
		</div>
	</div>
	
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["qzone","bdysc","bdxc","tqf","douban","bdhome","sqq","thx","ibaidu","taobao","meilishuo","huaban"],"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"7","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

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