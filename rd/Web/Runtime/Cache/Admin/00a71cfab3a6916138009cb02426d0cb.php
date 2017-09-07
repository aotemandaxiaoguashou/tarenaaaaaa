<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>添加攻略信息</p>
	</div>
</div>

<!-- 编辑器 -->
<script type="text/javascript" src="/rd/Public/xheditor/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        //其中upImgUrl表示上传图片的url地址，upImgExt：上传允许类型, html5Upload:是关闭html5上传。
        $('#myxheditor').xheditor({tools:"full",upImgUrl:'/rd/index.php/Admin/Love/doupload',upImgExt:'jpg,jpeg,gif,png',html5Upload:false});
    });
</script>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Love/insert/navTabId/loveadd/callbackType/closeCurren" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<tbody>
		<tr>
			<th>景点(地区)：</th>
			<td><input type="text" value="" name="area_name" class="span2 required"  minlength="2" maxlength="8" ></td>
		</tr>
		
		<tr>
			<th>标题：</th>
			<td><input type="text" name="title" value="" class="required span2" minlength="2" maxlength="20"></td>
		</tr>
		<tr><th></th><td class="gray">简要描述内容主题</td></tr>
		<tr>
			<th>作者：</th>
			<td><input type="text" name="auther" value="" class="required span2" minlength="2" maxlength="8"></td>
		</tr>
		<tr>
			<th>作品图片：</th>
			<td ><input type="file" name="pic"></td>
		</tr>
		<tr><th></th><td class="gray">上传攻略图片</td></tr>
		<tr>
			<th>主题简介：</th>
			<td><textarea name="intro" class="required" cols="80" rows="2"  minlength="10" maxlength="25" ></textarea></td>
		</tr>
		<tr><th></th><td class="gray">简单描述主题的内容，建议在20个字左右</td></tr>
		<tr>
			<th>主要内容：</th>
			<td><textarea name="content" class="required" cols="80" rows="6"  minlength="100" maxlength="250"></textarea></td>
		</tr>
		<tr><th></th><td class="gray">描述详情的内容，建议在200个字左右</td></tr>
		<tr>
			<th></th><td class="gray" style='color:green'>由于加载过快,无法显示编辑器内容，请立即刷新</td>
		</tr>
		<tr>
			<th>蜜月详情：</th>
			<td>
				 <dd><textarea cols="75"  id="myxheditor" rows="20" name="detail"></textarea></dd>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">蜜月攻略提供服务内容</td>
		</tr>
		
		</tr>
		<tr><th></th><td><button type="submit" value="">添加蜜月攻略</button></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>