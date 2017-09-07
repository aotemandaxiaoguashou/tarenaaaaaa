<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Score/insert/navTabId/scoreadd/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>添加级别:</dt>
				<dd>
					<input type="text" name="rank"  class="required" >
				</dd>
			</dl>
			
			<dl>
				<dt>级别优惠:</dt>
				<dd><textarea type="text" name="discount" class="required" value="" rows="7" cols="40"></textarea>
					
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li>
			</ul>
		</div>
	</form>
</div>