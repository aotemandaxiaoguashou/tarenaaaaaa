<?php
/**
* Ads 广告管理，继承 CommonController
*创建 by 季旋 2015年1月11日16:06:57
* 最后修改  By 
*/
namespace Admin\Controller;
class AdController extends CommonController {
	//已继承Common类的增、删、改、查、搜索、分页
	
	//封装商品搜索，模糊查询（商品名或价格），自动调用查询
	public function _filter(&$map){
		if(!empty($_REQUEST['keyword'])){
			//判断是否有搜索事件
			$where['adname']=array("like","%{$_REQUEST['keyword']}%");
			$map=$where;
		}
	}
	
	
	//将新添加的数据插入ad表
	public function insert(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Ad");
		$info=$this->upload('Uploads/ads/'); //图片上传
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
		 
		$_POST['addtime']=time();//添加时间
		$model->startTrans(); //开启事务
		 
		 // 如果创建失败 表示验证没有通过 输出错误提示信息
		 if (!$model->create()) {
			$this->error($model->getError());
		}
		
		$res = $model->add(); //将数据添加到ad表中
		
		if($res){
			$model->commit(); //提交
			$this->success('新增成功');
		}else{
			$model->rollback(); //回滚
			$this->error('新增失败！请检查所填内容！');
		}	
	}
	
	public function edit(){
		$id=$_REQUEST['id'];  //获取从index.html传过来的Id值
		$ad=M('Ad');
		$ads=$ad->where("id=".$id)->select(); //查询出该Id值的数据
		$this->assign("ads",$ads); 
		$this->display('edit');
	}
	
	
	//将编辑的数据提交到ad表中，代替原来的数据
	public function update(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Ad");
		$info=$this->upload('Uploads/ads/'); //图片上传
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
		 
		 $model->startTrans(); //开启事务
		 // 如果创建失败 表示验证没有通过 输出错误提示信息
		 if (!$model->create()) {
			$this->error($model->getError());
		}
		
		$result = $model->save(); //将数据添加到ad表中
		if($result){
			$model->commit(); //提交
			$this->success('更新成功');
		}else{
			$model->rollback(); //回滚
			$this->error('更新失败！请检查所填内容！');
		}	
	}
	
	
	//修改状态
	public function status(){
		$id = $_GET['id'];
		$ad = M('Ad');
		$sta = $ad->find($id);
		if($sta['status']==1){
			$status=0;
		}else{
			$status=1;
		}
		$res=$ad-> where("id={$id}")->setField('status',$status);		
		if($res){
			$this -> success('修改成功');
		}else{
			$this -> error('修改失败');
		}
	}
	
	//改变显示位置
	public function change(){
		$id = $_GET['id'];
		$ad = M('Ad');
		$sta = $ad->find($id);
		if($sta['is_index']==1){
			$is_index=0;
		}else{
			$is_index=1;
		}
		$res=$ad-> where("id={$id}")->setField('is_index',$is_index);		
		if($res){
			$this -> success('修改成功');
		}else{
			$this -> error('修改失败');
		}
	}
	

	
	
}