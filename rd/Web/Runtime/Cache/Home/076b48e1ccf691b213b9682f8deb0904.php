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
		
	<title>礼炮-酷结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
    <script type="text/javascript">
	$(document).ready(function(){
		var result = decodeURIComponent(document.URL);
		var regu2=/filter=[\d+\:\-]*/;
		var filter= result.match(regu2);  
  
	  if(filter!=null)
	  {
		  filter = filter.toString();
		  var v = filter.replace('filter=','');
		  v=v.split('-');
		  $('#screening').find("a").removeClass("curr");
		  /*var len=$('#screening').children('li').length;
		  if(v!=''&& v.length!=len){
			  history.go(-1);
			  return false;
		  }*/
		  for(var i=0;i<v.length;i++)
		  {
			  $('#screening').find("a[id='"+v[i]+"']").attr("class", "curr");
		  }
	  }
	  
	  $('#screening a').click(function(){
		  var me=$(this);
		  var filter_str='';
		  $('#screening').find('a').each(function(){
			  if($(this).attr('class')=='curr'&& $(this).attr('id')!='')
				  filter_str+=$(this).attr('id')+'-';
		  });
		  filter_str=filter_str.substr(0,filter_str.length-1);
	  	  filter=filter_str.split('-');
		  for(var i=0;i<filter.length;i++)
		  {
			var str1=filter[i].toString();
			var str2=$(this).attr('id').toString();
			str1=str1.split(':');
			str2=str2.split(':');
			if(str1[0]==str2[0])
			{
				filter_str=filter_str.replace(filter[i],$(this).attr('id'));
			}
		  }		  
          var result = decodeURIComponent(document.URL);
 		  var regu=/filter=[\d+\:\-]*/;
     	  var result = result.match(regu);
		  if(result!=null)
		  {
			  if(filter_str==''){
				  url=decodeURIComponent(document.URL).replace(result,'');
        	  }else
			  url=decodeURIComponent(document.URL).replace(result,'filter='+filter_str);

			  location.href= url;
		  }
          else
          {
        	  if(document.URL.indexOf('?')<0)
        		  url=document.URL+'?filter='+filter_str;
        	  else
        		  url=document.URL+'&filter='+filter_str;
        	  if(filter_str==''){
        		  url=document.URL;
        	  }
        	  location.href= url;
 		  }
		  
	  });
	  

  });
  function addCarts(gid){
      var product_id = $("#product_"+gid).val();
      location.href='cart.php?act=save&goods_id='+gid+'&product_id='+product_id+'&number=1';
  }
  </script>
  
	<style type="text/css">
		.mini-pages .next_disabled,.prev_disabled {
			background-color: #FFFFFF;
			border: 1px solid #CCCCCC;
			color: #797979;
			display: inline;
			float: left;
			height: 20px;
			line-height: 20px;
			margin-right: 6px;
			text-align: center;
			width: 58px;
		}
	  .quick-entry{margin-top:7px;}
	  .quick-entry .quick-box li {
			background-position: 0 -161px;
			display: inline;
			float: left;
			height: 88px;
			margin: 0 5px 0 4px;
			padding: 6px 8px 1px;
			width: 64px;
		}
		.scree-box .scree-hd {
			background-color: #f4f4f4;
			color: #555555;
			height:auto;
			line-height: 24px;
		}
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
			<div class="tel"><span class="iconfont"></span>400-616-6000</div>
		</div>
	</div>

<!--***********************(BLOCK=NAV)结束****导航栏结束*****************************************-->	

		</div>
	<!--头部部分的结束-->
	
	
<!--*********(BLOCK=eachCONTENT)开始，各页面中间的自己独有的部分*****************************************************************************************-->
		<div class="eachContent">
			
<div class="w clearfix">
	<div class="scree-box-desc">
		花艺装饰对于现代婚礼是不可替代的。花艺装饰为婚礼现场带来最美好的感受，美好的日子需要美丽的花朵烘托气氛。花艺最终价格通常由花艺师设计费、花材费、
		运输费、花器费等费用打包形成，所以费用高低与花量大小并不直接成正比。酷结建议您选择花艺商品时，尽量选择同一个服务商，这样对于婚礼花艺整体的搭配效
		果更好，沟通也更轻松。
	</div>
	<div class="cate-list mb8">
		<div class="cate-hd">
			<div class="sorting">
				<span>排序:</span>
				<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;sale=desc">销量<em class="iconfont">󰀇</em></a>
				<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;price=desc">价格<em class="iconfont">󰀇</em></a>
				<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;comment=desc">评论数<em class="iconfont">󰀇</em></a>
			</div>
			<div class="mini-pages">
				<div class="num-box">共465个商品</div>
				<div class="p-num"><span>1</span>/20</div><a class="prev_disabled"><em class="iconfont">󰀂</em>上一页</a> <a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=2" class="p-btn">下一页<em class="iconfont">󰀨</em></a>
			</div>
		</div>
	</div>
</div>
<div class="w clearfix">
	<div class="main-cont fl">
		<div class="cate-list mb15">
			<div class="cate-bd">
				<ul id="cate-goods" class="goods-list mb10 clearfix">
				<?php if(is_array($salute)): $i = 0; $__LIST__ = $salute;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sal): $mod = ($i % 2 );++$i;?><li>
						<div class="img-box">
							<a href="/rd/index.php/Home/Goods/detail/id/<?php echo ($sal["id"]); ?>"><img src="/rd/Public/Uploads/goods/<?php echo ($sal["pic"]); ?>" alt="白绿色系花艺套餐" width="316" height="235"></a>
						</div>
						<div class="img-name">
							<a href="/rd/index.php/Home/Goods/detail/id/<?php echo ($sal["id"]); ?>"><?php echo ($sal["goodsname"]); ?></a>
						</div>
						<div class="price-box">
							<strong>酷结价：￥<?php echo ($sal["price"]); ?>&nbsp;&nbsp;<i>市场价：<del>￥<?php echo ($sal["mar-price"]); ?></del></i></strong>
						</div>
						<div class="team"><a href="#">幸福季花艺</a></div>
						
						<script>
							function guigeedit(obj,id){
								$(obj).parent().children().removeClass();
								$(obj).addClass('curr');
								var str='';
								$("#standard_"+id).find('a').each(function(){
									if($(this).attr('class')=='curr')
										 str += $(this).attr('attr')+':';
								});
								str = str.substring(0,str.length-1);
								//alert(str);
								$.getJSON('category.php',{'act':'conPage','goods_id':id,'props_str':str},function(json){
									  if(json.data=='ok'){
										  $("#product_"+id).val(json.value);
									  }
								  });
							}
						</script>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>	
                </ul>
                <div class="pages mb15">
					<div class="page-box">
						<a class="prev_disabled"><i class="iconfont">󰀆</i></a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=1" class="current">1</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=2">2</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=3">3</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=4">4</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=5">5</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=6">6</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=7">7</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=8">8</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=9">9</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=20" class="listpagefooter">..20</a>
						<a href="http://www.coolmarry.cn/category.php?g_id=0&amp;category_id=6&amp;page=2" class="next"><i class="iconfont">󰀅</i></a>
					</div>
				</div>
            </div>
		</div>
	</div>
	<div class="sidebar fr">
		<div class="module2">
			<div class="mod-hd">销售排行</div>
				<div class="mod-bd">
					<ul class="item-list">
						<li>
							<div class="imgbox">
								<a href="http://www.coolmarry.cn/goods.php?goods_id=41419"><img alt="婚纱摄影青木社摄影创作中..." src="/rd/Public/images/thumb_201412311537086314.jpg" height="61" width="82"></a>
								<em class="bg">1</em>
							</div>
							<div class="img-name">
								<a href="http://www.coolmarry.cn/goods.php?goods_id=41419">婚纱摄影青木社摄影创作中...</a>
							</div>
							<p class="price">
								<span class="goods-price">市场价：<del>￥14300</del><br>酷结价：￥10999</span>
							</p>
						</li>
							  <li>
						<div class="imgbox">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41417"><img alt="婚礼摄影师宣野" src="/rd/Public/images/thumb_201412311530099448.JPG" height="61" width="82"></a>
						  <em class="bg">2</em>
						</div>
						<div class="img-name">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41417">婚礼摄影师宣野</a>
						</div>
						<p class="price">
						  <span class="goods-price">市场价：<del>￥3500</del><br>酷结价：￥2000</span></p>
					  </li>
							  <li>
						<div class="imgbox">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41415"><img alt="主持人刘驰" src="/rd/Public/images/thumb_201412311516496448.png" height="61" width="82"></a>
						  <em class="bg">3</em>
						</div>
						<div class="img-name">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41415">主持人刘驰</a>
						</div>
						<p class="price">
						  <span class="goods-price">市场价：<del>￥6000</del><br>酷结价：￥3600</span></p>
					  </li>
							  <li>
						<div class="imgbox">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41413"><img alt="化妆造型师蓉蓉" src="/rd/Public/images/thumb_201412311510109920.jpg" height="61" width="82"></a>
						  <em class="bg">4</em>
						</div>
						<div class="img-name">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41413">化妆造型师蓉蓉</a>
						</div>
						<p class="price">
						  <span class="goods-price">市场价：<del>￥1500</del><br>酷结价：￥1000</span></p>
					  </li>
							  <li>
						<div class="imgbox">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41411"><img alt="『金手指花艺』粉色花艺套..." src="/rd/Public/images/thumb_201412311505213087.jpg" height="61" width="82"></a>
						  <em class="bg">5</em>
						</div>
						<div class="img-name">
						  <a href="http://www.coolmarry.cn/goods.php?goods_id=41411">『金手指花艺』粉色花艺套...</a>
						</div>
						<p class="price">
						  <span class="goods-price">市场价：<del>￥18000</del><br>酷结价：￥10260</span></p>
					  </li>
							</ul>
				  </div>
		</div>
        <div class="ad">
			<a href="http://www.coolmarry.cn/team.php?tid=94"><img src="/rd/Public/images/201412161336132701.jpg" alt="花样年华" height="113" width="210"></a>
		</div>
        <div class="ad">
			<a href="http://www.coolmarry.cn/goods.php?goods_id=40689"><img src="/rd/Public/images/201412161336493452.jpg" alt="化妆造型师李冰" height="113" width="210"></a>
		</div>
    </div>
</div>

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