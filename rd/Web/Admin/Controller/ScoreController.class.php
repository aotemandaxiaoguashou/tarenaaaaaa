<?php
	namespace Admin\Controller;
	class ScoreController extends CommonsController
	{
		//控制器的初始化
		public function _initialize(){
			$mod=M("score");
			$data=$mod->select();
			$this->assign("data",$data);
		}
		//封装搜素条件,自动调用的方法
		public function _filter(&$map){
		//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['name']  = array('like', "%{$_REQUEST['keyword']}%");
			
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			
		}
		
	}
		
		//编辑的数据查询
		public function up(){
			$id=$_REQUEST['id'];
			$mods=M("score");
			$datas=$mods->find($id);
			$this->assign("datas",$datas);
			//dump($datas);
			$this->display('edit');
		
		}
		
	
	
	
	}









?>