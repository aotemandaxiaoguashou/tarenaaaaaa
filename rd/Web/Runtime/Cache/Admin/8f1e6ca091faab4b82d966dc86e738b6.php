<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Column/insert/navTabId/columnlist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>栏目名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="columnname" value="<?php echo ($vo["columnname"]); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>英文名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="english" value="<?php echo ($vo["english"]); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>特别注意：</dt><dd style="color:red">英文名称要定义为控制器名或方法名</dd>
			</dl>
			
			<?php if(isset($_GET['id'])): ?><input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>"/>
			<?php else: ?>
			<dl>
				<dt>所属类别：</dt>
				<dd>
					<select name="pid" id="">
						<option value="0">根类别</option>
						<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat['id']); ?>"><?php echo countPath($cat['path']); echo ($cat['columnname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</dd>	
			</dl><?php endif; ?>
			
			<dl>
				<dt>是否首页展示：</dt>
				<dd><input type="radio" name="ismenu" value="1"/>是
					<input type="radio" name="ismenu" value="0" checked />否</dd>
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