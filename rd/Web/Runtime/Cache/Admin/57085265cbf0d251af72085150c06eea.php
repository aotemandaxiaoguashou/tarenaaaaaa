<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Picture/picture_save/navTabId/picturelist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<tr id="cat">
			<th>添加到相册：</th>
			<td>
				<select name="pid" class="span2 required">
					<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo countPath($cat['path']); echo ($cat["xname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>图片名称：</th>
			<td><input type="text"  name="name" class="span2 required"></td>
		</tr>
		<tr>
			<th>添加人：</th>
			<td><select class="required" style="width:300px;" name="uid">
					<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cats): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cats["id"]); ?>"><?php echo ($cats["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
			</td>
		</tr>
		<tr>
			<th>图片：</th>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr><th></th><td class="gray"></td></tr>
		
		<tr>
			<th>图片描述：</th>
			<td>
				<textarea class="required" name="content" style="height:200px;" rows="8" cols="65"></textarea>
			</td>				
		</tr>
		<tr><th></th><td><input type="submit" value="添加图片"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>