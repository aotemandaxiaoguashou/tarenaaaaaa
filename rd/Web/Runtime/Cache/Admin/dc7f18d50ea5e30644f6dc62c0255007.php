<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>酒店详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60"> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">酒店图片</h3>
			<ul>
				 <li><img src="/rd/Public/Uploads/hole/<?php echo ($info['pic']); ?>" style='width:300px;height:220px;'></li>	
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">酒店信息</h3>
			<ul>
				<li><span>酒店名称：</span><?php echo ($info["holename"]); ?></li>
				<li><span>服务电话：</span><?php echo ($info["phone"]); ?></li>
				<li><span>酒店地址：</span><?php echo ($info["address"]); ?></li>
				<li><span>酒店价格：</span><?php echo ($info["price"]); ?></li>
				<li><span>容纳桌数：</span><?php echo ($info["tabnum"]); ?></li>		
				<li><span>酒店类型：</span><?php echo ($info["style"]); ?></li>		
				<li><span>酒店简介：</span><?php echo ($info["intro"]); ?></li>		
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">酒店图片详情</h3>
			<ul>
				 <li><textarea disabled cols="100" rows="50" class="editor" tools="mini"><?php echo ($info["detail"]); ?></textarea></li>	
			</ul>
			</div>
			
		</div>
</div>