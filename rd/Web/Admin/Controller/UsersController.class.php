<?php
//自定义Users会员信息控制类，继承 CommonController
//创建 by 季旋 2015年1月11日23:13:12
//最后修改 By

namespace Admin\Controller;

class UsersController extends CommonController{
	//已继承Common类的增、删、改、查、搜索、分页
	
	//封装会员搜索，模糊查询（商品名或价格），自动调用查询
	public function _filter(&$map){
		if(!empty($_REQUEST['keyword'])){
			//判断是否有搜索事件
			$where['username']=array("like","%{$_REQUEST['keyword']}%");
			$where['age']=array("like","%{$_REQUEST['keyword']}%");
			$where['address']=array("like","%{$_REQUEST['keyword']}%");
			$where['_logic']='or';
			$map=$where;
		}
	}
	
	//改变用户状态（禁用或启用）
	public function dodel(){
		$id=$_GET['id'];
		$u=M('Users')->where("id=".$id)->find();
		$a='';
		if($u['isdel']==1){
			$u['isdel']=0;
			$a='禁用';
		}else{
			$u['isdel']=1;
			$a='启用';
		}
		$uu=M('Users')->where("id=".$id)->save($u);
		if($uu){
			$this->success("{$a}成功");
		}else{
			$this->success("{$a}失败");
		}
	}
	
	//查看会员信息详情
	public function view(){
		$id=$_GET['id'];
		$info=M('Users')->where("id=".$id)->find();
		$this->assign('info',$info);
		$this->display('view');
	}
	
	
	//将新添加的数据插入Users表
	public function insert(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Users");
		$info=$this->upload('Uploads/user/'); //图片上传
		//dump($info);exit; //查看图片信息
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			//图片缩略图
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			//dump($path);
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(200, 200)->save($path.'s_'.$picname);
		 }
		$_POST['userpwd']=md5($_POST['userpwd']);//给密码进行md5加密
		$_POST['regtime']=time();//添加时间
		
		 $model->startTrans(); //开启事务
		 // 如果创建失败 表示验证没有通过 输出错误提示信息
		 if (!$model->create()) {
			$this->error($model->getError());
		}
		
		$res = $model->add(); //将数据添加到users表中
		if($res){
			$model->commit(); //提交
			$this->success('新增成功');
		}else{
			$model->rollback(); //回滚
			$this->error('新增失败！请检查所填内容！');
		}	
	}
	
	public function edit(){
		$id=$_REQUEST['id'];  //得到index.html中传过来的id
		$user=M('users');
		$users=$user->where("id=".$id)->select(); //搜索符合条件的数据
		$this->assign('users',$users);
		$this->display('edit');
	}
//将编辑的数据提交到Users表中，代替原来的数据
	public function update(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);exit;
		//$model = D("Users");
		
		$info=$this->upload('Uploads/user/'); //图片上传
		//dump($info);exit; //查看图片信息
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			//图片缩略图
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			//dump($path);
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(200, 200)->save($path.'s_'.$picname);
			
			$_POST['userpwd']=md5($_POST['userpwd']);//给密码进行md5加密
			parent::update();
		}
	}
}