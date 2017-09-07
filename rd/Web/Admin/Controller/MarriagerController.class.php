<?php
	/**
	*
	*婚礼人控制器   
	*
	*/
	namespace Admin\Controller;
	class MarriagerController extends CommonsController
	{
		//封装搜素条件,自动调用的方法
		public function _filter(&$map){
			//判断是否有搜索事件
			if(!empty($_REQUEST['keyword'])){ 
				$where['name']=array("like","%{$_REQUEST['keyword']}%");
				$where['sex']=array("like","%{$_REQUEST['keyword']}%");
				$where['_logic']="or"; //逻辑关系“或”
				$map['_complex']=$where; //将$where组合在一起
			}
		}

		//控制器的初始化
		public function _initialize(){
			$mod=M("marriager");
			if(!empty($_REQUEST['keyword'])){ 
				$where['name']=array("like","%{$_REQUEST['keyword']}%");
				$where['sex']=array("like","%{$_REQUEST['keyword']}%");
				$where['_logic']="or"; //逻辑关系“或”
				$map['_complex']=$where; //将$where组合在一起
			}
			$data=$mod->where($where)->select();
			// echo $mod->getlastsql();
			$this->assign("data",$data);
		}
		
	//将所有的信息进行保存
	public function marriager_save(){
		$mod=M('marriager');
		//实例化上传类
		$info=$this->upload('/Uploads/marriager/');
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
		//将ajax传过来的值直接修改掉
		$mod->create();
		if(parent::insert()){
			$this->success('上传成功');
		}else{
			$this->error('上传失败');
		}
	}
		
		//编辑的数据查询
		public function up(){
			$id=$_REQUEST['id'];
			$mods=M("marriager");
			$datas=$mods->find($id);
			$this->assign("datas",$datas);
			//dump($datas);
			$this->display('edit');
		}
		//覆盖父类的修改方法
		public function update(){
			//$id=$_REQUEST['id'];
			//$mods=M("marriager");
			$info=$this->upload('/Uploads/marriager/');
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
				//将新传入的头像修改掉
				$mods['pic']=$picname;
				//调用父类修改方法将ajax传过来的值直接修改掉
				parent::update();
			}
			
		}
	
	
	}









?>