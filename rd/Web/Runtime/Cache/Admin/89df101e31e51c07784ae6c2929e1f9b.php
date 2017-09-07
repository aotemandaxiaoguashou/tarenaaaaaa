<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="60" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Index/shopset_save/navTabId/pagelist/" method="post" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<tr>
			<th>是否开启客服中心：</th>
			<td>
				<input type="radio" name="is_kf" value="1" <?php if(($vo["is_kf"]) == "1"): ?>checked<?php endif; ?> >启用
				<input type="radio" name="is_kf" value="0" <?php if(($vo["is_kf"]) == "0"): ?>checked<?php endif; ?> >关闭
			</td>
		</tr>
		<tr><th></th><td><input type="submit" value="更新站点设置"/></td>
		</tr>
		</tbody>
	</table>
	</form>
</div>