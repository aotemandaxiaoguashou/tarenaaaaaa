<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>编辑婚纱摄影</p>
	</div>
</div>
<!-- 编辑器 -->
<script type="text/javascript" src="/rd/Public/xheditor/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        //其中upImgUrl表示上传图片的url地址，upImgExt：上传允许类型, html5Upload:是关闭html5上传。
        $('#myxheditor').xheditor({tools:"full",upImgUrl:'/rd/index.php/Admin/Wedding/doupload',upImgExt:'jpg,jpeg,gif,png',html5Upload:false});
    });
</script>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Wedding/update/navTabId/weddingadd/callbackType/closeCurrent" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
	<!-- 隐藏域 -->
	<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<tbody>
		<tr>
			<th>工作室名：</th>
			<td><input type="text" value="<?php echo ($vo["title"]); ?>" name="title" class="span2 required"></td>
		</tr>
		
		<tr>
			<th>宗旨：</th>
			<td><input type="text" value="<?php echo ($vo["content"]); ?>" name="content" class="span2 required"></td>
		</tr>
		
		<tr><th>市场价格：</th>
			<td><input type="text" name="sale" value="<?php echo ($vo["sale"]); ?>"  class="required"/> 元	
			</td>
		</tr>
			
		<tr>
			<th>优惠价：</th>
			<td><input type="text" name="price" value="<?php echo ($vo["price"]); ?>" class="required"> 元</td>
		</tr>
		<tr><th></th><td class="gray">用于购买商品时赠送的积分，默认为0不赠送</td></tr>
		
		<tr><th>联系方式：</th>
			<td><input type="text" name="phone" value="<?php echo ($vo["phone"]); ?>"  class="required"/>	
			</td>
		</tr>
		
		<tr>
			<th>显示图片：</th>
			<td><input type="file" name="pic_name" class="required"></td>
		</tr>
		<tr><th></th><td class="gray"></td></tr>
		<tr>
			<th></th><td class="gray" style='color:green'>由于加载过快,无法显示编辑器内容，请立即刷新</td>
		</tr>
		<tr>
			<th>详情描述：</th>
			
			<td>
				<textarea cols="75" id="myxheditor" rows="20" name="info"><?php echo ($vo["info"]); ?></textarea>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">显示详细描述信息</td>
		</tr>
			
		</tr>
		<tr><th></th><td><input type="submit" value="编辑婚纱摄影"/></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>