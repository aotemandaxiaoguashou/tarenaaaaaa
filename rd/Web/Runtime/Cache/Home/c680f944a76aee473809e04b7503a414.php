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
		
	<title>策划师 – 易结网 - 北京结婚 – 北京婚礼人 – 易结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
	<link rel="shortcut icon" href="http://easywed.cn/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="/rd/Public/css/global.css">
		<link rel="stylesheet" type="text/css" href="/rd/Public/css/vendors.css">
		<script type="text/javascript" src="/rd/Public/js/jquery.easing.min.js"></script>
	<script>
	$(document).ready(function () {
		style = 'easeOutQuart';
		$('.photo').hover(
			function() {
				$(this).children('div:first').stop(false,true).animate({top:0},{duration:200, easing: style});
				$(this).children('div:last').stop(false,true).animate({bottom:0},{duration:200, easing: style});
			},
			function() {
				$(this).children('div:first').stop(false,true).animate({top:-50},{duration:200, easing: style});
				$(this).children('div:last').stop(false,true).animate({bottom:-50},{duration:200, easing: style});
			}
		);
	});
	</script>
	<style>
.photo { position:relative; font-family:arial; text-align:center;height:195px;background:color:#26c3e5;display:block;}
.photo .heading, .photo .caption { position:absolute; background:#000; height:50px; width:168px; opacity:0.6; }
.photo .heading { top:-50px; }
.photo .caption { bottom:-50px; left:0px; }
.photo .heading span { color:#26c3e5; top:-50px; font-weight:bold; display:block; padding:5px 0 0 10px; }
.photo .caption span { color:#26c3e5; font-size:12px; display:block; padding:5px 10px 0 10px; 
		
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
			
	<div class="w pb20">
    <!--标题-->
    <div class="ui-nav-class  clx">
	<ul class="fl">
					<li><a href="/rd/index.php/compere/index" >主持人</a></li>
					<li><a href="/rd/index.php/designer/index">婚礼造型</a></li>
					<li><a href="/rd/index.php/cameraman/index" >婚礼摄像</a></li>
					<li><a href="/rd/index.php/assigner/index">场地布置</a></li>
					<li><a href="/rd/index.php/planner/index" class="on">婚礼策划</a></li>
			</ul>
</div>
   <div class="ui-nav-param pt20" id="j-param">
	<dl class="clx">
		<dt>性别：</dt>
		<dd>
			<ul class="clx">
				<li>
					<a href="/rd/index.php/Home/Planner/index" class="on">全部</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/sex/0">男</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/sex/1">女</a>
				</li>
							</ul>

			<div class="more">
				<a href="javascript:;" class="j-switch"><i class="icons"></i><span class="item-1">更多</span><span class="item-2">收起</span></a>
			</div>
		</dd>
	</dl>
 	<dl class="clx">
		<dt>身高：</dt>
		<dd>
			<ul class="clx">
				<li>
					<a href="/rd/index.php/Home/Planner/index" class="on">全部</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/height/175,180">175-180</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/height/170,175">170-175</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/height/170">170以下</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/height/180">180+</a>
				</li>
							</ul>

			<div class="more">
				<a href="javascript:;" class="j-switch"><i class="icons"></i><span class="item-1">更多</span><span class="item-2">收起</span></a>
			</div>
		</dd>
	</dl>
 	<dl class="clx">
		<dt>年龄：</dt>
		<dd>
			<ul class="clx">
				<li>
					<a href="/rd/index.php/Home/Planner/index/" class="on">全部</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/age/30,40">80后</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/age/40,50">70后</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/age/50,60">60后</a>
				</li>
								<li>
					<a href="/rd/index.php/Home/Planner/index/age/20,30">90后</a>
				</li>
							</ul>

			<div class="more">
				<a href="javascript:;" class="j-switch"><i class="icons"></i><span class="item-1">更多</span><span class="item-2">收起</span></a>
			</div>
		</dd>
	</dl>
 </div>


    <div class="wrap clx">
        <div class="wrap-fl fl">
            <!-- 没有列表数据显示 -->
                            <!--数据列表如果没有数据不显示循环li标签-->
                <div class="pt20 vendors-list" id="j-vendors-list">
                    <ul class="vendors-list-ul">
							<!--主持人所有信息的开始-->
							<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clx">
                                <div class="vendors-list-photo is">
									<!--主持人1头像-->	
                                    <div class="ui-photo c150-150">
                                        <a href="/rd/index.php/Home/Planner/work/id/<?php echo ($vo["id"]); ?>" target="_blank">
                                            <img width="150" height="150" alt="<?php echo ($vo["name"]); ?>" src="/rd/Public/Uploads/marriager/<?php echo ($vo['pic']); ?>" class="imgLoad" style="display: block;">
                                            <i class="hack"></i>
                                        </a>
                                    </div>
                                    <!--易结价修改-->
                                    <div class="vendors-list-photo-msg clx">
                                    <span>
										<a href="/rd/index.php/Home/Planner/work" target="_blank"><!-- 有没有连接都行 -->
											<i class="text-overflow">2</i>
											作品
										</a>
                                    </span>
                                    <span>
                                        <i class="text-overflow">22</i>
                                        点赞
                                    </span>
                                    <span>
                                        <a href="/rd/index.php/Home/Planner/special" target="_blank"><!-- 有没有连接都行 -->
											<i class="text-overflow">1</i>
                                              专栏
                                            </a>
                                    </span>
                                    </div>
                                    <!--易结价-认证商家-->
                                    <!--易结价 -普通人（非认证策划师）-->
                                                                            
                                    <p class="vendors-easywed-price tc">易结价：￥6500</p>
                                            
                                                                            
                                </div>
								<!--主持人的基本信息-->
                                <div class="vendors-list-info">
                                    <div class="vendors-list-name">
                                        <h3>
                                            <a href="" target="_blank">
                                               <?php echo ($vo['name']); ?>                                            </a>
                                        </h3>
                                    </div>
                                    <!--易结认证-->
                                    <div class="vendors-easywed-rz mt10">
                                        <p>易结认证</p>
                                        <div class="vendors-list-address">
                                            <i class="icons icon-15"></i><?php echo ($vo['address']); ?>
                                        </div>                                        
                                    </div>
                                    <div class="vendors-list-job text-overflow">
                                        	
										<span><i class="icons  icon-job-3"></i>策划师</span>
                                    </div>
                                    <p>
										<?php echo ($vo['detail']); ?>
                                        <!--居住：北京身高：1米83所属朗艺北京主持人团队！作为一名职业的婚礼人,从业5年来很荣幸能够一直站在这个舞台上,见证每一对新人的幸福结合.感受着属于她们的爱情故事,一次次的体会幸福瞬间美丽绽放. -->                                
									</p>
                                </div>
								
								

                                <!-- 主持人1 作品图片, 循环a标签   -->
                                <!-- 作品图片, 循环a标签 -->
								<div class="box">
                                <div class="vendors-list-img clx picbox">
									
									<ul class="vendors-list-img-ul piclist mainlist">
                                    <!-- 图片  介绍的信息图片和作品图片-->
									<?php if(is_array($vo['pics'])): $i = 0; $__LIST__ = $vo['pics'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li>
											<div class="photo">
											<div class="heading"><span>策划师</span></div>
											<a href="/rd/index.php/Home/Planner/work/id/<?php echo ($vo["id"]); ?>" target="_blank">
											<div class="pic">
												<img style="display: block;" src="/rd/Public/Uploads/image/<?php echo ($vos['pic']); ?>" class="imgLoad" alt="" height="170" width="170">                                          
											</div>
											</a>
										    <div class="vendors-list-hit">
                                            <span>
                                                <i class="icons icon-20"></i>22                                            </span>
                                            <span>
                                                <i class="icons icon-19"></i>0                                            </span>
											</div>
											<div class="caption"><span><?php echo ($vos['content']); ?></span></div>
										</li>
										<!-- <li>
											<div class="pic">
												<img style="display: block;" src="/rd/Public/Uploads/image/<?php echo ($vos['pic']); ?>" class="imgLoad" alt="" height="170" width="170">                                          
											</div>
										                                        <div class="vendors-list-hit">
                                            <span>
                                                <i class="icons icon-20"></i>11                                           </span>
                                            <span>
                                                <i class="icons icon-19"></i>3                                            </span>
											</div>
										</li> -->
										<!-- <li>
											<div class="pic">
												<img style="display: block;" src="/rd/Public/Uploads/image/<?php echo ($vos['pic']); ?>" class="imgLoad" alt="" height="170" width="170">                                          
											</div>
										                                        <div class="vendors-list-hit">
                                            <span>
                                                <i class="icons icon-20"></i>21                                           </span>
                                            <span>
                                                <i class="icons icon-19"></i>1                                           </span>
											</div>
										</li> --><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--主持人的所有信息到此结束-->
							
							
							
							
                         
                        </ul>
                </div>
                        <div id="j-mod-page" class="mod-page mt20 pb20" data-pagecount="12">
		<div class="inner">
	<a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=1" class="no-link">&lt;&lt;上一页</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=1">1</a><span class="on">2</span><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=3">3</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=4">4</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=5">5</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=6">6</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=7">7</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=8">8</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=9">9</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=10">10</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=11">11</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=12">12</a><a href="http://easywed.cn/vendors/wedmaster.html?search=0-0-0&amp;page=3" class="no-link">下一页&gt;&gt;</a>			<span>共12页，到<input value="3" type="text">页<input value="确认" type="button"></span>
		</div>
	</div>
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