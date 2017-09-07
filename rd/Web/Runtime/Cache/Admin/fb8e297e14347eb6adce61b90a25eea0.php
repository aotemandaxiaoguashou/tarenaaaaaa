<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>编辑会员</p>
	</div>
</div>
<div class="pageContent">
	<form action="/rd/index.php/Admin/Users/update/navTabId/userslist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="100">
			<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($user["id"]); ?>"/>
			<dl>
				<dt>姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username" value="<?php echo ($user['username']); ?>"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="userpwd" value="<?php echo ($user['userpwd']); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>性别：</dt>
				<dd><input type="radio" name="sex" value="0"/>男
					<input type="radio" name="sex" value="1"/>女</dd>
			</dl>
			<dl>
				<dt>年龄：</dt>
				<dd><input type="text" class="required digits" min="1" max="100" size="10" style="width:100%" name="age" value="<?php echo ($user['age']); ?>"/></dd>
			</dl>
			<dl>
				<dt>Email：</dt>
				<dd><input type="text" size="10" style="width:100%" name="email" value="<?php echo ($user['email']); ?>"/></dd>
			</dl>
			<dl>
				<dt>用户头像：</dt>
				<dd><input type="file" size="10" style="width:100%" name="pic"/></dd>
			</dl>
			<dl>
				<dt>地址：</dt>
				<dd><input type="text" size="10" style="width:100%" name="address" value="<?php echo ($user['address']); ?>"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" size="10" style="width:100%" name="phone" value="<?php echo ($user['phone']); ?>"/></dd>
			</dl>
			<dl>
				<dt>会员积分：</dt>
				<dd><input type="text" size="10" style="width:100%" name="points" value="<?php echo ($user['points']); ?>"/></dd>
			</dl><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>