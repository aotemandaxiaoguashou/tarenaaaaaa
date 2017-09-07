<?php
/**
*蜜月控制器
*
*/
namespace Home\Controller;

class HoneyController extends PublicController{
	 
	 public function index(){
		
		$honey = new \Think\Model("Love");
		//$list = $honey -> where("is_delete=0")->select();
		//$this -> assign('lovelist',$list);

		//原生分页
		$count = $honey -> count();
		$Page = new \Think\AjaxPage($count,3);
		//调用定制分页样式
        stylepage($Page);  
		$show = $Page -> show();
		$list = $honey ->where('is_delete=0')->limit($Page -> firstRow.','.$Page -> listRows)->select();
		//dump($list);exit;
		$this -> assign('page',$show);
		$this -> assign('lovelist',$list);
		
		
		//幻灯片
		$ad = M('Ad');
		$ads = $ad ->where("is_index=1 and status=0")->limit(3)->select();
		$this -> assign('alist',$ads);			
		$this -> display();
	 }
	 
	 public function ajaxpage(){
		
		$honey=M('Love');
		
		//原生分页
		$count = $honey -> count();
		
		
		$Page = new \Think\AjaxPage($count,3);
		stylepage($Page);  
		$show = $Page -> show();	
		//调用定制分页样式
		$list = $honey ->where('is_delete=0')->limit($Page -> firstRow.','.$Page -> listRows)->select();
		//dump($list);exit;
		
		$list[]=$show;
		
		
		//$list=serialize($list);
		//echo $list;
		//$this->ajaxReturn($list);
		
		$list=json_encode($list);
		echo $list;
	 
	 
	 }
	 
	 public function info(){
		$honey = new \Think\Model("Love");
		$id = $_GET['id'];
		
		$info= $honey -> find($id);
		$this -> assign('linfo',$info);
		
		//$this -> index();
		
		$list = $honey -> where("is_delete=0")->limit(10)->order('id desc')->select();
		$this -> assign('lovelist',$list);	
		
		//浏览数修改
		$num=$info['num']+1;
		$honey->where("id={$id}")->setField('num',$num);

		$this -> display();
		
	 }
	 
	
	
}















