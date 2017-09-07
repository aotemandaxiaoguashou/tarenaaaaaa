<?php
/**
*文章列表控制器
*
*
*/
namespace Home\Controller;

class ArticleController extends PublicController{
	 
	 public function index(){
				
		//$this ->articlecat();
		$this -> display();
	 }
	 
	 //文章类别列表
	 public function articlelist(){
		
		//文章标题
		$art = M('Article');
		$art_title = $art-> where("cat_id={$_GET['id']}")->select();
		//dump($art_title);
		$this -> assign('art_title',$art_title);
		
		//类型标题
		$cat_title = M('Article_cat');
		$title_list = $cat_title -> find($_GET['id']);
		$this ->assign('list',$title_list);
		
		$this -> display();
	 }
	 
	 
	 //文章内容
	 public function articleinfo(){
		$id = $_GET['id'];
		$art_content=M('Article');
		$content = $art_content -> where("article_id={$_GET['id']}")->find();
		
		//dump($content);
		//显示文章内容
		$this -> assign('content',$content);
		
		// 上一篇文章
		$last_text =$art_content->where("article_id < {$id}")->order("article_id desc")->find();
		$this->assign("last_text",$last_text);
		// 下一篇文章
		$next_text=$art_content->where("article_id > {$id}")->order("article_id asc")->find();
		$this->assign("next_text",$next_text);
		
		$this -> display('Article/index');
		
	 }
	
}















