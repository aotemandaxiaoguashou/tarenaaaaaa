<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/rd/index.php/Admin/Photos/update/navTabId/photoslist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>上级相册</dt>
				<dd><select class="required" style="width:100%;" name="pid">
					<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo countPath($cat['path']); echo ($cat["xname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select></dd>
			</dl>
			<input type="hidden" name="id" value="<?php echo ($datas["id"]); ?>">
			<dl>
				<dt>相册名：</dt>
				<dd><input type="text" name="xname" class="required" value="<?php echo ($datas["xname"]); ?>"/>
					
			</dl>
			<dl>
				<dt>添加人：</dt>
				<dd><select class="" style="width:100%;" name="uname">
					<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cats): $mod = ($i % 2 );++$i;?><option name="uname"><?php echo ($cats["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select></dd>
			</dl>
			<dl>
				<dt>相册描述：</dt>
				<dd><textarea class="span2 required" name="description" value=""><?php echo ($datas["description"]); ?></textarea></dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">修改</button></div></div></li>
			</ul>
		</div>
	</form>
</div>