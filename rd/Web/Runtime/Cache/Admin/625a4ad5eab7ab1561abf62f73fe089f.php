<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Marriager/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> 
				[用户名] [性别]</td>
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
			<li><a class="add" href="/rd/index.php/Admin/Marriager/add" target="dialog" width="900" height="380" rel="user_add" title=""><span>添加</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="list" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="40" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>用户id</th>
			<th width="80" orderField="name" <?php if($_REQUEST['_order']== 'name'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>姓名</th>
			<th width="100">头像</th>
			<th width="80" orderField="sex" <?php if($_REQUEST['_order']== 'sex'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>性别</th>
			<th width="80" orderField="age" <?php if($_REQUEST['_order']== 'age'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>年龄</th>
			<th width="80">身高</th>
			<th width="80">地址</th>
			<th width="80">电话</th>
			<th width="80">属于类型</th>
			<th width="100">描述</th>
			<th width="100">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><img src="/rd/Public/Uploads/marriager/<?php echo ($vo["pic"]); ?>" width="100px"></td>
					<td><?php if(($vo["sex"]) == "0"): ?>男<?php else: ?>女<?php endif; ?></td>
					<td><?php echo ($vo["age"]); ?></td>
					<td><?php echo ($vo["height"]); ?></td>
					<td><?php echo ($vo["address"]); ?></td>
					<td><?php echo ($vo["phone"]); ?></td>
					<td><?php if(($vo["tid"] == 0)): ?>主持人<?php elseif($vo["tid"] == 1): ?>化妆师<?php elseif($vo["tid"] == 2): ?>摄像师<?php elseif($vo["tid"] == 3): ?>策划师<?php else: ?>布置师<?php endif; ?></td>
					<td><?php echo ($vo["detail"]); ?></td>
					<td>
					<a href="/rd/index.php/Admin/Marriager/up/id/<?php echo ($vo["id"]); ?>/navTabId/marriagerlist" class="btnEdit" target="navTab" title="编辑"><span>编辑</span></a>
					<?php if($vo["id"] > 0 ): ?><a href="/rd/index.php/Admin/Marriager/del/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a><?php endif; ?>
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