<?php if (!defined('THINK_PATH')) exit();?><!--文章列表首页-->
<form id="pagerForm" action="/rd/index.php/Admin/Article/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post"><!--每页显示多少条-->
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
	
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> 
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
			<li><a class="delete" href="/rd/index.php/Admin/Article/del/article_id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/articlelist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/rd/index.php/Admin/Article/edit/article_id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  target="navTab"><span>修改</span></a></li>
			<li><a class="add" href="/rd/index.php/Admin/Article/add" target="navTab"  rel="add" title="添加文章"><span>添加</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="30" orderField="article_id" <?php if($_REQUEST['_order']== 'article_id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
			<th width="80"  >标题</th>
			<th width="250" >内容</th>
			<th width="80"  >所属类别</th>
			<th width="100" orderField="addtime" <?php if($_REQUEST['_order']== 'addtime'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>添加时间</th>
			<th width="50">操作</th>	
		  </tr>
		</thead>
		<tbody>
		
		 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["article_id"]); ?>">
					<td><?php echo ($vo["article_id"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<td><?php echo (strdel($vo["content"],0,26)); ?></td>
					<td><?php echo ($vo["cat_name"]); ?></td>
					<td><?php echo (date("Y-m-d",$vo["addtime"])); ?></td>
					<td>
					<a href="/rd/index.php/Admin/Article/edit/article_id/<?php echo ($vo["article_id"]); ?>/navTabId/articlelist" class="btnEdit" target="navTab"><span>编辑</span></a>
					<a href="/rd/index.php/Admin/Article/del/article_id/<?php echo ($vo["article_id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a>
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