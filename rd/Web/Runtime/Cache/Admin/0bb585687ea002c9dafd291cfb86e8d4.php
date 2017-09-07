<?php if (!defined('THINK_PATH')) exit();?><!-- 编辑器 -->
<script type="text/javascript" src="/rd/Public/xheditor/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        //其中upImgUrl表示上传图片的url地址，upImgExt：上传允许类型, html5Upload:是关闭html5上传。
        $('#myxheditor').xheditor({tools:"full",upImgUrl:'/rd/index.php/Admin/Goods/doupload',upImgExt:'jpg,jpeg,gif,png',html5Upload:false});
    });
</script>


<div class="PageContent">
	<div class="accountInfo">
		<p>编辑商品</p>
	</div>
</div>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Goods/update/navTabId/goodslist/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);">
	<table class="form_table">
	
		<tbody>
		<tr id="cat">
			<th>商品分类：</th>
			<td>
				<select name="catid" class="span2">
					<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>" <?php if(substr_count($cat['path'],',') < 0): ?>disabled<?php endif; ?>><?php echo countPath($cat['path']); echo ($cat['catname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($good["id"]); ?>">
		<tr>
			<th>商品名称：</th>
			<td><input type="text" value="<?php echo ($good['goodsname']); ?>" name="goodsname" class="span2 required"></td>
		</tr>
		
		<tr><th>商品价格：</th>
			<td><input type="text" name="price" value="<?php echo ($good['price']); ?>"  class="required"/> 元	
			</td>
		</tr>
		
		<tr>
			<th>商品积分：</th>
			<td><input type="text" name="points" value="<?php echo ($good['points']); ?>" class="required"></td>
		</tr>
		<tr><th></th><td class="gray">用于购买商品时赠送的积分，默认为0不赠送</td></tr>
		
		<tr>
			<th>商品图片：</th>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr><th></th><td class="gray"></td></tr>
		
		<tr>
			<th>商品描述：</th>
				<td>
					<textarea cols="75"  id="myxheditor" rows="20" name="detail"><?php echo ($good["detail"]); ?></textarea>
				</td>		
		</tr>
		<tr>
			<th></th><td class="gray">商品的详细描述信息</td>
		</tr>
		
		<tr>
			<th>库存：</th>
		<td><input type="text" name="total" value="<?php echo ($good['total']); ?>" class="required"/>件</td>
		</tr>
		<tr>
			<th>状态：</th>
				<td>
					<input type="radio" name="status" value="0">下架&nbsp;&nbsp;&nbsp;
					<input type="radio" name="status" value="1">在售&nbsp;&nbsp;&nbsp;
					<input type="radio" name="status" value="2">上架&nbsp;&nbsp;&nbsp;
				</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr><th></th><td><input type="submit" value="编辑商品"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>