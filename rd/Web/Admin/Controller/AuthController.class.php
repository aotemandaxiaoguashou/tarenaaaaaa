<?php
/**
*Auth 控制器 权限登陆控制
*自动触发方法(框架中的构造方法)
*/
namespace Admin\Controller;
use Think\Controller;
class AuthController extends Controller {
   //在Controller类中构造方法执行后则会自动调用的方法
	public function _initialize(){
		//setCookie('PHPSESSID',session_id(),time()+60*30,'/');//session持续30分钟
		//是否的登录验证
		if(!empty($_SESSION[C('SESSION_ADMIN')]) && $_SESSION['isaLogin']==1){
		
		//if(!empty($_SESSION['aaaaaaaa'])){//测试
			//$this->assign("admin",$_SESSION[C('SESSION_ADMIN')]);
				
			//如果用户名是admin,则不受权限限制
			if($_SESSION[C('SESSION_ADMIN')]['admin_name']=='admin'){
				return;
			}
			
			//在登陆时获取当前用户的权限(节点操作信息)
			$nodelist=$_SESSION['nodelist'];
			//dump($nodelist);exit;
			$controllers_name = strtolower(CONTROLLER_NAME);//获取当前控制器名
			$mothods_name = strtolower(ACTION_NAME);//获取当前控制器的方法名

			//dump($controllers_name);
			//dump($mothods_name);
			//dump($nodelist);
			//exit;
			
			//判读是否存在控制器与方法名
			if(empty($nodelist[$controllers_name])||!in_array($mothods_name,$nodelist[$controllers_name])){
				$this->error("对不起，您没有权限,请联系操作管理员！");
				exit;
			}
			
		}else{
		
			$this->redirect("Login/index");
		}	
	}
	
}