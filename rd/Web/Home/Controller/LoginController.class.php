<?php
/*
*登陆注册 by 季旋  2015年1月13日19:29:12
*最终修改 by
*/
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	//显示登录页面
	public function login(){
		if(!empty($SESSION[C('SESSION_USER')])&&$_SESSION['islogin']){
			$this->redirect("Index/index");//已登录，直接跳到主页
		}
		//$_POST=array();
		$this->display('login');
	}
	
	//处理登录
	public function do_login(){
		//用户名登录
		$data['username']=$_POST['username'];
		$data['userpwd']=md5($_POST['userpwd']);
		
		$res=M('Users')->where($data)->find();
		//dump($res);exit;
		//判断用户账号是否被禁用，此处为用户名登录
		if($res['isdel']==0){
			$this->error('该用户账号已被禁用,请联系管理员');
		}
		/*
		//邮箱登录
		$data2['email']=$_POST['username'];
		$data2['userpwd']=md5($_POST['userpwd']);
		$res2=M('Users')->where($data2)->find();
		//判断用户账号是否被禁用，此处为邮箱登录
		if($res2['isdel']==0){
			$this->error('该用户账号已被禁用');
		}
		*/
		if($res){
			$_SESSION[C('SESSION_USER')]=$res;
			$_SESSION[C('SESSION_USER')]['islogin']=1;
			$this->redirect("Index/index");
		}else{
			$this->error('账户或密码不正确');
		}
	}
	
	//退出
	public function logout(){
		$username=$_SESSION[C('SESSION_ADMIN')]['admin_name'];
		$_SESSION[C('SESSION_USER')]=array();
		if(isset($_COOKIE[session_name()])){
			setcookie('session_name()','',time()-1,'/'); //session_name()动态获得ID的值
		}
		unset($_SESSION[C('SESSION_USER')]);
		session(['destory']);
		//$this->redirect('Index/index');
		$this->redirect('Index/index');
	}
	
	
	//生成验证码
	public function code(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 15;//验证码字体大小
		$Verify->length   = 4; //验证码位数
		$Verify->useNoise = false; //是否关闭验证码杂点
		$Verify->useImgBg = true; // 开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
		$Verify->entry();
	}

	//进入用户注册界面
	public function reg(){
		$this->display();
	}
	
	//检查用户名是否已经存在
	public function checkuser(){
		
		$user['username']=$_POST['username'];
		$res=M('Users')->where($user)->find();
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	
	//检查邮箱是否已存在
	public function checkemail(){
		$email['email']=$_POST['email'];
		$res=M('Users')->where($email)->find();
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	
	//处理提交过来的注册信息
	public function do_reg(){
		//dump($_POST);exit;
		$verify = new \Think\Verify();
		//首先判断验证码是否正确
		if($verify->check($_POST['code'])){
			$user=M('users');
			$_POST['regtime']=time(); //注册时间
			$_POST['userpwd']=md5($_POST['userpwd']); //给密码进行md5加密
			if(!$user->create()){
				//验证没通过，显示验证错误信息
				$this->error($user->getError());
			}else{
				//验证通过后的操作
				$m=$user->add();
				//dump($m);exit;
				if($m){
					//注册成功发邮件
					// 发送的对方邮箱号码
					$to=$_POST['email'];
					// 邮件标题
					$subject='欢迎你成功注册';
					// 邮件内容
					$url="http://".$_SERVER['HTTP_HOST'].'/index.php';
					
					$sendtime=date('Y-m-d H:i:s',time());

					$s=M('email_config');
					$dataEmail=$s->find(1);
				
					$content="尊敬的{$_POST['username']},您好，您于{$sendtime}，在本站{$url}，成功注册。{$dataEmail['commpyname']}，欢迎您注册。";
					// 公司邮件号码
					$email_user=$dataEmail['admin_name'];
					// 公司邮件密码
					$email_pwd=decrypt($dataEmail['admin_pwd']);
					// 发件人公司名称
					$company=$dataEmail['company'];

					//调用函数
					sendMail($to, $subject, $content,$email_user,$email_pwd,$company);
										
					//$userdata=$user->where('id='.$m)->find();


					$userdata=$user->where('id='.$m)->find();
					//dump($userdata);exit;
					$SESSION[C('SESSION_USER')]=$userdata;
					$_SESSION['islogin']=1;
					$this->redirect('Login/login');
				}else{
					$this->error('注册失败');
				}
			}
		}else{
			$this->error('验证码错误');
		}

	}
	
	
	
	
	
}