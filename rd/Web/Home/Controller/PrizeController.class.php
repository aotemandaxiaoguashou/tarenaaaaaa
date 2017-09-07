<?php
	namespace Home\Controller;
	use Think\Controller;
	class PrizeController extends PublicController
	{
		public function index(){
			//开启session
			//session('start');
			//得到用户session的id和name
			 $userid=$_SESSION[C('SESSION_USER')]['id'];
			 $data=M("users")->where("id=".$userid)->select();
			 //dump($data);exit;
			//得到用户的名字
			 $usernames=$data[0]['username'];
			 //dump($usernames);exit;
			$this->assign("usernames",$uernames);
			//得到用户的积分
			 $points=$data[0]['points'];
			 //dump($points);exit;
			//实例化积分级别表
			 $score=M("score")->select();
			 //dump($score);exit;
			 //判断积分是否没有
			 if($points<0){
				 $this->redirect('__APP__/index',2,'你的积分不够,请加油哦');
				 return false;
			 }
			 //dump($points);
			 $rk="";
			 if($points>5 && $points<100){
				 $rk="青铜";
				}elseif($points>=100 && $points<400){
					$rk="白银";
					}elseif($points>=400 && $points<600){
						$rk="黄金";
					 }elseif($points>=600 && $points<800){
							$rk="铂金";
						 }elseif($points>=800 ){
								$rk="最强王者";
						 }
						
			$this->assign('rk',$rk);
			
			$this->display();
		
		}
		public function info(){
			$this->display();
		
		
		}
	
	
	}
	
	
	
?>	