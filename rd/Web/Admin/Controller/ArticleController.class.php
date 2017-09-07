<?php
/**
* 文章列表管理，继承 CommonController
* 最后修改  By 
*
*
*/
namespace Admin\Controller;
class ArticleController extends CommonController {
	//已继承Common类的增删查改搜索分页方法
	//封装搜素条件,自动调用的方法
	 public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['title']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['content']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
			
		}
	} 
	
	
	//设置默认页大小
	public function _pageSize(&$pageSize){
		$pageSize='15';
		return $pageSize;
	}
	
	//组合表查询
	public function _tigger_list(&$list){
		
		foreach($list as &$v){
			//dump($list); article文章表内容    控制同名的表字段ID
			$v["cat_name"]=M("Article_cat")->where("id=".$v['cat_id'])->getField('cat_name');
			
			// 实例化类型表Article_cat获取类型的cat_id 关联article文章表的id字段,
			// 将类型表中的名称联系到文章表中. Article_cat cat_id == article cat_id
		}
		return $list;
	}
	
	//显示添加模板
	public function add(){
		$this->catlist=M("Article_cat")->field("id,cat_name")->select();
		$this->display("add");
	}
	
	public function insert(){
		$_POST['addtime']=time();
		if(M("Article")->add($_POST)){
			$this->success("发布文章成功",U('Article/index'));
		}else{
			$this->error("发布文章失败！");
		}
	}
	
	public function edit(){
		//查询所有分类
		//$this->catlist=M("Article_cat")->field("id,cat_name")->select();
		$model = M("Article_cat");
		$catlist = $model ->field("id,cat_name")->select();
		//dump($catlist);
		$this -> assign('catlist',$catlist);
		parent::edit();
	}
	
	//重载父类中的方法操作数据直接删除
	public function del(){
		//实例化对象
		$Article = M('Article');
		$id = $_GET['article_id'];
		if($Article -> where('article_id='.$id)->delete()){		
			$this->success("直接删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}
	
	public function update(){
		if(M("Article")->save($_POST)){
			$this->success("更新成功！");
		}else{
			$this->error("更新失败！");
		}
	}	
}