<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Price/price_save/navTabId/pricelist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>婚礼人:</dt>
				<dd>
					<select name="uid">
						<option value="0">请选择婚礼人</option>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option name="uid"><?php echo ($cat["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>服务类型:</dt>
				<dd>
					<input type="text" name="type"  class="required" >
				</dd>
			</dl>
			<dl>
				<dt>服务价格:</dt>
				<dd>
					<input type="text" name="price" class="required" >
				</dd>
			</dl>
			<dl>
				<dt>服务说明:</dt>
				<dd><textarea type="text" name="detail" class="required" value="" rows="3" cols="30"></textarea>
					
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li>
			</ul>
		</div>
	</form>
</div>