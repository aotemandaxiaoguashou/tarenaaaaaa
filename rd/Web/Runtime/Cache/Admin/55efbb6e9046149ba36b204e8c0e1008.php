<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="60" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Index/shopset_save/navTabId/siteset/callbackType/closeCurrent" method="post" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<tbody>
		<tr>
			<th>url地址</th>
			<td><input type="text" value="<?php echo ($vo["url"]); ?>" name="url" class="span2"></td>
		</tr>
		<tr><th></th><td class="gray">url地址,例如http://www.rd.com</td></tr>
		
		<tr>
			<th>关闭网站：</th>
			<td>
				<input type="radio" name="offline" value="0" <?php if(($vo["offline"]) == "0"): ?>checked<?php endif; ?> >否
				<input type="radio" name="offline" value="1" <?php if(($vo["offline"]) == "1"): ?>checked<?php endif; ?> >是
			</td>
		</tr>
		<tr><th></th><td class="red">注意：关闭网站，网站将不能访问。请谨慎操作！</td></tr>
		<tr><th></th><td><input type="submit" value="更新站点设置"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>