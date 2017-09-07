<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Admin/update/navTabId/adminlist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<!-- 隐藏域 -->
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>用户名:</dt>
				<dd><input type="text"  class="required" name='admin_name' value="<?php echo ($vo["admin_name"]); ?>" <?php if($vo["admin_name"] == admin): ?>disabled="true"<?php endif; ?>></dd>
			</dl>
			
			<dl>
				<dt>邮箱：</dt>
				<dd><input type="text"  class="required" name='email' value="<?php echo ($vo["email"]); ?>"></dd>
			</dl>
			
			<dl>
				<dt>是否启用</dt>
				<dd>
				<input type="radio"  class="required" name="stutas" value="0" <?php if($vo["enabled"] == 0): ?>checked<?php endif; ?>/>启用
				<input type="radio"  class="required" name="stutas" value="1" <?php if($vo["enabled"] == 1): ?>checked<?php endif; ?>/>禁用</dd>
			</dl>
			
			<dl>
				<dt>分配角色：</dt>
				<div style="float:left;margin:8px;">
				<?php if(is_array($rolelist)): $i = 0; $__LIST__ = $rolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><input type="checkbox" name="rids[]" value="<?php echo ($role["id"]); ?>" <?php if(in_array($role[id],$rid)): ?>checked<?php endif; ?>/><?php echo ($role["role_myname"]); endforeach; endif; else: echo "" ;endif; ?>
				</div>
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