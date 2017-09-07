<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>邮件服务设置</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Email/update/navTabId/smtp/" method="post" class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<tr>
			<th>设置SMTP服务器：</th>
			<td><input type="text" value="<?php echo ($vo["email_host"]); ?>" name="email_host" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">SMTP服务器,如：smtp:163.com,smtp:qq.com</td></tr>
		
		<tr>
			<th>设置邮箱名称：</th>
			<td><input type="text" value="<?php echo ($vo["company"]); ?>" name="company"  class="span2 required "></td>
		</tr>
		<tr><th></th><td class="gray">发送邮箱时,作为邮箱的标题</td></tr>
		
		<tr>
			<th>SMTP服务器端口：</th>
			<td><input type="text" value="<?php echo ($vo["email_port"]); ?>" name="email_port" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">SMTP服务器端口,例如25,465默认25</td></tr>
		
		<tr>
			<th>SMTP邮箱号</th>
			<td><input type="text" value="<?php echo ($vo["admin_name"]); ?>" name="admin_name" class="span2 required email"></td>
		</tr>
		<tr><th></th><td class="gray">SMTP对应管理员邮箱号,例如1234567qq@.com</td></tr>
		
		
		<tr>
			<th>SMTP用户密码</th>
			<td><input type="password" value="<?php echo (decrypt($vo["admin_pwd"])); ?>" name="admin_pwd" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">SMTP对应管理员邮箱密码,例如123456</td></tr>
		
		

		<tr><th></th><td><input type="submit" value="更新设置"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>