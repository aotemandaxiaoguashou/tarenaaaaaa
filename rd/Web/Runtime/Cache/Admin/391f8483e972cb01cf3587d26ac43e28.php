<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理</title>

<link href="/rd/Public/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/rd/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/rd/Public/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="/rd/Public/dwz/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/rd/Public/css/gd_dwz.css" rel="stylesheet" type="text/css"/>
<!--[if IE]>
<link href="/rd/Public/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<script src="/rd/Public/dwz/js/speedup.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>

<script src="/rd/Public/dwz/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/uploadify/scripts/swfobject.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/uploadify/scripts/jquery.uploadify.v2.1.0.js" type="text/javascript"></script>


<script src="/rd/Public/dwz/js/dwz.min.js" type="text/javascript"></script>
<script src="/rd/Public/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="/rd/Public/My97DatePicker/WdatePicker.js"></script><!--日历-->

<script type="text/javascript">
$(function(){
	DWZ.init("/rd/Public/dwz/dwz.frag.xml", {
		//loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
		//loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{ pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({ themeBase:"/rd/Public/dwz/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});

</script>
</head>

<body scroll="no">
	<div id="layout">
        <!-- 页头信息 -->
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="#">标志</a>
				<ul class="nav">
					<li><a href="/rd" target="_blank">前台首页</a></li>
					<li><a>今天是 <?php echo date("Y-m-d",time());?></a></li>
					<li><a href="#" target="_blank">欢迎您：<?php echo ($_SESSION[C('SESSION_ADMIN')]['admin_name']); ?></a></li>
					<li><a href="/rd/index.php/Admin/Admin/Repwd/id/<?php echo ($_SESSION[C('SESSION_ADMIN')]['id']); ?>" target="dialog">修改密码</a></li>
					<li><a href="/rd/index.php/Admin/Login/logout">退出</a></li>
				</ul>
				
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>
		</div>
        <!-- 页头信息 -->
        
        <!-- 左侧导航栏开始 -->
		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>
				<div class="accordion" fillSpace="sidebar">
				
					<div class="accordionHeader">
						<h2><span>Folder</span>会员管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Users/index" target="navTab" rel="userslist">会员列表</a></li>
							<li><a href="/rd/index.php/Admin/Users/add" target="diaLog" rel="usersadd">添加会员</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>栏目管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Column/index" target="navTab" rel="columnlist">栏目列表</a></li>
							<li><a href="/rd/index.php/Admin/Column/add" target="dialog" rel="columnlist">添加栏目</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>酒店管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Hole" target="navTab" rel="holelist">酒店列表</a></li>
							<li><a href="/rd/index.php/Admin/Hole/add" target="navTab" rel="holelist">添加酒店</a></li>		
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>商品管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Goods" target="navTab" rel="goodslist">商品列表</a></li>
							<li><a href="/rd/index.php/Admin/Goods/add" target="navTab" rel="goodslist">添加商品</a></li>
							<li><a href="/rd/index.php/Admin/Goodscat" target="navTab" rel="goodslist">商品分类</a></li>
		
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>订单管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/order" target="navTab" rel="orderlist">订单列表</a></li>		
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>链接管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Ad/index" target="navTab" rel="adlist">广告列表</a></li>
							<li><a href="/rd/index.php/Admin/Links/index" target="navTab" rel="linkslist">友情链接</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>权限控制</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Admin/index" target="navTab" rel="adminlist" title='管理员'>管理员列表</a></li>	
							<li><a href="/rd/index.php/Admin/Admin/Repwd/id/<?php echo ($_SESSION[C('SESSION_ADMIN')]['id']); ?>" target="dialog" rel="passwd" width="550" height="380">修改你的密码</a></li>
							<li><a href="/rd/index.php/Admin/Role/index" target="navTab" rel="rolelist">角色管理</a></li>
							<li><a href="/rd/index.php/Admin/Action/index" target="navTab" rel="actionlist">操作管理</a></li>
							<!--
							<li><a href="/rd/index.php/Admin/Logs" target="navTab" rel="logslist">日志管理</a></li>
							-->
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>作品展示</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Production/index" target="navTab" rel="productionlist">展示作品列表</a></li>
							<li><a href="/rd/index.php/Admin/Production/add" target="navTab" rel="productionadd">添加展示作品</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>蜜月攻略</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Love" target="navTab" rel="lovelist" title='显示攻略列表'>蜜月攻略列表</a></li>
							<li><a href="/rd/index.php/Admin/love/add" target="navTab" rel="loveadd">添加蜜月攻略</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>婚纱摄影</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Wedding/index" target="navTab" rel="Weddinglist">婚纱列表</a></li>
							<li><a href="/rd/index.php/Admin/Wedding/add" target="navTab" rel="Weddingadd">添加婚纱</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>邮箱管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Email/emailconfig" target="navTab" rel="emailconfig" title="邮箱配置">配置邮箱</a></li>
							<li><a href="/rd/index.php/Admin/Email/emailsend" target="navTab" rel="emailsend">发送邮箱</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>文章管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Article" target="navTab" rel="articlelist" title="显示文章">文章列表</a></li>
							<li><a href="/rd/index.php/Admin/Article/add" target="navTab" rel="addarticle">文章添加</a></li>
							<li><a href="/rd/index.php/Admin/ArticleCat/index" target="navTab" rel="articlecat" title='显示文章分类'>文章分类</a></li>
						</ul>
					</div>
					
					
				
					<div class="accordionHeader">
						<h2><span>Folder</span>找婚礼人</h2>
					</div>
					
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
							<li><a>婚礼人管理</a>
								<ul>
									<li><a href="/rd/index.php/Admin/marriager/add" target="navTab" rel="marriageadd">婚礼人添加</a></li>
									<li><a href="/rd/index.php/Admin/marriager" target="navTab" rel="marriagelist">管理婚礼人</a></li>
								</ul>
							</li>
						
							<li><a>婚礼人服务</a>
								<ul>
									<li><a href="/rd/index.php/Admin/serve/add" target="diaLog" rel="marriageadd">服务添加</a></li>
									<li><a href="/rd/index.php/Admin/serve" target="navTab" rel="marriagelist">服务列表</a></li>
								</ul>
					
							
							<li><a>婚礼人报价</a>
								<ul>
									<li><a href="/rd/index.php/Admin/price/add" target="diaLog" rel="marriageadd">报价添加</a></li>
									<li><a href="/rd/index.php/Admin/price" target="navTab" rel="marriagelist">报价列表</a></li>
								</ul>
							</li>
						</ul>
					</div>
				
								
					
					<div class="accordionHeader">
						<h2><span>Folder</span>相册管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Photos/index" target="navTab" rel="photoslist">相册列表</a></li>
							<li><a href="/rd/index.php/Admin/Photos/add" target="diaLog" rel="photosadd">相册添加</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>图片管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Picture/add" target="navTab" rel="pictureadd">图片添加</a></li>
							<li><a href="/rd/index.php/Admin/Picture" target="navTab" rel="picturelist">管理图片</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>积分管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Score" target="navTab" rel="scorelist">级别列表</a></li>
							<li><a href="/rd/index.php/Admin/Score/add" target="diaLog" rel="scoreadd">添加级别</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>系统管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="/rd/index.php/Admin/Index/shopset" target="navTab" rel="shopset">网站信息设置</a></li>
							<li><a href="/rd/index.php/Admin/Index/companyset" target="navTab" rel="companyset">公司信息设置</a></li>
							<li><a href="/rd/index.php/Admin/Index/pagelist" target="diaLog" layouth="100" rel="pagelist">分页列表设置</a></li>
							<li><a href="/rd/index.php/Admin/Index/system" target="navTab" rel="system">系统信息</a></li>
							<li><a href="/rd/index.php/Admin/Index/kefu" target="diaLog" rel="kefu">客服设置</a></li>
							<li><a href="/rd/index.php/Admin/Index/siteset" target="diaLog" rel="siteset">站点控制</a></li>
						</ul>
					</div>
					
           
				</div>
			</div>
		</div>
        <!-- 左侧导航栏结束-->
        
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div id="pageContent">
<div class="box_table">
	
</div>

<div class="items">
	<h3 class="ttlm">程序数据库/版本</h3>
	<ul>
		<li><span>服务器操作系统：</span><?php echo php_uname('s');?>(<?php echo ($_SERVER['SERVER_ADDR']); ?>)</li>
		<li><span>PHP 运行方式：</span><?php echo php_sapi_name();?></li>
		<li><span>PHP 版本：</span><?php echo phpversion();?></li>					
		<li><span>MySQL 版本：</span><?php echo mysql_get_client_info();?></li>
		<li><span>文件上传的最大大小：</span><?php echo ini_get("upload_max_filesize");?></li>					
		<li><span>时区设置：</span><?php echo date_default_timezone_get();?></li>
		<li><span>安装日期：</span>2015-1-05 12:12:12</li>					
	</ul>
</div> 
<div class="items">
	<h3 class="ttlm">开发及测试</h3>
	<ul>
		<li><span>版权信息：</span>Return Dream</li>
		<li><span>系统设计：</span><span style="color:#FF9326;">Return Dream</span></li>
		<li><span>开发及测试：</span><span style="color:#ff9326">李梦梦</span></li>
		<li><span>后台框架：</span><a href="http://j-ui.com/" style="color:#999;">DWZ富客户端框架(J-UI.com)</a></li>
		<li><span>项目开始时间：</span>2016-10-05 12:12:12</li>
		<li><span>地点：</span>北京市海淀区紫金大厦六层达内科技</li>
		<li><span>期别：</span>PHP1603</li>
		<li><span>指导老师：</span></li>
	</ul>
</div> 
</div>					
				</div>
			</div>

		</div>

	<div id="footer">Copyright &copy; 2012 <a href="demo_page2.html" target="dialog">开发团队</a><!-- Tel：--></div>
</body>
</html>