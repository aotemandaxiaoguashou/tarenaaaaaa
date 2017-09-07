<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>订单详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">	
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">订单信息</h3>
			<ul>
				<li><span>订单编号：</span><?php echo ($order["ident"]); ?></li>
				<li><span>订单总价：</span>￥<?php echo ($order["all-price"]); ?>元</li>
				<li><span>下单时间：</span><?php echo (date("Y-m-d H:i:s",$order["addtime"])); ?></li>
				<li><span>支付时间：</span><?php echo (date("Y-m-d H:i:s",$order["paytime"])); ?></if></li>			
				<li><span>订单状态：</span><?php if(($order["ispay"]) == "1"): ?>已支付<?php else: ?>请支付<?php endif; ?>
					<?php if(($order["issure"]) == "1"): ?>已确认<?php else: ?>等待商家确认<?php endif; ?>
					<?php if(($order["issend"]) == "1"): ?>已发货<?php else: ?>待发货<?php endif; ?></li>			
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">收货人信息</h3>
			<ul>
				<li><span>收件人信息：</span><?php echo ($users["tname"]); ?></li>			
				<li><span>电话信息：</span><?php echo ($users["phone"]); ?></li>			
				<li><span>邮箱信息：</span><?php echo ($users["zipcode"]); ?></li>			
				<li><span>地址信息：</span><?php echo ($users["address"]); ?></li>			
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">会员信息</h3>
			<ul>
				<li><span>会员名：</span><?php echo ($users["username"]); ?></li>
				<li><span>手机：</span><?php echo ($users["phone"]); ?></li>
				<li><span>邮箱：</span><?php echo ($users["email"]); ?></li>		
			</ul>
			</div>
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">商品信息</h3>
			<div class="box_table" style="width:95%;">
			<table width="100%"><!--这个加上，处理小bug-->
				<th>商品：</th>
				<!-- <td><span>商品名称：</span><a href="/rd/Home/Category/info/id/<?php echo ($vo["goods_id"]); ?>" target="_blank"><?php echo ($vo["goodsname"]); ?></a> <span>商品价格：</span><a href="#" >￥<?php echo ($vo["goods_price"]); ?></a></td> -->
				<?php if(is_array($gids)): foreach($gids as $key=>$g): ?><tr>
							<td>
								<img src="/rd/Public/Uploads/goods/<?php echo ($g['gdetail']["pic"]); ?>" alt="<?php echo ($good["goodsname"]); ?>" width="38" height="50">
							</td>
							<td class="user-tab6-name"><a href="/rd/index.php/Goods/detail/id/<?php echo ($g['gdetail']["id"]); ?>" title="粉色唯美花艺套餐"><?php echo ($g['gdetail']["goodsname"]); ?></a></td>
							<td><?php echo ($g['gdetail']["price"]); ?></td>
							<td><?php echo ($g["buynum"]); ?></td>
							<td><?php echo ($g["sum-price"]); ?></td>
						</tr><?php endforeach; endif; ?>	 
			
			</table>
			</div>
			</div> 
		</div>
</div>