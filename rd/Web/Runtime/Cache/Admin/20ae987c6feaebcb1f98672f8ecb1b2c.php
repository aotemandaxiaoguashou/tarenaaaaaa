<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>编辑链接</p>
	</div>
</div>
<div id="pageContent"  layouth="60" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Links/update/navTabId/linkslist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<table class="form_table">
			<tbody>
			<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($link["id"]); ?>"/>
				<tr>
					<th>链接名称：</th>
					<td><input type="text" value="<?php echo ($link['linksname']); ?>" name="linksname" class="span2 required"></td>
				</tr>
				<tr>
					<th>链接地址：</th>
					<td><input type="text" value="<?php echo ($link['urls']); ?>" name="urls" class="span2 required"></td>
				</tr>
				<tr>
					<th>链接Lsogo：</th>
					<td><input type="file" name="logo"></td>
				</tr>
				<tr><th></th><td class="gray"></td></tr>
				<tr>
						<th>是否前台显示</th>
						<td>
						<input type="radio" name="shows"  value="1"<?php if($vo["shows"] == 1): ?>checked<?php endif; ?>/>启用
						<input type="radio" name="shows" value="0"  <?php if($vo["shows"] == 0): ?>checked<?php endif; ?>/>禁用</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>