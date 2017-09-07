<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>新文章</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<form method="post" action="/rd/index.php/Admin/Article/insert/navTabId/articlelist/"  class="pageForm required-validate" onsubmit="return validateCallback(this,dialogAjaxDone);">
	<table class="form_table">
		<tbody>
		<!-- <input type="hidden" name="article_id" value="{article_id}"> -->
		<tr>
			<th>标题：</th>
			<td><input type="text" value="" name="title" class="span2 required"></td>
		</tr>
		<tr><th></th><td class="gray">文章标题</td></tr>
		
		<tr>
			<th>文章类别：</th>
			<td>
				<select name="cat_id">
					<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["cat_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
			
		<tr>
			<th>内容：</th>
			<td>
				<textarea class="span5 editor" rows="13" name="content"></textarea>
			</td>				
		</tr>

		
		<tr><th></th><td><input type="submit" value="发布文章"/></td>
		</tr>
	</tbody>
	</table>
	</form>
</div>