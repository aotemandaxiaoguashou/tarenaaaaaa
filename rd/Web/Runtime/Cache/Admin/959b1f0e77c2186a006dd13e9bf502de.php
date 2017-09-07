<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Goodscat/insert/navTabId/goodslist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>分类名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="catname" value="<?php echo ($vo["catname"]); ?>"/></dd>
			</dl>
			
			<?php if(isset($_GET['id'])): ?><input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>"/>
			<?php else: ?>
			<dl>
				<dt>所属类别：</dt>
				<dd>
					<select name="pid" id="">
						<option value="0">根类别</option>
						<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat['id']); ?>"><?php echo countPath($cat['path']); echo ($cat['catname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</dd>	
			</dl><?php endif; ?>
			
			<dl>
				<dt>是否首页展示：</dt>
				<dd><input type="radio" name="is_menu" value="1"/>是
					<input type="radio" name="is_menu" value="0" checked />否</dd>
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