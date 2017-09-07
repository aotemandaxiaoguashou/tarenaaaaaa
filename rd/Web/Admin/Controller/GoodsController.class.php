<?php
/**
* Goods商品管理，继承 CommonController
* 创建 by 季旋 2015年1月8日00:59:05
* 最后修改
*/
namespace Admin\Controller;

class GoodsController extends CommonController{
//已继承Common类的增、删、改、查、搜索、分页

//封装商品搜索，模糊查询（商品名、价格），自动调用查询
	public function _filter(&$map){
		//判断是否有搜索事件
		if(!empty($_REQUEST['keyword'])){ 
			$where['goodsname']=array("like","%{$_REQUEST['keyword']}%");
			$where['price']=array("like","%{$_REQUEST['keyword']}%");
			$where['_logic']="or"; //逻辑关系“或”
			$map['_complex']=$where; //将$where组合在一起
		}
	}
	
	//查看酒店信息详情
	public function view(){
		$id=$_GET['id'];
		$info=M('Goods')->where("id=".$id)->find();
		$this->assign('info',$info);
		$this->display('view');
	}
	
	//编辑器的图片上传处理方法 (考虑统一图片上传的图片到一个目录下进行以后好删除没有必要的)
	public function doupload()
    {
        //定义一个响应信息
		$res    = array("err"=>"", "msg"=>"");
		//执行上传
		if ($info=$this->upload('Uploads/goods/')) {
			foreach ($info as $file) {
                //上传成功！
				$res["msg"] = __ROOT__."/Public/".$file['savepath'].$file['savename'];              
				//dump($res["msg"] );exit;
			}
		} else {
            //失败
			$res['err'] = $upload -> getError(); 
		}    
		echo json_encode($res);
		exit;	
	}
	
	
	//添加商品时查询所有商品分类
	public function add(){
		$cat=M()->query("select * from rd_goodscat order by concat(path,id)");
		//dump($cat);exit;
		$this->assign('catlist',$cat);
		$this->display('add');
		
		parent::add();
	}

//将新添加的数据插入Goods表
	public function insert(){
		//dump($_FILES);//查看POST提交的图片内容
		//dump($_POST);
		$model = D("Goods");
		$info=$this->upload('Uploads/goods/'); //图片上传
		//dump($info);exit; //查看图片信息
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			//图片缩略图
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			//dump($path);
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(200, 200)->save($path.'s_'.$picname);
		 }
		 
		$_POST['addtime']=time();//添加时间
		$_POST['newtime']=time();//更新时间
		
		$model->startTrans(); //开启事务
		 
		//如果创建失败 表示验证没有通过 输出错误提示信息
		if(!$model->create($_POST)) {
			$this->error($model->getError());
		}
		
		$res = $model->add(); //将数据添加到goods表中
		//dump($res);exit;
		if($res){
			$model->commit(); //提交
			$this->success('新增成功');
		}else{
			$model->rollback(); //回滚
			$this->error('新增失败！请检查所填内容！');
		}	
	}
	
	
	
	//编辑商品时查询所有商品分类  
	public function edit(){
		$id=$_REQUEST['id']; //获取要编辑的商品的id
		$goods=M()->query("select * from rd_goods where id = ".$id); //从商品表中取出该商品的信息
		$this->assign('goods',$goods);
		//查询出所有的商品分类
		$cat=M()->query("select * from rd_goodscat order by concat(path,id)");
		$this->assign('catlist',$cat);
		$this->display('edit');
	}
	
//将编辑的数据提交到goods表中，代替原来的数据
	public function update(){
		// dump($_FILES);//查看POST提交的图片内容
		// dump($_POST);exit;
		$model = D("Goods"); //若后面重载父类里面的update,就不能再实例化
		$info=$this->upload('Uploads/goods/'); //图片上传
		//dump($info);exit; //查看图片信息
		if($info){
			$_POST['pic']=$info['pic']['savename'];
			//图片缩略图
			$picname=$info['pic']['savename'];
			$path='Public/'.$info['pic']['savepath'];
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(200, 200)->save($path.'s_'.$picname);
			//更新时间
			$_POST['newtime']=time();
			
			if(!$model->create($_POST)){  //由于thinkphp版本问题，有的版本会过滤掉标签，所以在创建时要把值写进去
				$this->error($model->getError());
			}
			
			$res=$model->save();
			if($res){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
			//parent::update();
			
		 }
	}
	
	//数据删除
	public function del(){
		$res=M('Goods')->delete(I('get.id'));  //根据传过来的id选择要删除的数据
		if($res){
			$this->success('删除成功');
		}else{
			$this->errorss('删除失败');
		}
	}

	
	
}