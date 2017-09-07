<?php
/**
*相册管理控制器
*
*
*/
namespace Admin\Controller;

class PhotosController extends CommonsController
{
	//封装搜素条件,自动调用的方法
		public function _filter(&$map){
		//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['xname']= array('like',"%{$_REQUEST['keyword']}%");
				$where['path']= array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic']='or';
				$map['_complex']=$where;
				$map=$where;
		}
	}
	
	public function _initialize(){
		//parent::_initialize();
		$mod=M('photos');	
		//查询到配置数据并分配给模板中
		$data=$mod->select();
		//dump($data);
		//$this->data=$mod->field("id,concat(path,'-',id) as paths,xname,description,path")->order('paths asc')->select();
		//$a=$mod->query("select * from rd_photos order by concat(path,'-',pid)");
		//var_dump($this->data);die;
		//$this->display();
		//var_dump($data);
		$this->assign('data',$data);
		//实例化婚礼人表  将相册和添加的人联系起来
		$mods=M("marriager");
		$users=$mods->select();
		$this->assign('user',$users);
	}
	//覆盖父类的排序方法
	public function _order(&$order){
		//return order by desc;
		//$order=concat(path,id);
		//return $order;
	}
	//扩展父类的insert的方法
	public function insert(){
		//查询pid的path信息
		//dump($_POST);exit;
		$path=M("photos")->where("id=".$_POST['pid'])->find();
		//dump($path);exit;
		if($path){
			$_POST['path']=$path['path'].'-'.$_POST['pid'];
			$_POST['pid']=$_POST['pid'];
		}else{
			$_POST['path']='0';
			$_POST['pid']=0;
		}
		//添加时间
		//dump($path['path']);exit;
		$_POST['ctime']=time();
		//将添加的婚礼人找出id来给这个表里添加uid
		$name=$_POST['uname'];
		$uid=M('marriager')->field('id')->where('name='."'{$name}'")->select();
		$uids=$uid[0]['id'];
		$_POST['uid']=$uids;	
		//dump($_POST['uid']);
		parent::insert();
	}
	
	
	//覆盖父类的修改方法
	public function up(){
		//接收修改的id
		$id=$_REQUEST['id'];
		$mod=M("photos");
		$datas=$mod->find($id);
		//dump($datas);
		$this->assign("datas",$datas);
		$this->display("edit");
	}
	//覆盖父类的编辑方法
	 public function update(){
		//dump($_REQUEST);EXIT;
		$pid=$_REQUEST['pid'];
		$uid=M('photos')->field('path')->where('id='.$pid)->select();
		$_POST['path']=$uid[0]['path'].'-'.$_POST['pid'];//组合新的路径
		

		parent::update();
	} 
}