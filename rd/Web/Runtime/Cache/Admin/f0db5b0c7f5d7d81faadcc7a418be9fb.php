<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Action/update/navTabId/actionlist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
			<dl>
				<dt>自定操作名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="action_myname" value="<?php echo ($vo["action_myname"]); ?>" placeholder="描述操作功能名称,如 浏览用户"/></dd>
			</dl>
			
			<dl>
				<dt>控制器名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="controllers_name" value="<?php echo ($vo["controllers_name"]); ?>"/></dd>
			</dl>
			<dl style="width:100%;color:green">本系统控制主要提供:Users | Column | Hole | Goods | GoodsCat | Order | Ad | Links | Admin |<br> 
			 Action | Role | Love | Email | Article | Marriager | Serve | Price | photos | Picture | Score |等等</dl>
			<dl>
				<dt>方法名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="mothods_name" value="<?php echo ($vo["mothods_name"]); ?>"  placeholder="填写index,del,add,edit"/></dd>
			</dl>
			<dl style="width:100%;color:orange">温馨提示:方法名一般有 index | add | edit | del (delete_tags仅admin | production| love| wedding<br>有效) 请勿写 insert | update| 首页的index 否则无效</dl>
			
			<dl>
				<dt>状态：</dt>
				<dd><input type="radio" name="action_status" value="1" checked />启用
					<input type="radio" name="action_status" value="0"/>禁用</dd>
			</dl>
			
			<dl>
				<dt>操作说明：</dt>
				<dd><textarea class="required"  style="width:100%" name="action_des" value=""><?php echo ($vo["action_des"]); ?></textarea></dd>
			</dl>
			
			<dl>
				<dt></dt>
				<dd style="margin:35px 0px 0px 30px;width:100%;color:#666;">说明：请遵守操作原则否则无效</dd>
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