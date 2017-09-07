<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/rd/index.php/Admin/Order/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字:<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [订单编号][收货地址]
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
			<li><a class="delete" href="/rd/index.php/Admin/Order/del/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>/navTabId/orderlist" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
		  <tr>
			<th width="20" orderField="id" <?php if($_REQUEST['_order']== 'id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>ID</th>
			<th width="40">订单编号</th>
			<th width="40">会员名</th>
			<th width="80">收获地址</th>
			<th width="100">下单时间</th>
			<th width="100">支付时间</th>
			<th width="100">确认时间</th>
			<th width="50">是否支付</th>
			<th width="50">订单状态</th>
			<th width="50">发货状态</th>
			<th width="50">收货状态</th>
			<th width="70">操作</th>	
		  </tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["ident"]); ?></td>
					<td><?php echo ($vo["username"]); ?></td>
					<td><?php echo ($vo["address"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["buytime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["paytime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["suretime"])); ?></td>
					<td><?php if($vo["ispay"] == 1): ?><span class="green">已支付</span><?php else: ?><span class="red">未支付</span><?php endif; ?></td>
					<td><?php if(($vo["isure"]) == "1"): ?>已确认<?php else: ?>未确认<?php endif; ?></td>
					<td><?php if(($vo["issend"]) == "1"): ?><span class="green">已发货</span><?php else: ?><span class="red">未发货</span><?php endif; ?></td>
					<td><?php if(($vo["isgets"]) == "1"): ?><span class="green">已收货</span><?php else: ?><span class="red">未收货</span><?php endif; ?></td>
					<td>
					<?php if($vo["issure"] == 0): ?><a href="/rd/index.php/Admin/Order/doset/aa/order/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo"><span style="color:blue;">确认订单</span></a><?php endif; ?>
					<?php if(($vo["issure"] == 1) AND ($vo["issend"] == 0)): ?><a href="/rd/index.php/Admin/Order/doset/aa/send/id/<?php echo ($vo["id"]); ?>" target="ajaxTodo"><span style="color:blue;">确认发货</span></a><?php endif; ?>
					<a href="/rd/index.php/Admin/Order/view/id/<?php echo ($vo["id"]); ?>/userid/<?php echo ($vo["userid"]); ?>" target="navTab" title="订单详情"><span style="color:orange;">详情</span></a>&nbsp;&nbsp;
					<a href="/rd/index.php/Admin/Order/del/id/<?php echo ($vo["id"]); ?>" class="btnDel" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a>
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