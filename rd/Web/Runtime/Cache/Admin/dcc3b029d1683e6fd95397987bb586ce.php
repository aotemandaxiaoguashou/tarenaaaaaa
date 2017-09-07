<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Picture/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	
</div>
	<form method="post" action="/rd/index.php/Admin/Picture/bak" onsubmit="return navTabSearch(this)">
	<table class="list" width="100%" layoutH="112">
			<tr id="">
				<th style="font-size:17px;color:blue">请选择相册：</th>
				<td>
					<select name="pid" class="span2 required">
						<option value='0'>请选择相册</option>
						<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>"><?php echo countPath($cat['path']); echo ($cat["xname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</td>
				<td><input type="submit" value="提交"></td>
			</tr>	
		</form>
		
		  <tr>
			<th width="70" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
			<th width="80">图片名</th>
			<th width="100">图片显示</th>
			<th width="100">图片描述</th>
			<th width="100">操作</th>	
		  </tr>
			<?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><img src="/rd/Public/Uploads/image/<?php echo ($vo["pic"]); ?>" width="150px" height="100px"></td>
					<td><?php echo ($vo["content"]); ?></td>
					<td>
					<a href="/rd/index.php/Admin/Picture/ups/id/<?php echo ($vo["id"]); ?>/navTabId/picturelist" class="btnEdit" target="navTab" title="编辑"><span>编辑</span></a>
					<?php if($vo["id"] > 0 ): ?><a href="/rd/index.php/Admin/Picture/del/id/<?php echo ($vo["id"]); ?>/" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a><?php endif; ?>
					</td>
				
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak(<?php echo (C("TMPL_L_DELIM")); ?>numPerPage:this.value<?php echo (C("TMPL_R_DELIM")); ?>)">
				<option value="10" <?php if($numPerPage == 10): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="5" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>