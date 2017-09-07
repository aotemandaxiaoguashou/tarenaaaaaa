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
		
	<title>商品详情-酷结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
	<script src="/rd/Public/js/jquery.js" type="text/javascript"></script>
	<script src="/rd/Public/js/jquery.imageLens.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript">
		$(function () {
			
			$("#img_02").imageLens({ lensSize: 200 });
			
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
		<div class="w">
			<ul class="fl">
                <li>
                    <a href="/rd/index.php/index">首页</a>
                </li>
                <li>
                    <a href="/rd/index.php/Home/Goods/salute" target="_blank">礼炮</a>
                </li>
                <li>
                    <a href="/rd/index.php/Home/Goods/decoration" target="_blank">家庭装饰用品</a>
                </li>
                <li>
                    <a href="/rd/index.php/Home/Goods/flower" target="_blank">鲜花</a>
                </li>
                <li>
                    <a href="/rd/index.php/Home/Goods/toiletry" target="_blank">化妆品</a>
                </li>
            </ul>
			<div class="tel"><span class="iconfont">电话&nbsp;</span>400-616-6000</div>
			</div>
	</div>

<!--***********************(BLOCK=NAV)结束****导航栏结束*****************************************-->	

		</div>
	<!--头部部分的结束-->
	
	
<!--*********(BLOCK=eachCONTENT)开始，各页面中间的自己独有的部分*****************************************************************************************-->
		<div class="eachContent">
			
	<div class="w page-here mb10">
		<span>当前位置：</span><a href="/rd/index.php/Index">首页</a>&gt;<a href="#"><?php echo ($goods["catname"]); ?></a>&gt; <em><?php echo ($goods["goodsname"]); ?></em>
	</div>
	<div class="w clearfix">
		<div class="sidebar fl">
			<div class="module2">
				<div class="mod-hd">酷结推荐</div>
				<div class="mod-bd">
					<ul class="recommen-list img-box">
						<li class="item">
							<a href="http://www.coolmarry.cn/goods.php?goods_id=40954"><img src="/rd/Public/images/201412161329477548.jpg" alt="主持人筱玮"></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="http://www.coolmarry.cn/goods.php?goods_id=40954">主持人筱玮</a> </div>
						</li>
						<li class="item">
							<a href="http://www.coolmarry.cn/goods.php?goods_id=41075"><img src="/rd/Public/images/201412161332439950.jpg" alt="主持人李沐坤"></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="http://www.coolmarry.cn/goods.php?goods_id=41075">主持人李沐坤</a> </div>
						</li>
						<li class="item">
							<a href="http://www.coolmarry.cn/goods.php?goods_id=41024"><img src="/rd/Public/images/201412161330521462.jpg" alt="主持人小松 "></a>
							<div class="name-bg"></div>
							<div class="img-name"><a href="http://www.coolmarry.cn/goods.php?goods_id=41024">主持人小松 </a> </div>
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
							  <a href="http://www.coolmarry.cn/goods.php?goods_id=41419"><img title="婚纱摄影青木社摄影创作中心" alt="婚纱摄影青木社摄影创作中心" src="/rd/Public/images/thumb_201412311537086314.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="婚纱摄影青木社摄影创作中心" href="http://www.coolmarry.cn/goods.php?goods_id=41419">婚纱摄影青木社摄影创作中心</a>
							</div>
							<p class="price">市场价：<del>￥14300</del><br>酷结价：￥10999</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="http://www.coolmarry.cn/goods.php?goods_id=41417"><img title="婚礼摄影师宣野" alt="婚礼摄影师宣野" src="/rd/Public/images/thumb_201412311530099448.JPG" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="婚礼摄影师宣野" href="http://www.coolmarry.cn/goods.php?goods_id=41417">婚礼摄影师宣野</a>
							</div>
							<p class="price">市场价：<del>￥3500</del><br>酷结价：￥2000</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="http://www.coolmarry.cn/goods.php?goods_id=41415"><img title="主持人刘驰" alt="主持人刘驰" src="/rd/Public/images/thumb_201412311516496448.png" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="主持人刘驰" href="http://www.coolmarry.cn/goods.php?goods_id=41415">主持人刘驰</a>
							</div>
							<p class="price">市场价：<del>￥6000</del><br>酷结价：￥3600</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="http://www.coolmarry.cn/goods.php?goods_id=41413"><img title="化妆造型师蓉蓉" alt="化妆造型师蓉蓉" src="/rd/Public/images/thumb_201412311510109920.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="化妆造型师蓉蓉" href="http://www.coolmarry.cn/goods.php?goods_id=41413">化妆造型师蓉蓉</a>
							</div>
							<p class="price">市场价：<del>￥1500</del><br>酷结价：￥1000</p>
						</li>
						<li>
							<div class="imgbox">
							  <a href="http://www.coolmarry.cn/goods.php?goods_id=41411"><img title="『金手指花艺』粉色花艺套餐" alt="『金手指花艺』粉色花艺套餐" src="/rd/Public/images/thumb_201412311505213087.jpg" height="61" width="82"></a>
							</div>
							<div class="img-name">
							  <a title="『金手指花艺』粉色花艺套餐" href="http://www.coolmarry.cn/goods.php?goods_id=41411">『金手指花艺』粉色花艺套餐</a>
							</div>
							<p class="price">市场价：<del>￥18000</del><br>酷结价：￥10260</p>
						</li>
					</ul>
				</div>
			</div>
        </div>
		<div      class="main-cont fr">
			<div class="product mb15">
				<div class="product-cont mb10">
					<div class="product-flash fl">
						<div class="product-picture fl">
							<input name="year_day" value="" type="hidden">
							<input name="month_day" value="" type="hidden">
							<input name="day_day" value="" type="hidden">
							<a href="#"><img src="/rd/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>" alt="<?php echo ($goods["goodsname"]); ?>" height="328" width="441" id="img_02"></a>
						</div>
						<div class="product-pic-list fr">
							<a href="javascript:void(0);"><img onerror="this.src='upfile/goods_img/20120308/201203081739346159.jpg'" src="/rd/Public/Uploads/goods/s_<?php echo ($goods["pic"]); ?>" alt="" style="width:107px;height:80px;"></a>
						</div>
					</div>
					<div class="product-con fl">
						<input type="hidden" name="goodsid" id="gid" value="<?php echo ($goods["id"]); ?>"/>
						<div class="pro-name"><span style="color:#000000" id="gname"><?php echo ($goods["goodsname"]); ?></span></div>
						<div class="pro-name"><span id="del_al">市场价：<del id="one_price">￥<?php echo ($goods["mar-price"]); ?></del></span></div>
						<div class="pro-price">
							<div class="fl price-fl " id="two_price">酷结价：￥<span><?php echo ($goods["price"]); ?></span></div>
						</div>
						<div class="pro-price">
							<div class="fr pro-share">
								<div class="fl ml10 mt5">
									<!-- JiaThis Button BEGIN -->
									<script type="text/javascript" src="/rd/Public/js/jia.js" charset="utf-8"></script>
									<!-- JiaThis Button END -->
								</div>
							</div>
						</div>
		 
						<div class="p-amount">
							<div class="item-name">数量：</div>
							<div class="item-number">
								<span class="amount-icon amount-minus" id="min"></span>
								<input class="amount-num" name="goods_num" value="1" onblur="this.value=this.value.replace(/[^\d]/g,'');if(!this.value) this.value=1;" onafterpaste="this.value=this.value.replace(/[^\d]/g,'');if(!this.value) this.value=1;" type="text">
								<span class="amount-icon amount-plus" id="add"></span>
							</div>
						</div>
						<div class="pro-buy">
							<a class="pro-join-cart" style="background-color:#ea2285;"><i class="btn">立即购买</i></a>
							<a class="pro-join-cart"><i class="btn">加入购物车</i></a>
							<input id="product_id" name="product_id" value="5602" type="hidden">
						</div>
					</div>
				</div>
				<div class="product-promise">
					<p><img alt="" src="/rd/Public/images/112.jpg" style="width: 965px; height: 52px;"></p>
				</div>
			</div>
			<div class="porduct-details mb15">
				<ul id="pro-det-title" class="pro-det-title">
					<li class="pro-curr">详细介绍</li>
				</ul>
				<div id="pro-de-wrap" class="pro-de-wrap">
                    <div style="display: block;" class="details-content p15 clearfix">
						<p><strong><span style="font-size:16px;"><span style="font-family:宋体;">【<?php echo ($goods["catname"]); ?>】<?php echo ($goods["goodsname"]); ?></span></span></strong></p>
						<p>&nbsp;</p>
						<p style="text-align: center;"><img alt="" src="/rd/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>" style="width: 600px; height: 400px;"></p>
						<p><strong><span style="font-size:14px;"><span style="font-family:宋体;">详情介绍：</span></span></strong></p>
						<p>&nbsp;</p>
						<p><span style="font-size:14px;"><span style="font-family:宋体;">名称：<?php echo ($goods["goodsname"]); ?>。</span></span></p>
						<p>&nbsp;</p>
						<p><span style="font-size:14px;"><span style="font-family:宋体;">价格：<?php echo ($goods["price"]); ?>元。</span></span></p>
						<p>&nbsp;</p>
						<p><span style="font-size:14px;"><span style="font-family:宋体;">商品详情：</span></span></p>
						<p>&nbsp;</p>
					</div>
                    <div class="details-content clearfix">
						<?php echo ($goods["detail"]); ?>
					</div>
                                                                        
                </div>
			</div>
		</div>
	</div>

	
<script>  
<!--数量加减的js-->
    $(function(){  
        var t = $(".amount-num");  
        $("#add").click(function(){       
            t.val(parseInt(t.val())+1);  
        });  
		
		
			$("#min").click(function(){
				if(t.val()>1){
					t.val(parseInt(t.val())-1);  
				}else{
					alert('数量最小为1');
				}
			}); 
		
         
        
    });
	
</script> 

<script>
	//将商品添加到购物车
	var goodsname=$("#gname");
	var price=$("#two_price span");
	var total=$(".amount-num");
	var goodsid=$("#gid");
	$(".pro-join-cart").click(function(){
		var gname=goodsname.text();
		var prices=price.text();
		var totals=total.val();
		var gid=goodsid.val();
		//alert(gname);
		//alert(prices);
		//alert(totals);
		//alert(gid);
		var data={"goodsid":gid,"goodsname":gname,"price":prices,"total":totals};
		//alert(data);
		$.post('/rd/index.php/Shopcar/add',data,function(d){
			//alert(d);
			if(d=='success'){
				location.href="/rd/index.php/Shopcar/index";
			}else{
				alert('加入购物车失败');
			} 
		});
	});
</script>

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