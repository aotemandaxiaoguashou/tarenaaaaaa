<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Admin/changepwd/navTabId/adminlist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<!-- 获取当前登陆的管理员ID -->
		<input type="hidden" name="id" value="<?php echo ($alist["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">			
				<dl>
					<dt><span>用户名：</span></dt>
					<dd><input type="text" name="admin_name" value="<?php echo ($alist["admin_name"]); ?>" disabled ></dd>
				</dl>
				<dl>
					<dt><span>当前密码：</span></dt>
					<dd><input type="password" class="required span2" name="oldpwd"></dd>
				</dl>
				<dl>
					<dt><span>新密码：</span></dt>
					<dd><input type="password" class="required span2" name="newpwd"></dd>
				</dl>
				<dl>
					<dt><span>确认密码：</span></dt>
					<dd><input type="password" class="required span2"  name="repwd"></dd>
				</dl>
				<dl>
		
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>