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
		
	<title>CoolMarry-酷结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
  <link href="/rd/Public/css/shopping.css" rel="stylesheet" type="text/css">

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
			
<div class="w clearfix">
	<div class="clearfix page_area">
		<div class="user_default">
			<div class="nav_1"></div>
			<div class="title_s"><span class="title01_s">我的购物车</span></div>
			<form action="/rd/index.php/Indent/updategd" method="post">
			<div class="flow">
				<table class="cart-tab-f1" bgcolor="#cccccc" border="0" cellpadding="0" cellspacing="1" width="100%">
					<thead>
						<tr>
							<th width="10%">图片</th>
							<th width="40%">商品名称</th>
							<th>市场价</th>
							<th width="10%">酷结价</th>
							<th width="15%">数量</th>
							<th width="10%">小计</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
					
					<?php if(is_array($info)): foreach($info as $key=>$inf): if(is_array($inf['goods'])): foreach($inf['goods'] as $key=>$goods): ?><input type="hidden" name="carid[]" value="<?php echo ($inf["id"]); ?>">
						<tr id="content_3009">
							<td><img src="/rd/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>" height="50"></td>
							<td class="tab-f1-name">
								<a href="/rd/index.php/Goods/detail/id/<?php echo ($inf["goodsid"]); ?>"><?php echo ($goods["goodsname"]); ?></a>             
							</td>
							<td align="center" bgcolor="ffffff"><del>￥<?php echo ($goods["mar-price"]); ?></del></td>
							<td><span class="f_ff1b71">￥</span><span class="f_ff1b71" id="cart_price_3009"><?php echo ($goods["price"]); ?></span></td>
							<td>
								<div class="numbera">
									<a class="reduce" href="javascript:void(0)" onclick="setAmount.reduce('#pamount_3009')">-</a>
									<input size="4" id="pamount_3009" onblur="setAmount.modify('#pamount_3009')" value="<?php echo ($inf["total"]); ?>" name="total[]" type="text">
									<a class="add" href="javascript:void(0)" onclick="setAmount.add('#pamount_3009')">+</a>
								</div>
							</td>
							<td>￥<span id="subtotal_3009"><?php echo ($goods["sum-price"]); ?></span></td>
							<td class="tab_hover">
								<a href="/rd/index.php/Home/Shopcar/del?id=<?php echo ($inf['id']); ?>" onclick="deleteCart(3009)">删除</a>
							</td>
						</tr><?php endforeach; endif; endforeach; endif; ?>
					
						                 
						<tr>
							<td colspan="7" class="font_14 tab-f1-count"><strong>商品总价：<span class="f_ff1b71" id="total_money_show"><?php echo ($info["all-price"]); ?></span></strong></td>
						</tr>
					</tbody>
				</table>
	            <div class="coupon_inte">
	            	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	                	<tbody>
							<tr>
								<td align="right"><a href="/rd/index.php/Home/Shopcar/del?userid=<?php echo ($inf['userid']); ?>">清空购物车</a></td>
							</tr>
						</tbody>
					</table>
				</div>
            <div class="cartbnt">
            	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                	<tbody><tr>
                    	<td align="left"><a href="/rd/index.php/Index" onclick="javascript:location='index.php'">&lt;&lt; 继续挑选商品</a></td>
                        <td align="right"><!--<input name="settlement" id="settlement" class="jiesuan" type="button" />--><input value=" " id="settlement" class="jiesuan" type="submit" /></td>
                    </tr>
					</tbody>
				</table>
            </div>
			</div>
		</form>
		</div>
	</div>

</div>

<!--商品小计和商品总价以及数量加减的js start-->
<script>

	$(function(){  
		//执行加1计算
		$(".add").click(function(){  
			var t=$(this).parent().find('input[id*=pamount_3009]'); //获取当前对象的数量
			t.val(parseInt(t.val())+1); 
			setTotal();  
		});  
		
		//执行减一计算
		$(".reduce").click(function(){ 
			var t=$(this).parent().find('input[id*=pamount_3009]');
			//alert(t.val());
			if(t.val()>1){
				t.val(parseInt(t.val())-1);  
				setTotal();
			} else{
				alert('数量最小为1');
			}
		});  
		
		//计算商品小计和商品总价的方法
		function setTotal(){ 	
			var s=0;
			$(".numbera").each(function(){
				var price=$(this).parent().prev().find('span[id*=cart_price_3009]'); //获取到当前商品的单价
				//alert(price.text());
				var total=$(this).find('input[id*=pamount_3009]'); //获取到当前商品的数量
				//alert(total.val());
				var sumprice=$(this).parent().next().find('span[id*=subtotal_3009]'); //获取到当前商品的小计
				//alert(sumprice.text());
				sumprice.text((parseInt(total.val()) * parseFloat(price.text()))); //重新计算商品小计，覆盖掉之前的值
				//alert(sumprice.text());
				s+=(parseInt(total.val()) * parseFloat(price.text()));
				//alert(s);	
				
			});
			$('#total_money_show').text(s); //当前商品总价
			//alert(allprice);
			
			
		}  
	})  
	
	
	
	
	
</script>
<!--商品小计和商品总价以及数量加减的js end-->



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