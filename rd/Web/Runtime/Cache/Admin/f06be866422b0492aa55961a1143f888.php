<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/ArticleCat/insert/navTabId/articlecat/callbackType/closeCurrent"  class="pageForm required-validate" onsubmit="return validateCallback(this,dialogAjaxDone);">
		<div class="pageFormContent" layoutH="60">
		<input type="hidden" name="pid" value="0">
		<input type="hidden" name="path" value="0">
	<table class="form_table">
		<tbody>		
		<tr>
			<th>根分类名称:</th>
			<td><input type="text" name="cat_name" value="<?php echo ($vo["cat_name"]); ?>"><?php echo ($vo["cat_name"]); ?></td>
		</tr>
		<tr>
			<th>分类排序:</th>
			<td><input type="text" name="sort_order"></td>
			<td style='color:#ccc'>注意排序</td>
		</tr>
			
		<tr>
			<th></th>
			<td><input type="submit" value="保存"></td>
		</tr>
		</tbody>
	</table>
			
		</div>
	</form>
</div>