<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>添加作品信息</p>
	</div>
</div>
</script>

<div id="pageContent"  layouth="100" style="overflow:auto;">
	<!--callbackType/closeCurrent不能随便添加-->
	<form action="/rd/index.php/Admin/Production/update/navTabId/productionalist/" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<table class="form_table">
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<tbody>
		<tr>
			<th>婚礼主题：</th>
			<td><input type="text" value="<?php echo ($vo["title"]); ?>" name="title" class="span2 required"></td>
		</tr>
		
		<tr><th>酒店名：</th>
			<td><input type="text" name="hole_name" value="<?php echo ($vo["hole_name"]); ?>" class="span2 required"/>
			</td>
		</tr>
		
		<tr>
			<th>服务价格：</th>
			<td><input type="text" name="price" value="<?php echo ($vo["price"]); ?>" class="required">&nbsp&nbsp元</td>
		</tr>
		<tr><th></th><td class="gray">用于用户查阅信息细</td></tr>
		
		<tr>
			<th>作品图片：</th>
			<td id='inp'><input  type="file" name="pic_name[]"><input  type="file" name="pic_name[]"></td>
		</tr>
		<tr><th></th><td class="gray">上传图片作品<a id="incr" style='color:blue;font-weight:bold;cursor:pointer; text-decoration:none;'>加一个</a>
			&nbsp&nbsp&nbsp <a id="decr" style='color:blue;font-weight:bold;cursor:pointer;text-decoration:none;'>减一个</a></td></tr>
		
		<script type='text/javascript' charset='utf-8'>
		$(function(){
			 $("#incr").click(function(){
                $("#inp").append("<input type='file'  name='pic_name[]'>")
                });

			$("#decr").click(function(){
                   $("input:last").remove();
                });
		
		});
		</script>
		
		
		<tr>
			<th>新人介绍：</th>
			<td>
				<textarea value=""  class="editor" name="presoninfo" rows="6" cols="40" tools="mini"><?php echo ($vo["presoninfo"]); ?></textarea>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">新人介绍信息</td>
		</tr>
		
		<tr>
			<th>婚礼要求：</th>
			<td>
				<textarea class="editor" value="" name="requires" rows="6" cols="60" tools="mini"><?php echo ($vo["requires"]); ?></textarea>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">婚礼要求</td>
		</tr>
		
		<tr>
			<th>婚礼详情：</th>
			<td>
				<textarea class="editor" value="" name="detail" rows="10" cols="100" tools="mini" ><?php echo ($vo["detail"]); ?></textarea>
			</td>				
		</tr>
		<tr>
			<th></th><td class="gray">婚礼详情介绍</td>
		</tr>
		
		</tr>
		<tr><th></th><td><button type="submit" value="">修改展示作品</button></td>
		</tr>
		
	</tbody>
	</table>
		
		
	</form>
</div>