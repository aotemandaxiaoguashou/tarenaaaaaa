<?php
/**
* 后台登陆管理 (直接继承框架中的Controller)
* 创建 		By 季旋 2015年1月7日19:47:39
* 最后修改  By 
*/
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	//后台登陆页面
    public function index(){
    	$_POST=array();
        $this->display("admin_login");
    }
	
	//验证码输出
	public function code(){
        $config = array(
            'fontSize' => 30,
            'length' => 3,
            'useNoise' => false,
        ) ;
		$Verify =     new \Think\Verify($config);

		$Verify->entry();
	}
	
	//执行登陆验证
	public function do_login(){
		//校验验证码
		$verify = new \Think\Verify();
		if(!$verify->check($_POST['code'])){
			$this->error("验证码错误");
			exit();
		}
		
		$admin = M("Admin");
		$data['pwd']=md5($_POST['pwd']);
        $data['admin_name']=$_POST['admin_name'];
		//$data['status']='0';//只查询状态为0(超级管理员)的用户
		$adminData=$admin->where($data)->find();//到管理员列表查询符合条件的数据
		//判断用户是否被禁用
		if($adminData['status']==1){
			$this->error('该账号被禁用，请联系超级管理员');
			exit;
		}
		
		if($adminData){
			//dump($adminData);exit;
			$_SESSION[C('SESSION_ADMIN')]=$adminData;
			$_SESSION['isaLogin'] = 1;
			$_POST=array();
			//dump($_SESSION);exit;
			
			
			//登陆成功，更新登陆时间、登陆IP等信息
			$userinfo['pretime']=time();
			$userinfo['ip']=ip2long($_SERVER['REMOTE_ADDR']);//获取登录成功的用户的IP地址
			$admin->where("id=".$adminData['id'])->save($userinfo);
			
			//登陆成功保存节点信息到SESSION
			/****重要代码 组合数组 控制权限****/
				$user=$_SESSION[C('SESSION_ADMIN')];
				
				//$user['id']=6;//测试
				//dump($user['id']);//OK
				
				//查询当前用户所有具有的操作节点
				//$list=M()->query("select a.*  from rd_admin_role ar,rd_role_action ra,rd_action a where ar.role_id=ra.role_id and ra.action_id=a.id and admin_id={$user['id']}");//ok
				$list=M()->table('rd_admin_role as ar,rd_role_action as ra,rd_action as a')
							->field('a.*')
								->where("ar.role_id=ra.role_id and ra.action_id=a.id and admin_id=".$user['id'])
									->select();
				//条件说明：
				/*admin_role 管理员与角色关系表 存在 admin_id , role_id 
				  role_action 角色与节点操作关系表 存在 role_id action_id
				  action 表中ID 获取节点操作信息,获取当前登陆用户的ID对应admin_id
				|-admin 
					|-id  =	|-admin_id
				|-admin_role
					|-admin_id |-role_id
				|-role
					|-id = |-role_id
				|-role_action
					|-role_id  |-action_id
				|-action
					|-id 
				*/
				//dump($user);
				//dump($list);
				//组合数组获取当前用户的控制器方法(组合成以控制器为下标以方法为单元的二维数组)
				foreach($list as $k=>$v){
					$nodelist[$v['controllers_name']][]=$v['mothods_name'];
					if($v['mothods_name']=="add"){
						$nodelist[$v['controllers_name']][]="insert";
					}
					if($v['mothods_name']=="edit"){
						$nodelist[$v['controllers_name']][]="update";
					}
				}
				
				//dump($nodelist);exit;
				$nodelist['index'][]="index";//允许所有用户访问首页
				
				//将当前用户的权限信息放到session中
				$_SESSION['nodelist']=$nodelist;
				//dump($nodelist);exit;
				//dump($_SESSION);exit;

			/****end***/
			
			
			$this->redirect('Index/index');
		}else{
			$this->error("登录失败!");
		}
	}
	
	//后台用户退出
    public function logout(){
	
		session('[destroy]'); // 销毁session
		//dump($_SESSION);exit;
		if(!$_SESSION[C('SESSION_ADMIN')]['admin_name']){
			$this->success('退出成功！',U('Login/index'));
		}
			/* $useradmin=$_SESSION[C('SESSION_ADMIN')]['admin_name'];
			$_SESSION[C('SESSION_ADMIN')]=array();
			if(isset($_COOKIE[session_name()])){
				setcookie('session_name()','',time()-1,'/'); //session_name()动态获得ID的值
			}
			unset($_SESSION[C('SESSION_ADMIN')]);
			session(['destory']);
            $this->redirect('Login/index'); */

    }
}