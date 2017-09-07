<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>订单详情</p>
	</div>
</div>

<div class="pageContent">
		<div class="pageFormContent" layoutH="60">	
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">会员头像</h3>
			<ul>
				 <li><img src="/rd/Public/Uploads/user/<?php echo ($info['pic']); ?>" style='width:300px;height:220px;'></li>	
			</ul>
			</div> 
			
			<div class="items" style="width:100%;margin:0 auto;">
			<h3 class="ttlm">会员信息</h3>
			<ul>
				<li><span>会员姓名：</span><?php echo ($info["tname"]); ?></li>
				<li><span>手机/电话：</span><?php echo ($info["phone"]); ?></li>
				<li><span>性别：</span><?php echo ($info["sex"]); ?></li>
				<li><span>年龄：</span><?php echo ($info["age"]); ?></li>
				<li><span>地址：</span><?php echo ($info["address"]); ?></li>		
			</ul>
			</div>
		
			</table>
			</div>
			</div> 
		</div>
</div>