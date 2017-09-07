<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="60" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Index/shopset_save/navTabId/pagelist/" method="post" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<tr>
			<th>搜索列表分页数：</th>
			<td><input type="text" value="<?php echo ($vo["list_size_search"]); ?>" name="list_size_search" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">（搜索列表页面每页的显示数设置）</td></tr>
		
		<tr>
			<th>商品列表分页数：</th>
			<td><input type="text" value="<?php echo ($vo["list_size_goods"]); ?>" name="list_size_goods" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">（商品列表页面每页的显示数设置）</td></tr>
		
		<tr>
			<th>文章列表分页数：</th>
			<td><input type="text" value="<?php echo ($vo["list_size_article"]); ?>" name="list_size_article" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">（文章列表页面每页的显示数设置）</td></tr>
		

		<tr><th></th><td><input type="submit" value="更新站点设置"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>