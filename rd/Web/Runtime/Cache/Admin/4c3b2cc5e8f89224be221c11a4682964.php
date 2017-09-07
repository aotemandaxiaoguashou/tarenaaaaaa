<?php if (!defined('THINK_PATH')) exit();?><!-- 编辑器 -->
<script type="text/javascript" src="/rd/Public/xheditor/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        //其中upImgUrl表示上传图片的url地址，upImgExt：上传允许类型, html5Upload:是关闭html5上传。
        $('#myxheditor').xheditor({tools:"full",upImgUrl:'/rd/index.php/Admin/Hole/doupload',upImgExt:'jpg,jpeg,gif,png',html5Upload:false});
    });
</script>

<div class="PageContent">
	<div class="accountInfo">
		<p>添加酒店</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Hole/update/navTabId/holelist/" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
	<table class="form_table">
		<tbody>
		<tr id="cat">
			<th>酒店类型：</th>
			<td>
				<select name="style" class="span2">
						<option value="0">五星级酒店</option>
						<option value="1">四星级酒店</option>
						<option value="2">三星级酒店</option>
						<option value="3">连锁酒店</option>
						<option value="4">草坪婚宴酒店</option>
				</select>
			</td>
		</tr>
		<?php if(is_array($holes)): $i = 0; $__LIST__ = $holes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hole): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($hole["id"]); ?>"/>
		<tr>
			<th>酒店名称：</th>
			<td><input type="text" value="<?php echo ($hole["holename"]); ?>" name="holename" class="span2 required"></td>
		</tr>
		
		<tr><th>酒店价格：</th>
			<td><input type="text" name="price" value="<?php echo ($hole["price"]); ?>"  class="required"/> 元	
			</td>
		</tr>
		
		<tr>
			<th>服务电话：</th>
			<td><input type="text" name="phone" value="<?php echo ($hole["phone"]); ?>" class="required"></td>
		</tr>
		
		<tr>
			<th>容纳桌数：</th>
			<td><input type="text" name="tabnum" value="<?php echo ($hole["tabnum"]); ?>" class="required"></td>
		</tr>
		
		<tr>
			<th>酒店地址：</th>
			<td><input type="text" name="address" value="<?php echo ($hole["address"]); ?>" class="required"></td>
		</tr>
		
		<tr>
			<th>酒店图片：</th>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr><th></th><td class="gray"></td></tr>
		
		<tr>
			<th>酒店简介：</th>
			<td><textarea cols="60" rows="6" name="intro" value="<?php echo ($hole["intro"]); ?>" class="required"></textarea></td>
		</tr>
		
		<tr>
			<th>酒店详情：</th>
				<td>
					<textarea cols="75"  id="myxheditor" rows="20" name="detail"><?php echo ($hole["detail"]); ?></textarea>
				</td>		
		</tr>
		
		<tr>
			<th></th><td class="gray">酒店的详细描述信息</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tr>
		<tr><th></th><td><input type="submit" value="编辑酒店"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>