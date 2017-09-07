<?php if (!defined('THINK_PATH')) exit();?><div class="PageContent">
	<div class="accountInfo">
		<p>分配权限</p>
	</div>
</div>
<div id="pageContent" layoutH="30">
  <div class="box_table">
	
	<form method="post" action="/rd/index.php/Admin/Role/action_save/navTabId/actionlist/" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
	<input type="hidden" name="role_id" value="<?php echo ($_GET['id']); ?>"/>
	<table width="90%">
	<div class="pageFormContent">
	
	<?php if(is_array($action)): $i = 0; $__LIST__ = $action;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="float:left;margin:0 15px;">
		<td><span><label><input type="checkbox" name="rids[]" value="<?php echo ($vo["id"]); ?>" <?php if(in_array($vo[id],$rids)): ?>checked<?php endif; ?> ><?php echo ($vo["action_myname"]); ?></label></span></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<div class="formBar">
		<label style="float:left"><input type="checkbox" class="checkboxCtrl" group="rids[]" />全选</label>
		<ul>
			<li><div class="button"><div class="buttonContent"><button type="button" class="checkboxCtrl" group="rids[]" selectType="invert">反选</button></div></div></li>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
		</ul>
	</div>
	</table>
</form>
	
  </div>
</div>