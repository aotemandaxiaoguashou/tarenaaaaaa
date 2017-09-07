<?php
	namespace Home\Controller;
	use Think\Controller;
	class CompereController extends Controller
	{
		public function index(){
			
			
			/*旋爷做的
			$data=M('marriager')->select();
			$photo=M('photos');
			$picture=M('picture');
			foreach($data as &$d){
				$d['pho']=$photo->where(array('uid'=>$d['id']))->select();
				//dump($d);exit;
				foreach($d['pho'] as &$dd){
					$dd['pic']=$picture->where(array('pid'=>$dd['id']))->select();
				}
				//dump($d);exit;
			}
			dump($data['pho']);exit;
			$this->assign('data',$data);
			$this->display();
			*/
			
			
			
			/*赵爷做的*/
			 //$data=M()->query("select rd_marriager.*,rd_picture.pic from rd_marriager,rd_photos,rd_picture where rd_marriager.id=rd_photos.uid and rd_photos.id=rd_picture.pid group by rd_photos.id");
			//dump($data);
			//$this->assign("data",$data);
			//dump($data);
			//exit;
			//找到主持人的所有信息
			if(empty($_GET)){
				$datas=M('marriager')->where("tid=0")->select();
				foreach($datas as &$v){
					$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
					
				}
				$this->assign('datas',$datas);
				$this->display();
			}else{
				$get=$_GET;
				foreach($get as $key=>$val){
					if($key=="sex"){
						$datas=M('marriager')->where("tid=0 and {$key}={$val} ")->select();
							foreach($datas as &$v){
								$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
						}
						$this->assign('datas',$datas);
						$this->display();
					}
					if($key=="height" || $key="age"){
						
						$datas=M('marriager')->where("tid=0 and {$key} >= {$val}")->select();
							foreach($datas as &$v){
								$v['pics']=M("picture")->where("uid=".$v['id'])->limit(3)->select();
							
						}
						$this->assign('datas',$datas);
						$this->display();
					
					}
				}
			
			}	
	}		
				
			// $data=M('marriager')->select();
			// $photo=M('photos');
			// $picture=M('picture');
			// foreach($data as &$v){
				// $a[]=$v['id'];
				// $v['pics']=$photo->where(array("uid"=>$v['id']))->select();
				// foreach($v['pics'] as &$c){
					// $c['pices']=$picture->where(array("pid"=>$c['id']))->select();
					
					//$this->assign("c",$c);
				// }
				
			// } 
			//var_dump($data);
			//dump($data[0]['pics']);
			//exit;
				
			
				
			// dump($data);exit;
			
			 // foreach($data as $v){
				//dump($data);
				// $id=$v['id'];
				//dump($id);
				// $a=$photo->query("select id from rd_photos where uid={$id}");
				//dump($a);exit;
				// foreach($a as $row){
					//dump($row['id']);
					// $b=$picture->query("select * from rd_picture where pid={$row['id']}");
					
					// foreach($b as $val){
						// dump($val);
					
					// }
					//$this->assign("dataes",$b);
				
			//}
			
				// $mod=M("photos")->field("id")->where("uid={$id}")->select();
				// dump($mod);
				 //$pic=M()->field("a.id")->table("rd_photos a,rd_picture b")->where("a.uid={$id} && b.pid=a.id")->select();
				// foreach($data as &$v){
					// $v['pics']=$pic->where(array('pid'=>$v['id']))->field("pic,content")->select();
				// }
				// $pics=M("picture");
				// foreach($pics as &$val){
					// $val['pics']=$pics->where(array('pid'=>$val['id']))->field("pic,content")->select();
					 // dump($pics);
				 // }	
				
			
				// dump($data['id']);
				
			// $data=M()->field("a.id,a.name,a.pic,a.detail,a.address,b.xname,b.id,b.description")->table("rd_marriager a,rd_photos b,rd_picture c")->where("a.id=b.uid && b.id=c.pid")->select();
			 //$pic=M()->field("a.id")->table("rd_photos a,rd_picture b")->where("a.uid={$id} && b.pid=a.id")->select();
				//$pic;exit;
				
			// }
			
			// dump($data);exit;	
				 //$this->assign('datas',$data);
				
	
		
		public function Work(){
			$id=$_GET['id'];
			//用户的信息
			$mod=M("marriager")->where("id=".$id)->select();
			$this->assign("mod",$mod);
			//用户对应专栏的信息和图片  相册信息
			$data=M("photos");
			$a=$data->where('uid='.$id.' and xname like "%作品%"')->select();
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