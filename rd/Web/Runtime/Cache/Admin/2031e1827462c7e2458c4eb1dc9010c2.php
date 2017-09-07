<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>添加会员</p>
	</div>
</div>
<div class="pageContent">
		<form action="/rd/index.php/Admin/Users/insert/navTabId/userslist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="100">
			<dl>
				<dt>姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="userpwd"/></dd>
			</dl>
			
			<dl>
				<dt>性别：</dt>
				<dd><input type="radio" name="sex" value="0"/>男
					<input type="radio" name="sex" value="1"/>女</dd>
			</dl>
			<dl>
				<dt>年龄：</dt>
				<dd><input type="text" class="required digits" min="1" max="100" size="10" style="width:100%" name="age"/></dd>
			</dl>
			<dl>
				<dt>Email：</dt>
				<dd><input type="text" size="10" style="width:100%" name="email"/></dd>
			</dl>
			<dl>
				<dt>用户头像：</dt>
				<dd><input type="file" size="10" style="width:100%" name="pic"/></dd>
			</dl>
			<dl>
				<dt>地址：</dt>
				<dd><input type="text" size="10" style="width:100%" name="address"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" size="10" style="width:100%" name="phone"/></dd>
			</dl>
			<dl>
				<dt>会员积分：</dt>
				<dd><input type="text" size="10" style="width:100%" name="points"/></dd>
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