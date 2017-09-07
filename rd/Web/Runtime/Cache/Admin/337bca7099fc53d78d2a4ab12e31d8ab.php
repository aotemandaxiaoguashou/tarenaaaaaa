<?php if (!defined('THINK_PATH')) exit();?><!-- 起始页 开始2015年1月5日16:45:49-->
<form id="pagerForm" action="/rd/index.php/Admin/Users/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<!-- 结束部分 -->
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>"/>[会员名][年龄][地址]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<!-- 已经在框架中定义好每个class属性具体使用的特征 -->
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/rd/index.php/Admin/Users/add/navTabId/userslist" target="dialog" width="550" height="380" rel="usersadd" title="添加学生信息"><span>添加</span></a></li>
			<!--防止冲突修改左右定界符-->
			<li><a class="delete" href="/rd/index.php/Admin/Users/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/userslist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/rd/index.php/Admin/Users/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/userslist"  width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="list" width="100%" layoutH="112">
		<thead>
			<tr>
				<!-- 绑定一个单击事件获取当前的排序字段名和排序名 -->
				<!-- 字段排序的设置 orderField="值" 属性的值是表的列名-->
				<th width="40" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
				<th width="40" orderField="username" <?php if($_REQUEST['_order']== 'username'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>会员名</th>
				<th width="60">Email</th>
				<th width="80">注册时间</th>
				<th width="40">会员积分</th>
				<th width="40">是否禁用</th>
				<th width="60">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["username"]); ?></td>
					<td><?php echo ($vo["email"]); ?></td>
					<td><?php echo (date("Y-m-d H:i",$vo["regtime"])); ?></td>
					<td><?php echo ($vo["points"]); ?></td>
					<td><?php if($vo["isdel"] == 1): ?><span class="green">使用</span><?php else: ?><span class="red">禁用</span><?php endif; ?></td>
					
					<td>
					<?php if($vo["isdel"] == 1): ?><a href="/rd/index.php/Admin/Users/dodel/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo"><span style="color:blue;">禁用</span></a>
					<?php else: ?><a href="/rd/index.php/Admin/Users/dodel/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo"><span style="color:blue;">启用</span></a><?php endif; ?>
					<a href="/rd/index.php/Admin/Users/view/id/<?php echo ($vo["id"]); ?>" target="navTab" title="会员信息详情"><span style="color:orange;">详情</span></a>&nbsp;&nbsp;
					<a href="/rd/index.php/Admin/Users/edit/id/<?php echo ($vo["id"]); ?>/navTabId/userslist" class="btnEdit" target="navTab" title="编辑会员信息"><span>编辑会员信息</span></a>
					<a href="/rd/index.php/Admin/Users/del/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除会员</span></a></td>
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
		<!-- 只要给DIV指定DWZ框架中定义好的属性,指定class属性和必须从PHP的值给指定的属性参数即可完成分页 -->
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>