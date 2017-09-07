<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Hole/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [酒店名、容纳桌数]
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
			<li><a class="delete" href="/rd/index.php/Admin/Hole/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/holelist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<!-- <li><a class="delete" href="/rd/index.php/Admin/Hole/del/id/11/navTabId/goodslist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li> -->
			<li><a class="edit" href="/rd/index.php/Admin/Hole/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  target="navTab"><span>编辑酒店信息</span></a></li>
			<li><a class="add" href="/rd/index.php/Admin/Hole/add" target="navTab" rel="holelist" title="添加酒店"><span>添加酒店</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="list" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="60" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
			<th width="60" orderField="holename" <?php if($_REQUEST['_order']== 'holename'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>名称</th>
			<th width="60">酒店类型</th>
			<th width="60">容纳桌数</th>
			<th width="60">服务电话</th>
			<th width="140">详情</th>	
			<th width="60">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["holename"]); ?></td>
					<td><?php if($vo["style"] == 0): ?>五星级酒店<?php elseif($vo["style"] == 1): ?>四星级酒店<?php elseif($vo["style"] == 2): ?>三星级酒店<?php elseif($vo["style"] == 3): ?>连锁酒店<?php elseif($vo["style"] == 4): ?>草坪婚宴酒店<?php endif; ?></td>
					<td><?php echo ($vo["tabnum"]); ?></td>
					<td><?php echo ($vo["phone"]); ?></td>
					<td><a href="/rd/index.php/Admin/Hole/view/id/<?php echo ($vo["id"]); ?>" target="navTab" title="酒店信息详情"><span style="color:orange;">酒店详情</span></a></td>
					<td><a href="/rd/index.php/Admin/Hole/edit/id/<?php echo ($vo["id"]); ?>/navTabId/holelist" class="btnEdit" target="navTab" title="编辑酒店信息"><span>编辑酒店信息</span></a>
					<a href="/rd/index.php/Admin/Hole/del/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除商品</span></a></td>
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