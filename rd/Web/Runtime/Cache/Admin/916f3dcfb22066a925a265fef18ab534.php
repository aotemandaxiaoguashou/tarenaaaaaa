<?php if (!defined('THINK_PATH')) exit();?>

<div class="items">
	<h3 class="ttlm">程序数据库/版本</h3>
	<ul>
		<li><span>服务器操作系统：</span><?php echo php_uname('s');?>(<?php echo ($_SERVER['SERVER_ADDR']); ?>)</li>
		<li><span>PHP 运行方式：</span><?php echo php_sapi_name();?></li>
		<li><span>PHP 版本：</span><?php echo phpversion();?></li>					
		<li><span>MySQL 版本：</span><?php echo mysql_get_server_info();?></li>
		<li><span>GD库版本</span>bundled(2.1.Dcompatible)</li>
		<li><span>文件上传的最大大小：</span>2M</li>
		<li><span>脚本最大运行时间：</span>30S</li>		
		<li><span>时区设置：</span>东八区</li>
		<li><span>安装日期：</span>2015-1-1 12:12:12</li>					
	</ul>
</div> 
<div class="items">
	<h3 class="ttlm">开发及测试</h3>
	<ul>
		<li><span>版权信息：</span>Return Dream</li>
		<li><span>系统设计：</span><span style="color:#FF9326;">Return Dream</span></li>
		<li><span>开发及测试：</span><span style="color:#ff9326">赵鸿伟 季旋 陈会安</span></li>
		<li><span>后台框架：</span><a href="http://j-ui.com/" style="color:#999;">DWZ富客户端框架(J-UI.com)</a></li>
		<li><span>项目开始时间：</span>2015-1-05</li>
		<li><span>审核时间：</span>2015-1-26</li>
		<li><span>地点：</span>北京市昌平区文华西路育荣教育园区LAMP兄弟连</li>
		<li><span>期别：</span>lamp94期</li>
		<li><span>指导老师：</span>王洪利</li>
	</ul>
</div> 
</div>