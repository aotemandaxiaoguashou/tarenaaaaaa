<?php
/*
*图片管理控制器
*
*/
namespace Admin\Controller;

class PictureController extends CommonsController
{
	public function _initialize(){
		//parent::_initialize();//先调用父类_initialize()方法
		$mod = M("picture");
		$datas = $mod->select();
		$this->assign("datas",$datas);
		//查询相册信息
		$photo=M("photos");
		$photos=$photo->select();
		//查询图片所在的相册
		//$m=where("$datas['id']=$photos['pid']")->select();
		//$m=M()->query("select b.xname from rd_picture as a,rd_photos as b where b.id=a.pid");
		//dump($m['0']);exit;
		//$this->assign("m",$m);
		$model = M();
        $photo = $model ->field("b.xname,b.path,b.uid") ->  table("rd_picture a, rd_photos b")-> where('a.pid = b.id')->select();
		//dump($photo);exit;
		foreach($photo as &$v){
			$xname=$v['xname'];
			$path=$v['path'];
			$uid=$v['uid'];
			$this->assign('xname',$xname);
			$this->assign('path',$path);
			//dump($xname);
			//dump($v);exit;
		}
		//用户信息
		$mods=M("marriager");
		$users=$mods->select();
		$this->assign('user',$users);
	
		
		$this->assign("lists",$photos);
		
	}
	public function index(){
		$this->display();
	}
	
	// public function showPhoto(){

		// $photos = M('photos');
	
		// $this->assign('photos',$photos->select());
		// $this->display('Photos/list');
		
	
	// }
	
	// public function showPic(){
		// $pid = $_GET['id'];
		// $photos = M('picture');
		// $allPic = $photos->where("pid=$pid")->select();
		// var_dump($allPic);die;
		// $this->assign('pictures',$allPic);
		// $this->display("Photos/showPic");
	// }
	//将所有对配置修改对数据库进行修改
	public function picture_save(){
		$mod=M('picture');
		//实例化上传类
		$info=$this->upload('/Uploads/image/');
		//dump($info);
		//判断是否上传  如果没有上传就直接不执行上传
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			
			//图片缩略图
			//dump($path.$picname);exit;
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(100, 100)->save($path.'s_'.$picname);
		}
		
		//$uid=M('marriager')->field('id')->where('name='."'{$name}'")->select();
		//$uids=$uid[0]['id'];
		//$_POST['uid']=$uid;
		//将ajax传过来的值直接修改掉
		$mod->create();
		if(parent::insert()){
			$this->success('上传成功');
		}else{
			$this->error('上传失败');
		}
	}
	//覆盖父类的修改方法
	public function ups(){
		//接收修改的id
		$id=$_REQUEST['id'];
		//dump($id);
		$mod=M("picture");
		$dataes=$mod->find($id);
		//dump($dataes);
		$this->assign("dataes",$dataes);
		//dump($dataes['name']);
		$this->display("edit");
	}
	//处理选择相册下的图片
	public function bak(){
		//获得相册的id
		$id=$_REQUEST['pid'];
		//查询相册下面所有信息
		$pic=M("picture")->where("pid={$id}")->select();
		$this->assign("pic",$pic);
		//dump($dataes['name']);
		$this->display("index_bak");
	}
	
	
}