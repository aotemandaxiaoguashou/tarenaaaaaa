<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Goodscat/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [类名]
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
			<li><a class="delete" href="/rd/index.php/Admin/Goodscat/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/goodslist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/rd/index.php/Admin/Goodscat/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li><a class="add" href="/rd/index.php/Admin/Goodscat/add" target="dialog" width="550" height="380" rel="goodscat" title="添加分类"><span>添加</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="40" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>序号id</th>
			<th width="100">分类名称</th>
			<th width="100">pid</th>
			<th width="100">path</th>
			<th width="100">首页展示</th>
			<th width="100">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--输出循环变量,如果没有指定key属性的话，默认使用循环变量i-->
				<tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo countPath($vo['path']); echo ($vo["catname"]); ?></td>
					<td><?php echo ($vo["pid"]); ?></td>
					<td><?php echo ($vo["path"]); ?></td>
					<td><?php if(($vo["is_menu"]) == "1"): ?>是<?php else: ?>否<?php endif; ?></td>
					<td>
					<a href="/rd/index.php/Admin/Goodscat/add/id/<?php echo ($vo["id"]); ?>"  target="dialog" title="添加子类" width="550" height="380" rel="cat_add" style="color:blue;"><span>添加子类</span></a>
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
</div>