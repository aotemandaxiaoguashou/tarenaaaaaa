<?php
	/**
	*
	*�����˿�����   
	*
	*/
	namespace Admin\Controller;
	class MarriagerController extends CommonsController
	{
		//��װ��������,�Զ����õķ���
		public function _filter(&$map){
			//�ж��Ƿ��������¼�
			if(!empty($_REQUEST['keyword'])){ 
				$where['name']=array("like","%{$_REQUEST['keyword']}%");
				$where['sex']=array("like","%{$_REQUEST['keyword']}%");
				$where['_logic']="or"; //�߼���ϵ����
				$map['_complex']=$where; //��$where�����һ��
			}
		}

		//�������ĳ�ʼ��
		public function _initialize(){
			$mod=M("marriager");
			if(!empty($_REQUEST['keyword'])){ 
				$where['name']=array("like","%{$_REQUEST['keyword']}%");
				$where['sex']=array("like","%{$_REQUEST['keyword']}%");
				$where['_logic']="or"; //�߼���ϵ����
				$map['_complex']=$where; //��$where�����һ��
			}
			$data=$mod->where($where)->select();
			// echo $mod->getlastsql();
			$this->assign("data",$data);
		}
		
	//�����е���Ϣ���б���
	public function marriager_save(){
		$mod=M('marriager');
		//ʵ�����ϴ���
		$info=$this->upload('/Uploads/marriager/');
		//dump($info);
		//�ж��Ƿ��ϴ�  ���û���ϴ���ֱ�Ӳ�ִ���ϴ�
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			
			//ͼƬ����ͼ
			//dump($path.$picname);exit;
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(100, 100)->save($path.'s_'.$picname);
		}
		//��ajax��������ֱֵ���޸ĵ�
		$mod->create();
		if(parent::insert()){
			$this->success('�ϴ��ɹ�');
		}else{
			$this->error('�ϴ�ʧ��');
		}
	}
		
		//�༭�����ݲ�ѯ
		public function up(){
			$id=$_REQUEST['id'];
			$mods=M("marriager");
			$datas=$mods->find($id);
			$this->assign("datas",$datas);
			//dump($datas);
			$this->display('edit');
		}
		//���Ǹ�����޸ķ���
		public function update(){
			//$id=$_REQUEST['id'];
			//$mods=M("marriager");
			$info=$this->upload('/Uploads/marriager/');
			//dump($info);
			//�ж��Ƿ��ϴ�  ���û���ϴ���ֱ�Ӳ�ִ���ϴ�
			if($info){
				$_POST['pic']=$info['pic']['savename'];
			
				$picname=$info['pic']['savename'];
				$path='Public/'.$info['pic']['savepath'];
			
				//ͼƬ����ͼ
				//dump($path.$picname);exit;
				$image = new \Think\Image(); 
				$image->open($path.$picname);
				$image->thumb(100, 100)->save($path.'s_'.$picname);
				//���´����ͷ���޸ĵ�
				$mods['pic']=$picname;
				//���ø����޸ķ�����ajax��������ֱֵ���޸ĵ�
				parent::update();
			}
			
		}
	
	
	}









?>