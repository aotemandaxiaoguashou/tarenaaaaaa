<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Score/update/navTabId/scorelist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<input type="hidden" name="id" value="<?php echo ($datas["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>级别名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="rank" value="<?php echo ($datas["rank"]); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>级别优惠:</dt>
				<dd><textarea type="text" name="discount" class="required" value="" rows="7" cols="40"><?php echo ($datas["discount"]); ?></textarea>
			</dl>
		</div>
		

		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>