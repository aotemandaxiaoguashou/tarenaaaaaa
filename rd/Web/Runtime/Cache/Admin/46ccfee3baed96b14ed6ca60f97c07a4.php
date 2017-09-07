<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>订单详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">	
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">商品图片</h3>
			<ul>
				 <li><img src="/rd/Public/Uploads/goods/<?php echo ($info['pic']); ?>" style='width:300px;height:220px;'></li>	
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">商品信息</h3>
			<ul>
				<li><span>名称：</span><?php echo ($info["goodsname"]); ?></li>
				<li><span>价格：</span><?php echo ($info["price"]); ?></li>
				<li><span>库存：</span><?php echo ($info["total"]); ?></li>
				<li><span>销量：</span><?php echo ($info["sales"]); ?></li>
				<li><span>添加时间：</span><?php echo (date("Y-m-d H:i",$info["addtime"])); ?></li>		
				<li><span>更新时间：</span><?php echo (date("Y-m-d H:i",$info["addtime"])); ?></li>		
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">商品图片详情</h3>
			<ul>
				 <li><textarea disabled cols="100" rows="50" class="editor" tools="mini"><?php echo ($info["detail"]); ?></textarea></li>	
			</ul>
			</div>
		</div>
</div>