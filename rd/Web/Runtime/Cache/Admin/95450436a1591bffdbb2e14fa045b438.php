<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>作品详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">作品图</h3>			
			<ul>
				<li><span>图片信息：</span></li>
					<li >
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="/rd/Public/<?php echo ($vo["pic_name"]); ?>" style='width:200px;height:200px'>&nbsp &nbsp &nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
					</li>						
			</ul>		
			</div> 		
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">主题</h3>
			<ul>
				<li><span>主题：</span><?php echo ($vo["title"]); ?></li>			
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">酒店</h3>
			<ul>
				<li><span>酒店：</span><?php echo ($vo["hole_name"]); ?></li>						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">价格</h3>
			<ul>
				<li><span>价格：</span><?php echo ($vo["price"]); ?></li>
						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">新人介绍</h3>
			<ul>
				<li><span>新人介绍：</span><?php echo ($vo["presoninfo"]); ?></li>
						
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">新人要求</h3>
			<ul>
				<li><span>新人要求：</span><?php echo ($vo["requires"]); ?></li>					
			</ul>
			</div>	<br>		
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">详情</h3>
			<div class="box_table" style="width:95%;">
				<table width="100%"><!--这个加上，处理小bug-->
					<ul>
						<li><span>内容：</span><textarea disabled = "true" class="editor" name="detail" rows="20" cols="80" tools="Copy"><?php echo ($vo["detail"]); ?></textarea></li>
					</ul>
					<ul>
						<li><span>更新时间：</span><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></li>						
					</ul>
				</table>
			</div>
			</div> 
		</div>
</div>