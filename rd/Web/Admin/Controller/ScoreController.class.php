<?php
	namespace Admin\Controller;
	class ScoreController extends CommonsController
	{
		//�������ĳ�ʼ��
		public function _initialize(){
			$mod=M("score");
			$data=$mod->select();
			$this->assign("data",$data);
		}
		//��װ��������,�Զ����õķ���
		public function _filter(&$map){
		//����������ֵ������װ
			if(!empty($_REQUEST['keyword'])){
				$where['name']  = array('like', "%{$_REQUEST['keyword']}%");
			
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			
		}
		
	}
		
		//�༭�����ݲ�ѯ
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