<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>发送信件</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Email/insert/navTabId/loveadd/" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<input type="hidden" value="<?php echo ($vo["admin_pwd"]); ?>" name="admin_pwd" class="span2 required">
		<tbody>
		<tr>
			<th>邮件名称(公司名)：</th>
			<td><input type="text" value="<?php echo ($vo["company"]); ?>" name="company" class="span2 required"></td>
		</tr>
		
		<tr><th>发件人邮箱号：</th>
			<td><input type="text" value="<?php echo ($vo["admin_name"]); ?>" name="admin_name"   class="required span2"/> 
			</td>
		</tr>
		
		<tr>
			<th>收件人名称：</th>
			<td><input type="text" name="user_name" value="" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">用于便于记录查看</td></tr>
		
		<tr>
			<th>收件人邮箱：</th>
			<td><input type="text" name="user_email" value="" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">用户的邮箱号</td></tr>
		
		<tr>
			<th>邮件主题：</th>
			<td><input type="text" value="" name="user_title" class="span2 required"></td>
		</tr>
		<tr>
			<th>信件内容：</th>
			<td>
				<textarea class="span5 editor" name="content" style="height:200px;"></textarea>
			</td>				
		</tr>
		</tr>
		<tr><th></th><td><input type="submit" value="点击发送"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>