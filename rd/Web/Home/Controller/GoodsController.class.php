<?php
/*
*创建 by 季旋 2015年1月19日10:52:12
*最终修改 by 季旋
*/
namespace Home\Controller;

class GoodsController extends PublicController{
	
	
    public function index(){
		//商品首页导航栏的遍历 
		$column=M('Column');
		$columns=$column->where("ismenu=1 and pid=1")->select();
		//dump($columns);exit;
		$this->assign('columns',$columns);
		
		//将商品中的礼炮类从商品中查出来，只选择前四个放在商品首页中
		$salutes=M('Goods');
		$salute=$salutes->where("catid=1")->limit(4)->select();
		$this->assign("salute",$salute);
		
		//将商品中的家庭装饰品类从商品中查出来，只选择前四个放在商品首页中
		$decorations=M('Goods');
		$decoration=$decorations->where("catid=2")->limit(4)->select();
		$this->assign("decoration",$decoration);
		
		//将商品中的鲜花类从商品中查出来，只选择前四个放在商品首页中
		$flowers=M('Goods');
		$flower=$flowers->where("catid=3")->limit(4)->select();
		$this->assign("flower",$flower);
		
		//将商品中的化妆品类从商品中查出来，只选择前四个放在商品首页中
		$toiletrys=M('Goods');
		$toiletry=$toiletrys->where("catid=4")->limit(4)->select();
		$this->assign("toiletry",$toiletry);
		
    	$this->display();
    }
	
	public function salute(){
		
		//将商品中的礼炮类从商品中查出来，放在礼炮列表页
		$salutes=M('Goods');
		$salute=$salutes->where("catid=1")->select();
		foreach($salute as $s){
			//添加一个市场价字段
			$s['mar-price']=ceil($s['price']/0.8);
			$sal[]=$s;
		}
		//dump($sal);exit;
		$this->assign("salute",$sal);
    	$this->display();
    }
	
	public function decoration(){
		//将商品中的家庭装饰品类从商品中查出来，放在家庭装饰品列表页
		$decorations=M('Goods');
		$decoration=$decorations->where("catid=2")->select();
		foreach($decoration as $d){
			//添加一个市场价字段
			$d['mar-price']=ceil($d['price']/0.8);
			$deco[]=$d;
		}
		$this->assign("decoration",$deco);
    	$this->display();
    }
	
	public function flower(){
		//将商品中的鲜花类从商品中查出来，放在鲜花列表页
		$flowers=M('Goods');
		$flower=$flowers->where("catid=3")->select();
		foreach($flower as $f){
			//添加一个市场价字段
			$f['mar-price']=ceil($f['price']/0.8);
			$flo[]=$f;
		}
		$this->assign("flower",$flo);
    	$this->display();
    }
	
	public function toiletry(){
		//将商品中的化妆品类从商品中查出来，放在化妆品首页中
		$toiletrys=M('Goods');
		$toiletry=$toiletrys->where("catid=4")->select();
		foreach($toiletry as $t){
			//添加一个市场价字段
			$t['mar-price']=ceil($t['price']/0.8);
			$toile[]=$t;
		}
		$this->assign("toiletry",$toile);
    	$this->display();
    }
	
	public function detail(){
		$id=$_GET['id'];
		//dump($id);exit;
		$goods=M('Goods')->where("id=".$id)->find();
		//dump($goods);exit;
		//查询出该商品所属的类
		$goodscat=M('Goodscat')->find($goods['catid']);
		//将查出的该商品所属类的名称放在goods数据中
		$goods['catname']=$goodscat['catname'];
		//dump($goods['catname']);exit;
		$goods['mar-price']=ceil($goods['price']/0.8);
		$this->assign('goods',$goods);
    	$this->display();
    }

   
   
    
}