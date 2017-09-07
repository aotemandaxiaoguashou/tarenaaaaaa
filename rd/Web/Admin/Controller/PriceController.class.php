<?php
	namespace Admin\Controller;
	class PriceController extends CommonsController
	{
		//控制器的初始化
		public function _initialize(){
			//价格表和婚礼表一起查
			$model = M();
			$name = $model ->table("rd_marriager a, rd_price b")-> where('b.uid = a.id')->select();
			//dump($name);
			$this->assign("name",$name);
			//查询婚礼表
			$mod=M("marriager");
			$list=$mod->select();
			$this->assign("list",$list);
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
		//数据插入的方法
		public function price_save(){
			//将添加的婚礼人找出id来给这个表里添加uid
			$name=$_POST['uid'];
			$uid=M('marriager')->field('id')->where('name='."'{$name}'")->select();
			$uids=$uid[0]['id'];
			$_POST['uid']=$uids;	
			//dump($_POST['uid']);
			parent::insert();
		}
		
		//编辑的数据查询
		public function up(){
			$id=$_REQUEST['id'];
			$mods=M("price");
			$datas=$mods->find($id);
			$this->assign("datas",$datas);
			//dump($datas);
			$this->display('edit');
		
		}
	
	
	}









?>