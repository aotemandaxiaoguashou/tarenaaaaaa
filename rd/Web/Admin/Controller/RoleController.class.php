<?php
/**
* Role角色管理，继承 CommonController
* 
*/
namespace Admin\Controller;
class RoleController extends CommonController {
	
	//已继承Common类的增删查改搜索分页方法
	
	//设置默认排序方式
	public function _sort(&$sort){
		$sort="asc";//这里改为asc，默认为desc
		return $sort;
	}
	
	public function action(){
	
		//查询所有操作信息
		$action=M("Action")->order("concat(controllers_name,mothods_name)")->select();
		
		//dump($action);exit;
		//查询当前角色所拥有操作(获取操作ID)
		$rid=M("Role_action")->where("role_id=".$_GET['id'])->select();
		//dump($rid);exit;
		foreach($rid as $v){
			$rids[]=$v['action_id'];
		}
		//dump($rids);exit;
		$this->assign("action",$action);
		$this->assign("rids",$rids);
		$this->display("action");
		
	}
	
	//保存角色——节点关系
	public function action_save(){
	
		//获取被操作的Model对象
		$m=M("Role_action");
		//删除当前角色户的所有操作信息
		//dump($_POST);exit;
		$m->where("role_id=".$_POST['role_id'])->delete();
		//将当前选择的节点信息添加上去
		if(is_array($_POST['rids'])){
			foreach($_POST['rids'] as $v){
				$data['role_id']=$_POST['role_id'];
				$data['action_id']=$v;
				$res=$m->add($data);
			}
			if($res){
				$this->success("更新成功！");
			}else{
				$this->success("更新失败！");
			}
		}else{
			$this->success("更新成功！");
		}
		
	}
	
}