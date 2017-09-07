<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>攻略详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">	
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">景点区</h3>
			<ul>
				<li><span>地区名：</span><?php echo ($vo["area_name"]); ?></li>			
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">风光图</h3>
			
			<ul>
				<li ><span>图片信息：</span><br><br><br><img src="/rd/Public/<?php echo ($vo["pic"]); ?>" style='width:200px'></li>		
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">主题</h3>
			<ul>
				<li><span>标题：</span><?php echo ($vo["title"]); ?></li>	
				<li><span>作者：</span><?php echo ($vo["auther"]); ?></li>						
			</ul>
			</div>
			
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">简介</h3>
			<ul>
				<li><span>简介：</span><?php echo ($vo["intro"]); ?></li>						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">主要内容</h3>
			<ul>
				<li><span>主要内容：</span><?php echo ($vo["content"]); ?></li>						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">详情</h3>
			<div class="box_table" style="width:95%;">
			<table width="100%"><!--这个加上，处理小bug-->
				<ul>
					<li><span>主题：</span></li>
					<textarea readonly="true" class="editor" name="detail" rows="10" cols="80" tools="Copy"><?php echo ($vo["detail"]); ?></textarea></li>
				</ul>
				<ul>
					<li><span>更新时间：</span><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></li>						
				</ul>
			</table>
			</div>
			</div> 
		</div>
</div>