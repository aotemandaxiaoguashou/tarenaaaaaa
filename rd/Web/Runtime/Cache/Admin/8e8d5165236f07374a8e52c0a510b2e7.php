<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Production/index" method="post">
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
					<b>搜索</b> &nbsp; 主题关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> 
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
			<li><a class="delete" href="/rd/index.php/Admin/Production/delete_tag/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/productionlist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/rd/index.php/Admin/Production/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  target="navTab"><span>编辑信息</span></a></li>
			<li><a class="add" href="/rd/index.php/Admin/Production/add" target="navTab" rel="productionlist" title="添加商品"><span>添加作品</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="40" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
			<th width="60" >主题</th>
			<!-- <th width="80">作品</th> -->
			<th width="100">酒店名</th>
			<th width="60" orderField="price" <?php if($_REQUEST['_order']== 'price'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>价格</th>
			<th width="150" >新人介绍</th>
			<th width="280" >婚礼要求</th>
			<th width="60" >详情</th>
			<th width="100" orderField="addtime" <?php if($_REQUEST['_order']== 'addtime'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>更新时间</th>
			<th width="80">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<!-- <td><img src='<?php echo ($vo["pro_name"]); ?>'><?php echo ($vo["prc_name"]); ?></td> -->
					<td><?php echo ($vo["hole_name"]); ?></td>
					<td><?php echo ($vo["price"]); ?></td>
					<td><?php echo ($vo["presoninfo"]); ?></td>
					<td><?php echo ($vo["requires"]); ?></td>
					<!-- <td><?php echo ($vo["detail"]); ?></td> -->
					<td><a href="/rd/index.php/Admin/Production/view/id/<?php echo ($vo["id"]); ?>" target="navTab" title="详情"><span style="color:orange;vertical-align:middle">详情</span></a></td>
					<td><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></td>

					<td><a href="/rd/index.php/Admin/Production/edit/id/<?php echo ($vo["id"]); ?>/navTabId/productionlist" class="btnEdit" target="navTab" title="编辑商品信息"><span>编辑商品信息</span></a>
					<a href="/rd/index.php/Admin/Production/delete_tag/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除商品</span></a></td>
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