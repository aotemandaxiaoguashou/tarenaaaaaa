<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>添加广告</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Ad/insert/navTabId/adlist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
	<table class="form_table">
		<tbody>
		<tr>
			<th>广告描述：</th>
			<td><input type="text" value="" name="adname" class="span2 required"></td>
		</tr>
		<tr>
			<th>广告图片：</th>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr><th></th><td class="gray"></td></tr>
		
		</tr>
		<tr><th></th><td><input type="submit" value="添加广告"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>