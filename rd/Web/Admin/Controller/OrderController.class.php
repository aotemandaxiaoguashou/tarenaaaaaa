<?php
//自定义订单控制类
//Order 订单管理 
//创建 by 季旋 2015年1月11日03:21:06
namespace Admin\Controller;

class OrderController extends CommonController{
	//已继承Common类的增删查改搜索分页方法
	
	//封装搜索条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['ident']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['address']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
		}
	}
	
		// 确认订单、确认发货
	public function doset(){
		$id=$_GET['id'];
		$m=M("order");
		$mm=$m->find($id);
		if($mm['ispay']==1){
			$a=$_GET['aa'];
			$data=array();
			switch($a){
				case "order":
							$data['issure']=1;  //审核通过
							$data['suretime']=time();
							$a="订单";
							break;
				case "send": 
							$data['issend']=1;  //确认发货
							$data['sendtime']=time();
							$a="发货";
							break;
				default:$this->error("操作错误");break;
			}
			$m->where("id={$id}")->save($data);		 //将修改后的信息存到order表中
			if($m){
				$this->success("确认{$a}成功");
			}else{
				$this->error("已确认{$a}");
			}
		}else{
			$this->error("该订单未支付，不能确认订单！");
		}
	}
	
	// 查看订单详情
	public function view(){
		/* $ident=$_GET['ident'];
		$userid=$_GET['userid'];
		$userinfo=M("User")->find($userid);
		$order = M("order")->where("ident={$ident} and userid={$userid}")->find();
		
		//1、切换操作的数据表;2、对多表进行操作； 
		//一般情况下，操作模型的时候系统能够自动识别当前对应的数据表
		$goods=M()->table(array("gd_orderdet"=>'od',"gd_goods"=>'g'))
			->where("g.id=od.goodsid and od.id={$order['id']}")
			->select();

		$this->assign("userinfo",$userinfo);
		$this->assign("order",$order);
		$this->assign("goods",$goods);
		$this->display(); */
		
		
		$orderid=$_GET['id'];
		$userid=$_GET['userid'];
		
		//从订单列表中查出订单信息
		$order=M('Order');
		$orders=$order->where('id='.$orderid)->find();
		//dump($orders);exit;
		$this->assign('order',$orders);
		
		//从会员表中查出收货地址等信息
		$user=M('Users');
		$users=$user->where('id='.$userid)->find();
		$this->assign('users',$users);
		
		//查出该订单下各商品的信息
		$orderdet=M('Orderdet');
		$gids=$orderdet->field('goodsid,buynum')->where('orderid='.$orderid)->select();
		$good=M('Goods');
		foreach($gids as &$g){
			$g['gdetail']=$good->where(array('id'=>$g['goodsid']))->find();
			$g['sum-price']=$g['gdetail']['price']*$gids[0]['buynum'];
		}
		//dump($gids);exit;
		$this->assign('gids',$gids);
		
		$this->display();
	}
}