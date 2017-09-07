<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>婚纱详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">	
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">工作室</h3>
			<ul>
				<li><span>工作室：</span><?php echo ($vo["title"]); ?></li>
				<li><span>宗旨：</span><?php echo ($vo["content"]); ?></li>					
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">图片</h3>
			
			<ul>
				<li ><span>图片信息：</span><br><br><br><img src="/rd/Public/<?php echo ($vo["pic_name"]); ?>" style='width:200px'></li>		
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">价格</h3>
			<ul>
				<li><span>市场价：</span><?php echo ($vo["sale"]); ?> &nbsp元</li>
				<li><span>优惠价：</span><?php echo ($vo["price"]); ?>&nbsp元</li>
						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">详情</h3>
			<div class="box_table" style="width:95%;">
			<table width="100%"><!--这个加上，处理小bug-->
				<ul>
					<li><span>主题：</span><textarea cols="75"  tools="PastePastetext" class="editor" rows="20" name="info"><?php echo ($vo["info"]); ?></textarea></li>
					<!-- <li><span>内容：</span><textarea disabled = "true" class="editor" name="description" rows="6" cols="80" tools="Copy"><?php echo ($vo["detail"]); ?></textarea></li>						 -->
				</ul>
				<ul>
					<li><span>更新时间：</span><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></li>						
				</ul>
			</table>
			</div>
			</div> 
		</div>
</div>