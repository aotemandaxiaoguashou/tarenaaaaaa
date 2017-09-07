<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Photos/insert/navTabId/photosadd/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
				<?php if(isset($_GET['id'])): ?><input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>">
				<?php else: ?>
			<dl>
				<dt>选择相册：</dt>
				<dd>
					<select name="pid" class="span2">
						<option value="0">根相册</option>
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo countPath($cat['path']); echo ($cat["xname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</dd>
			</dl><?php endif; ?>
			
			<dl>
				<dt>相册名：</dt>
				<dd><input type="text" name="xname" class="required" value=""/>
					
			</dl>
			<dl>
				<dt>添加人：</dt>
				<dd><select class="required" style="width:100%;" name="uname">
					<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cats): $mod = ($i % 2 );++$i;?><option name="uname"><?php echo ($cats["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select></dd>
			</dl>
			<dl>
				<dt>相册描述：</dt>
				<dd><textarea class="span2 required" name="description"></textarea></dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li>
			</ul>
		</div>
	</form>
</div>