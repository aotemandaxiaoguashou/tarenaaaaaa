<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>公司信息设置</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Index/shopset_save/navTabId/companyset/" method="post" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<tr>
			<th>公司名称：</th>
			<td><input type="text" value="<?php echo ($vo["company"]); ?>" name="company" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">公司名称</td></tr>
		
		<tr>
			<th>版权信息：</th>
			<td><input type="text" value="<?php echo ($vo["copyright"]); ?>" name="copyright" class="span2"></td>
		</tr>
		<tr><th></th><td class="gray">（网站所属的版权。如：Copyright © 2014-2015）</td></tr>
		
		<tr>
			<th>ICP备案号：</th>
			<td><input type="text" value="<?php echo ($vo["icp"]); ?>" name="icp" class="span2"></td>
		</tr>
		<tr><th></th><td class="gray">（信息产业部所颁发的备案信息。如：京ICP备10000010号）</td></tr>
		
		<tr>
			<th>客服电话：</th>
			<td><input type="text" value="<?php echo ($vo["kfphone"]); ?>" name="kfphone" class="span2"></td>
		</tr>
		<tr><th></th><td class="gray">客服电话</td></tr>
		
		<tr>
			<th>客服QQ：</th>
			<td><input type="text" value="<?php echo ($vo["kfqq"]); ?>" name="kfqq" class="span2"></td>
		</tr>
		<tr><th></th><td class="gray">客服QQ</td></tr>

		<tr><th></th><td><input type="submit" value="更新站点设置"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>