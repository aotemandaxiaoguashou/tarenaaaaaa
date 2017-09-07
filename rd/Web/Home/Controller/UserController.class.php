<?php
/**
*个人中心控制器 创建 by 季旋 2015年1月23日10:35:45
*最终修改 by
*/
namespace Home\Controller;

class UserController extends PublicController{

	//从订单表中查出登录用户的订单信息
	public function  index(){
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$order=M('Order');
		$orders=$order->where('userid='.$userid)->select();
		
		$this->assign('orders',$orders);
		$this -> display();
	}
	
	//从订单表中查出登录用户的订单信息
	public function  ordercenter(){
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$order=M('Order');
		$orders=$order->where('userid='.$userid)->select();
		//dump($orders);exit;
		$this->assign('orders',$orders);
		$this -> display();
	}
	
	//会员信息管理
	public function  userIM(){
		$this -> display();
	}
	
	//将会员的真实姓名修改到会员表中
	public function adduser(){
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$user=M('Users');
		$data['tname']=$_POST['tname'];
		$res=$user->where('id='.$userid)->save($data);
		if($res){
			$this->redirect('User/index');
		}else{
			$this->error('与原名字相同');
		}
		
	}
	
	//检查旧密码是否正确
	public function checkpwd(){
		$pwd=md5($_POST['userpwd']);
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$user=M('Users')->where('id='.$userid)->find();
		$userpwd=$user['userpwd'];
		if($userpwd==$pwd){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	
	//修改会员密码
	public function  changepwd(){
		$this->display();
	}
	
	public function dochangepwd(){
		//dump($_POST);exit;
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$data['userpwd']=md5($_POST['newpassword']); //提交过来的新密码
		$user=M('Users');
		$res=$user->where('id='.$userid)->save($data);
		if($res){
			//如果密码修改成功，则跳到登陆页重新登录
			$this->redirect('Login/login');
		}else{
			$this->error('修改密码失败');
		}
		
	}
	
	//对收货地址进行修改，要先将会员表中之前存在的收货地址等信息查出来
	public function  address(){
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$user=M('Users');
		$users=$user->where('id='.$userid)->find();
		$this->assign('users',$users);
		$this -> display();
	}
	
	//将编辑后的收货地址等信息更新到会员表中
	public function editAddress(){
		$id=$_SESSION[C('SESSION_USER')]['id'];
		
		$user=M('Users');
		if($user->create()){
			$res=$user->where('id='.$id)->save();
			//echo $user->getLastSql();exit;
			//dump($res);exit;
			if($res){
				$this->redirect('User/index');
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error('修改失败');
		}
	}
	
	
	//订单详情
	public function ordDetail(){
		$orderid=$_GET['id'];
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		
		//从订单列表中查出订单信息
		$order=M('Order');
		$orders=$order->where('id='.$orderid)->find();
		$this->assign('ord',$orders);
		
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


	//若订单中心或会员中心有未付款的订单，点击付款进行处理
	public function dopay(){
		$orderid=$_GET['id'];
		$order=M('Order');

		$orders=$order->where('id='.$orderid)->find();
		//dump($orders);exit;
		//支付成功后，将支付状态和支付时间更新到order表中
		$data['ispay']=1;
		$data['paytime']=time();
		$res=$order->where('id='.$orderid)->save($data);

		//支付成功后，将订单的总积分加到该会员的积分中
		$user=M('Users');
		$users=$user->where('id='.$orders['userid'])->find();
		$point=$users['points'];
		$dat['points']=$point + $points;
		$result=$user->where('id='.$userid)->save($dat);


		//支付成功后，将订单里各商品的数量添加到商品表中各商品的销量中
		$good=M('Goods');
		$orderdet=M('Orderdet');
		$orderdets=$orderdet->where('orderid='.$orderid)->select();
		foreach($orderdets as $o){
			$goods=$good->where('id='.$o['goodsid'])->find();
			$da['sales']=$goods['sales']+$o['buynum'];
			$da['total']=$goods['total']-$o['buynum'];
			$reses=$good->where('id='.$o['goodsid'])->save($da);
		}


		if($res && $result){
			$this->redirect('User/index');
		}else{
			$this->redirect('User/index');
		}

		
	}

	
}