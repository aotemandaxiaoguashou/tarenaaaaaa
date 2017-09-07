<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Marriager/update/navTabId/marriagerlist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" value="<?php echo ($datas["id"]); ?>" name="id">
		<tr>
			<th>婚礼人姓名：</th>
			<td>
				<input type="text" name="name" class="span2 required" value="<?php echo ($datas["name"]); ?>">
			</td>
		</tr>
		
		<tr>
			<th>年龄：</th>
			<td>
				<input type="text" name="age" class="span2 required" value="<?php echo ($datas["age"]); ?>">
			</td>
		</tr>
		<tr>
			<th>性别：</th>
			<td><input type="radio" value="0" checked name="sex" class="required" >男
				<input type="radio" value="1" checked name="sex" class="required" >女
			</td>
		</tr>
		
		<tr>
			<th>身高：</th>
			<td><input type="text" name="height" value="<?php echo ($datas["height"]); ?>"></td>
		</tr>
		<tr>
			<th>婚礼人头像：</th>
			<td><input type="file" name="pic" class="span2 required"></td>
		</tr>
		<tr>
			<th>地址：</th>
			<td><input type="text" value="<?php echo ($datas["address"]); ?>" name="address" class="span2 required" ></td>
		</tr>
		<tr>
			<th>电话：</th>
			<td><input type="text" value="<?php echo ($datas["phone"]); ?>" name="phone" class="span2 required"></td>
		</tr>
		<tr>
			<th>婚礼人类型：</th>
			<td><select name="tid" class="required" style="width:100px;">
					<option name="tid" <?php if(($vo["tid"] == 0)): ?>checked<?php endif; ?>>主持人</option>
					<option name="tid" <?php if(($vo["tid"] == 1)): ?>checked<?php endif; ?>>化妆师</option>
					<option name="tid" <?php if(($vo["tid"] == 2)): ?>checked<?php endif; ?>>摄像师</option>
					<option name="tid" <?php if(($vo["tid"] == 3)): ?>checked<?php endif; ?>>策划师</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<th>婚礼人描述：</th>
			<td>
				<textarea class="span5 editor" name="detail" style="height:200px;"><?php echo ($datas["detail"]); ?></textarea>
			</td>				
		</tr>
		<tr><th></th><td><input type="submit" value="修改"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>