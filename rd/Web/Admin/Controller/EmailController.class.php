<?php
/**
*定义邮箱控制类
*/
namespace Admin\Controller;

class EmailController extends CommonController
{
	//邮箱配置
	public function emailconfig(){
		$model = M('Email_config');		
		$calist = $model->select();		
		foreach($calist as $v){
			$vo=$v;
		}		
		$this -> assign('vo',$vo);	
		$this -> display();
	}
	
	
		//修改邮件配置
		public function update(){
			$model=M('Email_config');
			$_POST['admin_pwd']=trim(encrypt($_POST['admin_pwd']));
			if ($model->create()){
				$affeted = $model->save();
				
				if($affeted){				
					$this->success('修改成功');
				}else{
					$this->error('你没有作任何修改');
				}
			}
		}
		//加载发送邮件界面(单击发送邮件界面时Email/emailsend)
		public function emailsend(){
		
			$model = M('Email_config');
			
			//获取配置信息
			$data = $model->find(1);
			
			$this -> assign('vo',$data);
			$this -> display();			
		}
		
		
		//邮件发布给谁
		public function insert(){			
			// 获取邮箱配置信息
			$email=M('Email_config');
			$data=$email->find(1);

			//获取表单的信息
			$to=$_POST['user_email'];				//收件人邮箱	
			$subject=$_POST['user_title'];			//邮件主题
			$content=$_POST['content'];				//邮件内容
			
			
			$company=$data['company'];				//发件人公司名称
			$email_user=$data['admin_name'];			//发件人邮件
			$email_pwd=trim(decrypt($data['admin_pwd']));		//发件人密码
			
			//dump($email_pwd);exit;
			//调用封装好的发送邮件函数			
			$status=sendMail($to, $subject, $content,$email_user,$email_pwd,$company);
			
			//dump($status);exit;
			
			if ($status) {			
				//如果成功则把信息保存起来
				//$_POST['content']=$_POST['content'];	
				//unset($_POST['admin_pwd']);
				//unset($_POST['admin_name']);
				//unset($_POST['email_host']);			
				//unset($_POST['ajax']);
				//dump($_POST);exit;
				$send=M('email_content');
					$list['sendtime']=time();
					$list['user_name']=$_POST['user_name'];
					$list['user_title']=$_POST['user_title'];
					$list['user_email']=$_POST['user_email'];
					$list['content']=$_POST['content'];
					//dump($list);exit;
				if(!$send->create($list)){
					die($send->getError()); 
				}else{
					$send->add($list);
					//echo $send->getLastSql();exit;
					$this->success('发布成功');
				}
								
			}else{
				//邮件发布失败提示
				$this->error('发送失败!请修改配置');
			}
			
		} 
		
		
	
}