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
		
	<title>酒店详情-酷结网</title>

		<!--网页标题 结束-->
		
		<link rel="stylesheet" href="/rd/Public/css/base.css">
		<link rel="stylesheet" href="/rd/Public/css/style.css">
		<script src="/rd/Public/js/jquery-1.js"></script>
		<script src="/rd/Public/js/global.js"></script>
		
		<!--此处是头部占位，用来写各页面自己的CSS、JS和各CSS、JS的链接-->
		
  <script>
  function strtotimed(datetime){   
      var tmp_datetime = datetime.replace(/:/g,'-');
      tmp_datetime = tmp_datetime.replace(/ /g,'-');
      var arr = tmp_datetime.split("-");
      var y=arr[0];
      var m=arr[1]-1;
      var d=arr[2];
      var h=arr[3]-8; ///兼容八小时时差问题
      var i=arr[4];
      var s=arr[5];
      //兼容无"时:分:秒"模式
      if(arr[3]=='undefined' || isNaN(h)){
        h=00;
      }
      if(arr[4]=='undefined' || isNaN(i)){
        i=00;
      }
      if(arr[5]=='undefined' || isNaN(s)){
        s=00;
      }
      var now = new Date(Date.UTC(y,m,d,h,i,s));
      return parseInt(now.getTime()/1000);
  }
  
    $(function(){
      $("input[name=year_day]").val('');
      $("input[name=month_day]").val('');
      $("input[name=day_day]").val('');
    $(".time-box").hide();
      $("#imgScroll").jcImgScroll({});
      $("#pro-det-title").tabs({
        cntSelect: "#pro-de-wrap",
        tabEvent: "click",
        tabStyle: "normal",
        onStyle : "pro-curr"
      });
      
      $('.pro-join-cart').click(function(){
        var num = ischecktime();
        if(num==3){
            var product_number = $("#pamount").val();
            var number = ($("input[name=goods_num]").val()>0)?$("input[name=goods_num]").val():1;
            var product_id = $("#product_id").val();
            var year = $("input[name=year_day]").val(),month=$("input[name=month_day]").val(),day=$("input[name=day_day]").val();
            var datetime = year+'-'+month+'-'+day;
            var date_time = strtotimed(datetime);
            $.getJSON('cart.php',{'act':'save','goods_id':40765,'product_id':product_id,'number':number,'type':'joincart','datetime':date_time},function(json){
              if(json.ok==1){
                location.reload();
              }
            });
        }
          //$.post('cart.php?act=save&goods_id=40765&product_id='+product_id+'&number=1',);
          //location.href='cart.php?act=save&goods_id=40765&product_id='+product_id+'&number=1';
        });
      
      $('.pro-buy-now').click(function(){
        var num = ischecktime();
        if(num==3){
            var product_number = $("#pamount").val();
            var number = ($("input[name=goods_num]").val()>0)?$("input[name=goods_num]").val():1;
            var product_id = $("#product_id").val();
            var year = $("input[name=year_day]").val(),month=$("input[name=month_day]").val(),day=$("input[name=day_day]").val();
            var datetime = year+'-'+month+'-'+day;
            var date_time = strtotimed(datetime);
            //alert('cart.php?act=save&goods_id=40765&product_id='+product_id+'&number='+number+'&datetime='+date_time);
            location.href='cart.php?act=save&goods_id=40765&product_id='+product_id+'&number='+number+'&datetime='+date_time;
        }
     });
     $('.amount-plus').click(function(){
    $(this).prev().val(parseInt($(this).prev().val())+1);
    });
    $('.amount-minus').click(function(){
    var cur_val=parseInt($(this).next().val());
    if((cur_val-1)>0)
    {
      $(this).next().val(cur_val-1);
    }
    });
      //图片切换
      $(".product-pic-list").find("img").mouseover(function(){
        var imgSrc=$(this).attr("name");
        $(".product-picture").find("img").eq(0).attr("src",imgSrc);
      });
      $("#year li").click(function(){
        $(this).parent().children().removeClass("curr");
        $(this).addClass("curr");
        $(this).parent().hide();
        $(this).parent().next().show();
        $("#year_day").html($(this).text()+"<i class='icon1'></i>");
        $("input[name=year_day]").val(parseInt($(this).text()));
        $("#year_day").removeClass("current");
        $("#month_day").addClass("current");
      });
      $("#month li").click(function(){
        $(this).parent().children().removeClass("curr");
        $(this).addClass("curr");
        $("#month_day").html($(this).text()+"<i class='icon1'></i>");
        $("input[name=month_day]").val(parseInt($(this).text()));
        var y=$("#year .curr").attr("name");
        var m=$(this).attr("name");
        var id=40765;
        $.ajax({
          type:"POST",
          url:"?act=getDays",
          async:false,
          data: "_year="+y+"&_month="+m+"&id="+id,
          dataType:"html",
          success:function(html){
            $("#day").html(html);
          }
        });
        $(this).parent().hide();
        $(this).parent().next().show();
        $("#month_day").removeClass("current");
        $("#day_day").addClass("current");

        $("#year_day").html($("#year .curr").text()+"<i class='icon1'></i>");
      });
      $("#day").on('click','li',function(){
        if($(this).attr('class')!='noitem'){
          $(this).addClass("curr");
            $("#day_day").html($(this).text()+"<i class='icon1'></i>");
            $("#day_day").removeClass('current');
            $(this).parent().parent().hide();

            $("#year_day").html($("#year .curr").text()+"<i class='icon1'></i>");
            $("#month_day").html($("#month .curr").text()+"<i class='icon1'></i>");
            $("input[name=day_day]").val(parseInt($(this).text()));
        }
      });
    });
    
    function ischecktime(){
            return 3;
          }
  </script>
    <link type="text/css" rel="stylesheet" href="/rd/Public/css/hotel_new_css.css">
	<link type="text/css" rel="stylesheet" href="/rd/Public/css/newhotel_header.css">
	<script type="text/javascript" src="/rd/Public/js/jquery-1.js"></script>
    <script type="text/javascript" src="/rd/Public/js/hotel_shop.js"></script>
	<link rel="stylesheet" type="text/css" href="/rd/Public/css/max_hotel_header.css">
	<script type="text/javascript" src="/rd/Public/js/Scroll_loading.js"></script>
	<script>
		$(function(){
			$(".loadimg").scrollLoading();	
		})
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
		<span>当前位置：</span><a href="/rd/index.php/Index">首页</a>&gt;<a href="/rd/index.php/<?php echo ($hole["english"]); ?>"><?php echo ($hole["columnname"]); ?></a>&gt; <em><?php echo ($hole["holename"]); ?></em>
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
	<div class="main-cont fr">
		<div class="product mb15">
			<div class="hotelinfo_new_jiben">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td width="500">
								<img src="/rd/Public/Uploads/hole/<?php echo ($hole["pic"]); ?>" style="margin-top: 5px;" title="<?php echo ($hole["holename"]); ?>" alt="<?php echo ($hole["holename"]); ?>" height="280" width="470">
							</td>
							<td valign="top">
								<div class="h11"><h1><?php echo ($hole['holename']); ?></h1></div>
								<div class="clear"></div>
								<div class="clear"></div>
								<p class="hotelinfo_new_p2">&nbsp;&nbsp;<?php echo ($hole['intro']); ?></p>
								<p class="hotelinfo_new_p3_2"> <a onclick="showDiv('order');show_hide('easyOrder_Hotel','easyOrder_Hotel_main','');" id="hotel_in_order">免费预约看场地</a></p>
								<span class="hotelinfo_new_p3 hotelinfo_new_p3_1">婚宴价格：<?php echo ($hole["price"]); ?>元/桌</span>
								<span class="hotelinfo_new_p3" style="margin-left:55px;">容纳桌数：<?php echo ($hole['tabnum']); ?>桌</span>
								<div class="hotelinfo_new_p3"><p class="hotelinfo_new_p3a">酒店地址：<a href="#">东城区</a>—<?php echo ($hole['address']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
								<div id="hotelch" class="phone_yuyue addiv_03">
									<div class="suc_title">
										<img src="/rd/Public/images/border_exit.jpg" class="img001" onclick="testDisplay2('hotelch')">提交成功！婚礼顾问会尽快与您联系并将相关信息发送给您。                    </div>
								</div>
								<p class="hotelinfo_new_p3">酒店特色：                    
									<a href="#" title="<?php echo ($hole['style']); ?>预定"><?php if($hole["style"] == 0): ?>五星级酒店<?php elseif($hole["style"] == 1): ?>四星级酒店<?php elseif($hole["style"] == 2): ?>三星级酒店<?php elseif($hole["style"] == 3): ?>连锁酒店<?php else: ?>草坪婚宴酒店<?php endif; ?></a>
								</p>
								<p class="hotelinfo_new_p3">咨询热线：<span class="top_phone"><?php echo ($hole['phone']); ?></span>(9:30-18:00)</p>
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
				<div id="pro-de-wrap" class="pro-de-wrap">
                    <div style="display: block;" class="details-content p15 clearfix">
						<p><strong><span style="font-size:16px;"><span style="font-family:宋体;">【<?php echo ($hole["columnname"]); ?>】<?php echo ($hole["holename"]); ?></span></span></strong></p>
						<p>&nbsp;</p>
						<p style="text-align: center;"><img alt="" src="/rd/Public/Uploads/hole/<?php echo ($hole["pic"]); ?>" style="width: 600px; height: 400px;"></p>
						<p><strong><span style="font-size:14px;"><span style="font-family:宋体;">详情介绍：</span></span></strong></p>
						<p>&nbsp;</p>
						<p><span style="font-size:14px;"><span style="font-family:宋体;">名称：<?php echo ($hole["holename"]); ?>。</span></span></p>
						<p>&nbsp;</p>
						<p><span style="font-size:14px;"><span style="font-family:宋体;">商品详情：</span></span></p>
						<p>&nbsp;</p>
					</div>
                    <div class="details-content clearfix">
						<?php echo ($hole["detail"]); ?>
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