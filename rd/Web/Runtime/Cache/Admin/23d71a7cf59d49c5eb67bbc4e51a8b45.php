<?php if (!defined('THINK_PATH')) exit();?><div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Marriager/marriager_save/navTabId/marriageraddf/" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<tr>
			<th>婚礼人姓名：</th>
			<td>
				<input type="text" name="name" class="span2 required">
			</td>
		</tr>
		
		<tr>
			<th>年龄：</th>
			<td>
				<input type="text" name="age" class="span2 required">
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
			<td><input type="text" name="height"></td>
		</tr>
		<tr>
			<th>婚礼人头像：</th>
			<td><input type="file" value="" name="pic" class="span2 required"></td>
		</tr>
		<tr>
			<th>地址：</th>
			<td><input type="text" value="" name="address" class="span2 required"></td>
		</tr>
		<tr>
			<th>电话：</th>
			<td><input type="text" value="" name="phone" class="span2 required"></td>
		</tr>
		<tr>
			<th>婚礼人类型：</th>
			<td><select name="tid" class="required" style="width:100px;">
					<option name="tid" value="0">主持人</option>
					<option name="tid" value="1">化妆师</option>
					<option name="tid" value="2">摄像师</option>
					<option name="tid" value="3">策划师</option>
					<option name="tid" value="4">布置师</option>
					
				</select>
			</td>
		</tr>
		
		<tr>
			<th>婚礼人描述：</th>
			<td>
				<textarea class="required" name="detail" style="height:200px;" rows="10" cols="100"></textarea>
			</td>				
		</tr>
		<tr><th></th><td><input type="submit" value="添加"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>