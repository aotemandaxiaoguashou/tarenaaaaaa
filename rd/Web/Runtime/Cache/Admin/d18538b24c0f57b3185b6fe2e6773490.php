<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Ad/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [广告名]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="/rd/index.php/Admin/Ad/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/adlist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/rd/index.php/Admin/Ad/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  target="dialog"><span>编辑广告信息</span></a></li>
			<li><a class="add" href="/rd/index.php/Admin/Ad/add" target="dialog" rel="adlist" title="添加广告"><span>添加广告</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="list" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="20" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>商品ID</th>
			<th width="60">描述</th>
			<th width="80">广告图片</th>
			<th width="40">是否首页显示</th>
			<th width="40" orderField="addtime" <?php if($_REQUEST['_order']== 'addtime'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>添加时间</th>
			<th width="20">状态</th>
			<th width="60">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["adname"]); ?></td>
					<td><img src="/rd/Public/Uploads/ads/<?php echo ($vo["pic"]); ?>" style="height:100px;"></td>
					<td><?php if(($vo["is_index"]) == "0"): ?><span style='color:green'>显示在首页</span><?php else: ?><span style='color:blue'>显示在攻略</span><?php endif; ?></td>
					<td><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></td>
					<td><?php if(($vo["status"]) == "0"): ?><span style='color:green'>启用</span><?php else: ?><span style='color:red'>停用</span><?php endif; ?></td>
					<td><a href="/rd/index.php/Admin/Ad/edit/id/<?php echo ($vo["id"]); ?>/navTabId/adlist" class="btnEdit" target="dialog" title="编辑商品信息"><span>编辑广告信息</span></a>
					<a href="/rd/index.php/Admin/Ad/del/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除商品</span></a>
					<a href="/rd/index.php/Admin/Ad/status/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo" title="修改状态"><?php if(($vo["status"]) == "1"): ?><span style='color:green'>启用</span><?php else: ?><span style='color:red'>禁用</span><?php endif; ?></a>
					<a href="/rd/index.php/Admin/Ad/change/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo" title="修改显示位置">改变位置</a></td>
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
</div>