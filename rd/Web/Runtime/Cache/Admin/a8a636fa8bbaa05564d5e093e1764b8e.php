<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>系统信息设置</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<form action="/rd/index.php/Admin/Index/shopset_save/navTabId/shopset/" method="post" enctype="multipart/form-data" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<tr>
			<th>网站名称：</th>
			<td><input type="text" value="<?php echo ($vo["sitename"]); ?>" name="sitename" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">网站名称</td></tr>
		<tr>
			<th>网站logo图标：</th>
			<td><input type="file" name="logo"></td>
		</tr>
		<tr><th></th><td class="gray">（网站首页头部的logo图片,大小：<span style="color:#FF8000;;">272*58</span> 像素。不想更新logo请忽略此处）</td></tr>
		<tr>
			<th>网站标题：</th>
			<td><input type="text" value="<?php echo ($vo["title"]); ?>" name="title" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">（网站标题，显示在页面的左上角。如：iWebShop）</td></tr>
		<tr>
			<th>网站关键字：</th>
			<td><input type="text" value="<?php echo ($vo["description"]); ?>" name="description" class="span2 required"></td>
		</tr>
		<tr>
			<th></th><td class="gray">（便于引擎查找，当输入多个时，用"，"或者"|"分隔。如：mall|iweb）</td>
		</tr>
		<tr>
			<th>网站描述：</th>
			<td>
				<textarea class="span2 required" name="keywords"><?php echo ($vo["keywords"]); ?></textarea>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">（网站的重点描述信息，让访客清楚了解网站概要。）</td>
		</tr>
		
		<tr>
			<th>流量统计代码：</th>
			<td><textarea class="span3" name="countjs" style="overflow:auto;"><?php echo ($vo["countjs"]); ?></textarea></td>
		</tr>
		<tr><th></th><td class="gray"> （如果您需要增加流量统计代码，请把它放到这里。） </td></tr>
		<tr>
			<th>是否禁用注册：</th>
			<td>
				<input type="radio" name="reg_close" value="0" <?php if(($vo["reg_close"]) == "0"): ?>checked<?php endif; ?> />否
				<input type="radio" name="reg_close" value="1" <?php if(($vo["reg_close"]) == "1"): ?>checked<?php endif; ?> />是
			</td>				
		</tr>
		<tr>
		<th></th>
		<td class="red">（注意：禁用注册，此时任何人都无法进行注册。请谨慎操作。默认：否）
		</td>
		</tr>
		
		<tr>
			<th>注册同意条款：</th>
			<td>
			<textarea class="span3" rows="5" name="registerinfo" style="overflow:auto;"><?php echo ($vo["registerinfo"]); ?></textarea>
			</td>				
		</tr>
		<tr><th></th><td class="gray">（用户注册时所需要同意的服务条款）</td></tr>
		<tr>
			<th>是否开启邮件验证：</th>
			<td>
				<input type="radio" name="email_check" value="1" <?php if(($vo["email_check"]) == "1"): ?>checked<?php endif; ?> >开启
				<input type="radio" name="email_check" value="0" <?php if(($vo["email_check"]) == "0"): ?>checked<?php endif; ?> >关闭
			</td>
		</tr>
		<tr><th></th><td class="gray">是否开启邮件验证</td></tr>
		<tr><th></th><td><input type="submit" value="更新站点设置"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>