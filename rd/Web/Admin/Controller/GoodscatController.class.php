<?php
/**
* Goodscat商品分类管理，继承 CommonController
* 创建 by 季旋 2015年1月8日21:42:15
*/
namespace Admin\Controller;
class GoodscatController extends CommonController {
	
	//已继承Common类的增删查改搜索分页方法
	
	//设置默认排序方式
	//这种带一个下划线的，一般都是ThinkPHP中已经定义过的方法，
	//我们拿来用的时候一般都要给参数加地址引用符&
	public function _sort(&$sort){
		$sort="asc";//这里改为asc，默认为desc
		return $sort;
	}
	
	
	//设置默认排序字段
	public function _order(&$order){
		$order="concat(path,id)";
		return $order;
	}
	
	//添加分类
	public function add(){
		// //将在数据库操作之后的结果传给catlist
		// //是一个二维数组（array(0=>array('id'=>'','pic'=>'','path'=>''),1=>array()...)）
		//$goods=M('Goodscat');
		//$data=$goods->field("id,catname,pid,concat(path,id) as path")->where('pid<=1')->order("concat(path,id)")->select();
		$data=M()->query("select id,catname,pid,path from rd_goodscat where pid<=1 order by concat(path,id)");
		//dump($data);exit; 
		$this->assign('catlist',$data);
		$this->display('add');
	}
	
	
	public function insert(){
		//查询pid的path信息
		//sql语句：select id,catname,path from goodscat where id=$_POST['pid'];
		//dump($_POST);exit;
		
		$path=M("Goodscat")->where("id=".$_POST['pid'])->find();
		//dump($path);exit;
		if($path){
			$_POST['path']=$path['path'].'-'.$_POST['pid'];
			$_POST['pid']=$_POST['pid'];
		}else{
			$_POST['path']='0';
			$_POST['pid']=0;
		}
		
		parent::insert();
	}
	
	//编辑分类
	public function edit(){
		$model=D(CONTROLLER_NAME);
		$id=$_REQUEST[$model->getPk()];//Thinkphp自带方法，获得自增主键
		$vo=$model->find($id);
		$this->assign('vo',$vo);
		$goods=M('Goodscat');
		$data=$goods->order("concat(path,id)")->select();
		$this->assign('catlist',$data);
		$this->display('edit');
	}
	
	public function update(){
		//查询pid的path信息
		$path=M("Goodscat")->where("id=".$_POST['pid'])->find();
		//dump($path);exit;
		if($path){
			$_POST['path']=$path['path'].'-'.$_POST['pid'];
			$_POST['pid']=$_POST['pid'];
		}else{
			$_POST['path']='0';
			$_POST['pid']=0;
		}
		
		parent::update();
	}
	
	//删除分类
	public function del(){
		$num=M('Goodscat')->where("pid=".$_GET['id'])->select();
		if(count($num)>0){
			$this->error('不能删除有子类的分类');
			return;
		}
		
		$num1=M()->query("select * from rd_goods as g,rd_goodscat as gc where g.catid=".$_GET['id']);
		if(count($num1)>0){
			$this->error('该分类下有商品，无法删除');
			return;
		}
		
		parent::del();
	}
	
	//封装商品搜索，模糊查询（商品名或价格），自动调用查询
	public function _filter(&$map){
		if(!empty($_REQUEST['keyword'])){
			//判断是否有搜索事件
			$where['catname']=array("like","%{$_REQUEST['keyword']}%");
			$map=$where; //将$where组合在一起
		}
	}
	
	
	
	
	
	

}