<?php
/**
*作品展示控制器
*
*/
namespace Home\Controller;

class WorksController extends PublicController{
	 
	 public function index(){
		
		//多表查询(一对多的关系)
		$pro = M('production');
		$img = M('pro_image');
		
		$pros = $pro -> select();
		
		foreach($pros as &$v ){
			$v['img_name']=$img -> where(array('pro_id'=>$v['id']))->select();	
		}
		
		/* $list = M()->table('rd_production as pro,rd_pro_image as img')
					->where('pro.id = img.pro_id')
						->select(); */
		
		//dump($pros);exit;
		$this -> assign('plist',$pros);
		$this -> display();
	 }
	 
	 public function info(){
	 
		$id = $_GET['id'];
		$pro = M('production');
		$list = $pro -> find($id);
		
		//dump($list);exit;
		$this -> assign('wlist',$list);
	 
		$this -> display();
	 }
	 
	
}















