<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Price/update/navTabId/servelist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<input type="hidden" name="id" value="<?php echo ($datas["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>婚礼人:</dt>
				<dd>
					<select name="uid">
						<option value="0">请选择婚礼人</option>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>服务类型:</dt>
				<dd>
					<input type="text" name="type"  class="required" value="<?php echo ($datas["type"]); ?>">
				</dd>
			</dl>
			<dl>
				<dt>服务价格:</dt>
				<dd>
					<input type="text" name="price" class="required" value="<?php echo ($datas["price"]); ?>" >
				</dd>
			</dl>
			<dl>
				<dt>服务说明:</dt>
				<dd><textarea type="text" name="detail" class="required"  rows="3" cols="15"><?php echo ($datas["detail"]); ?></textarea>
					
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