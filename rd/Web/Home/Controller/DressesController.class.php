<?php
/**
*婚纱摄影控制器
*
*/
namespace Home\Controller;

class DressesController extends PublicController{
	 
	 public function index(){
		
		$dres = new \Think\Model("Wedding");
		$list = $dres -> where("is_delete=0")->limit(20)->select();
		$this -> assign('deslist',$list);
		$this -> display();
	 }
	 
	 public function info(){
		$dres = new \Think\Model("Wedding");
		$id = $_GET['id'];
		
		$info= $dres -> find($id);
		$this -> assign('linfo',$info);
		$this -> display();
		
	 }
	 
	
	
}















