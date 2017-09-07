<?php
	namespace Home\Controller;
	use Think\Controller;
	class 	PlannerController extends PublicController
	{
		public function index(){
			if(empty($_GET)){
				$datas=M('marriager')->where("tid=3")->select();
				foreach($datas as &$v){
					$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
					
				}
				$this->assign('datas',$datas);
				$this->display();
			}else{
				$get=$_GET;
				foreach($get as $key=>$val){
					if($key=="sex"){
						$datas=M('marriager')->where("tid=3 and {$key}={$val} ")->select();
							foreach($datas as &$v){
								$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
						}
						$this->assign('datas',$datas);
						$this->display();
					}
					if($key=="height" || $key="age"){
						
						$datas=M('marriager')->where("tid=3 and {$key} >= {$val}")->select();
							foreach($datas as &$v){
								$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
							
						}
						$this->assign('datas',$datas);
						$this->display();
					
					}
				}
			
			}	
	}		
		public function Work(){
			$id=$_GET['id'];
			//用户的信息
			$mod=M("marriager")->where("id=".$id)->select();
			$this->assign("mod",$mod);
			//用户对应专栏的信息和图片  相册信息
			$data=M("photos");
			$a=$data->where('uid='.$id.' and xname like "%作品%" ')->select();
			$id=$a[0]['id'];
			$datas=$data->where("pid=".$id)->select();
			$this->assign('datas',$datas);	
			$this->display();
		}
		public function WorkInfo(){
			//得到相册的id  查询数据
			$id=$_GET['id'];
			$mod=M('picture')->where("pid=".$id)->select();
			$this->assign('data',$mod);
			//根据用户的uid来查询用户的信息
			$uid=$mod[0]['uid'];
			$person=M('marriager')->where("id=".$uid)->select();
			$this->assign("p",$person);
			$this->display();
		}
		public function Price(){
			$id=$_GET['id'];
			//用户的信息
			$mod=M("marriager")->where("id=".$id)->select();
			$this->assign("mod",$mod);
			//用户对应服务的信息
			$data=M("price")->where("uid=".$id)->select();
			$this->assign('data',$data);	
			$this->display();
		}
		public function Serve(){
			$id=$_GET['id'];
			//用户的信息
			$mod=M("marriager")->where("id=".$id)->select();
			$this->assign("mod",$mod);
			//用户对应服务的信息
			$data=M("serve")->where("uid=".$id)->select();
			$this->assign('data',$data);	
			$this->display();
		}
		public function Special(){
			$id=$_GET['id'];
			//用户的信息
			$mod=M("marriager")->where("id=".$id)->select();
			$this->assign("mod",$mod);
			//用户对应专栏的信息和图片  相册信息
			$data=M("photos");
			$a=$data->where('uid='.$id.' and xname like "%专栏%"')->select();
			$id=$a[0]['id'];
			$datas=$data->where("pid=".$id)->select();
			$this->assign('datas',$datas);	
			$this->display();
		}
		public function SpecialInfo(){
			$id=$_GET['id'];
			$mod=M('picture')->where("pid=".$id)->select();
			$this->assign('data',$mod);
			//根据用户的uid来查询用户的信息
			$uid=$mod[0]['uid'];
			$person=M('marriager')->where("id=".$uid)->select();
			$this->assign("p",$person);
			$this->display();
			
		}
	
	}











?>