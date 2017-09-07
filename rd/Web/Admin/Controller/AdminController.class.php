<?php
/*管理员信息控制类
*@author CHENHUIAN
*/
namespace Admin\Controller;

class AdminController extends CommonController
{	
	//已继承Common类的增删查改搜索分页方法
	
	//封装搜素条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['admin_name']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['email']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
			
		}
		$map['is_delete'] = 0;//只查询is_delete=0的数据，即显示未被删除的数据

	}
	
	//修改状态(是否启用)
	public function status(){
		//dump($_GET['id']);
		$status = M('Admin');		
		$list = $status -> where('id='.$_GET['id'])->find();
		if($list['status']==0){
			$list['status']=1;
		}else{
			$list['status']=0;
		}
		$up = $status->where("id=".$_GET['id'])->save($list);
		if($up){
			$this -> success('修改状态成功');
		}else{
			$this -> error('操作失误');
		}	
	}
	
	//添加管理员 修改管理 删除 继承comm类操作 密码需要加密
	public function insert(){
		$m = M('Admin');
		$_POST['pwd']=md5($_POST['pwd']);
		$_POST['retime']=time();
		$_POST['pretime']=time();
		$_POST['ip']=ip2long($_SERVER['REMOTE_ADDR']);
		
		if($m->create()){
			$m->add($_POST);
			$this -> success('添加管理员成功');
		}else{
			$this -> error('添加失败');
		}
	}
	
	//编辑管理员权限
	public function edit() {
		
		//获取数据中所有角色信息
		$rolelist=M("Role")->field("id,role_myname")->select();
		$this->assign('rolelist', $rolelist);
		
		//查询当前用户的角色信息,并分配数据到模板
		$list=M("Admin_role")->where("admin_id='{$_GET['id']}'")->select();
		foreach($list as $v){
			$rid[]=$v['role_id'];
		}
		$this->assign('rid', $rid);
		
		//读取当前用户名
		$this->who=$_SESSION[C(SESSION_ADMIN)]['admin_name'];
		
		parent::edit();//调用父类方法
	}
	
	public function update() {
		
		// 保存当前角色信息
		
		//获取被操作的用户角色Model对象
		$m=M("Admin_role");
		//删除当前用户的原有角色信息
		$m->where("admin_id=".$_POST['id'])->delete();
		//将当前选择的角色信息添加上去
		if(is_array($_POST['rids'])){
			foreach($_POST['rids'] as $v){
				$data['admin_id']=$_POST['id'];
				$data['role_id']=$v;
				if($m->add($data)){
					unset($_POST['rids']);
				}
			}
		}
		//dump($_POST);exit;
		
		parent::update();
	}
	
	
	//获取修改密码页面
	public function repwd(){
		$admin = M('Admin');
		$aid = $_SESSION[C('SESSION_ADMIN')]['id'];
		//dump($adminid);
		$alist = $admin -> where('id='.$aid)->find();
		//dump($alist);exit;
		if($alist){
			$this -> assign('alist',$alist);
			$this -> display();
		}else{
			$this -> error('读取密码失败,请退出重新登陆！');
		}
	}
	
	public function changepwd(){
	
		//dump($_POST); exit;//OK
		
		$adm=M("Admin");
		$adli = $adm -> find($_POST['id']);
		if($adli['pwd'] == md5($_POST['oldpwd'])){
			if($_POST['newpwd'] == $_POST['repwd']){
				$data['pwd'] = md5($_POST['newpwd']);
				$pass=$adm -> where("id={$_POST['id']}") -> save($data);
				if($pass){
					$this->success("恭喜你修改密码成功!");
				}
			}else{
				$this->error("输出确认密码不一致,请重新设置");
			}			
		}else{
			$this->error("输入的当前密码不正确,请重新输入");
		}	
	
	
	}
	
	
	
	


}