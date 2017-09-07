<?php
/**
* 友情链接管理，继承 CommonController
* 创建 by 季旋 2015年1月11日19:35:21
* 最后修改  By 
*/
namespace Admin\Controller;
class LinksController extends CommonController {
	
	//封装搜素条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['linksname']  = array('like',"%{$_REQUEST['keyword']}%");
			$map = $where;
			
		}
	}
	
	
	//将新添加的数据插入links表
	public function insert(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Links");
		$info=$this->upload('Uploads/links/'); //图片上传
		//dump($info);exit; //查看图片信息
		$_POST['logo']=$info['logo']['savename'];
		$picname=$info['logo']['savename'];
		$path='Public/'.$info['logo']['savepath'];
		//dump($path);
		 
		$_POST['addtime']=time();//添加时间
		$model->startTrans(); //开启事务
		 
		 // 如果创建失败 表示验证没有通过 输出错误提示信息
		 if (!$model->create()) {
			$this->error($model->getError());
		}
		
		$res = $model->add(); //将数据添加到links表中
		
		if($res){
			$model->commit(); //提交
			$this->success('新增成功');
		}else{
			$model->rollback(); //回滚
			$this->error('新增失败！请检查所填内容！');
		}	
	}

	
	public function edit(){
		$id=$_REQUEST['id'];
		$link=M('links');
		$links=$link->where("id=".$id)->select();
		$this->assign('links',$links);
		$this->display('edit');
	}
	
	//将编辑的数据提交到links表中，代替原来的数据
	public function update(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Links");
		$info=$this->upload('Uploads/links/'); //图片上传
		//dump($info);exit; //查看图片信息
		$_POST['logo']=$info['logo']['savename'];
		//图片缩略图
		$picname=$info['logo']['savename'];
		$path='Public/'.$info['logo']['savepath'];
		 
		 // 如果创建失败 表示验证没有通过 输出错误提示信息
		 if (!$model->create()) {
			$this->error($model->getError());
		}
		
		$result = $model->save(); //将数据添加到links表中
		if($result){
			$model->commit(); //提交
			$this->success('更新成功');
		}else{
			$model->rollback(); //回滚
			$this->error('更新失败！请检查所填内容！');
		}	
	}	
	
	
	
	

}