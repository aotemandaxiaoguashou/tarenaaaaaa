<?php
/*订单控制器
*创建 by 季旋 2015年1月19日23:00:15
*最终修改 by 季旋
*/

namespace Home\Controller;

class IndentController extends PublicController {
	
	//订单页
	public function index(){
	
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		//从会员表中查出会员的收货地址等信息
		$user=M('Users');
		$users=$user->where('id='.$userid)->find();
		//dump($users);exit;
		$this->assign('users',$users);
		
		//从购物车表和商品表中查出购物车里的商品信息
		$car=M('Car');
		$goods=M('Goods');
		$info=$car->where("userid=".$userid)->select(); //查询出已登录用户的购物车信息
		$info['all-price']=0; //添加一个商品总价字段（购物车中所有商品价格之和）
		$info['all-point']=0; //添加一个‘商品总积分’字段（购物车中所有商品积分之和）
		foreach($info as &$i){
			$i['goods']=$goods->where(array('id'=>$i['goodsid']))->select(); //查询出购物车
			//dump($i);exit;
			foreach($i['goods'] as &$inf){
				$inf['mar-price']=ceil($inf['price']/0.8); //给商品信息加一个‘市场价’字段
				$inf['sum-price']=ceil($i['total']*$inf['price']); //给商品信息加一个‘商品小计’字段（购物车中同一种商品的价格的和）
				$inf['sum-points']=round($i['total']*$inf['points']);//给商品信息加一个‘积分小计’字段（购物车中同一种商品的积分的和）
				
				$info['all-price']+=$inf['sum-price']; //计算商品总价格
				$info['all-point']+=$inf['sum-points']; //计算商品总积分
			}
			//dump($i);exit;
		}
		//dump($info);exit;
		$this->assign('info',$info);
		
		$this->display('index');
		
	}
	
	
	//加载收货地址
	public function info(){
		$this->display();
	}
	
	
	//添加地址

	//将订单信息页面提交过来的信息插入到会员表中
	public function addinfo(){
		$_POST['userid']=$_SESSION[C('SESSION_USER')]['id'];
		$userid=$_POST['userid'];
		$data['tname']=$_POST['tname'];
		$data['address']=$_POST['address'];
		$data['zipcode']=$_POST['zipcode'];
		$data['phone']=$_POST['phone'];
		
		$user=M('Users');
		
		//如果该会员是第一次购物，则就没有填写过收货地址等信息，这时候$res为1；
		$res=$user->where('id='.$userid)->save($data);
		
		if($res){
			//若$res为1，表示收货地址等信息设置成功，此时将会员表中'is_info'值设置为1，
			//表示已经填写过用户收货地址了
			$d['is_info']=1;
			$result=$user->where('id='.$userid)->save($d);
			//dump($result);exit;
			
			//若保存成功，就跳到Indent模块下的index()方法
			$indent=A('Indent'); //实例化要调用的模块名（等同于$indent=new Indent();）
			$indent->index();
		}else{
			$this->error('信息保存失败！');
		}
		
	}
	
	
	
	//更新购物车

	//根据购物车提交过来的购物车id和对应的total来更新购物车表中的total值
	public function updategd(){
		$total=$_POST['total'];
		$id=$_POST['carid'];
		
		$car=M('Car');
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		//循环更新数据
		for($i=0;$i<count($id);$i++){
			$data['total']=$total[$i];
			$res=$car->where('id='.$id[$i].' and userid='.$userid)->data($data)->save();
			//echo $car->getLastSql();
		}
		//dump($res);exit;
		//此处，若total值与之前购物车表中的值都不相同，则$res为1；否则为0；
		//此处无论如何都要跳到'Indent/info'，因此不做判断
		$user=M('Users');
		$users=$user->where('id='.$userid)->find();
		//dump($users);exit;
		//判断该用户是否保存过收货地址（是否是第一次购物），'is_info'为1表示已经保存过
		if($users['is_info']==1){
			//若保存过收货地址则跳到Indent模块下的index()方法
			$indent=A('Indent'); //实例化要调用的模块名（等同于$indent=new Indent();）
			$indent->index();
		}else{
			//若没有保存过则跳到页面info.html页面
			$this->redirect('Indent/info');
		}
			
		
	}
	
	
	//查询会员信息
	public function changeIndent(){
		//根据传过来的用户id，查出该用户的会员信息
		$id=$_GET['userid'];
		$user=M('Users');
		$users=$user->where('id='.$id)->find();
		$this->assign('users',$users);
		$this->display();
	}
	
	//更新会员信息
	public function dochange(){
		//接收到changeIndent.html传过来的信息，更新到会员表
		/* $id=$_POST['id'];
		$tname=$_POST['tname'];
		$address=$_POST['address'];
		$zipcode=$_POST['zipcode'];
		$phone=$_POST['phone']; */
		
		$user=M('Users');
		if($user->create()){
			$res=$user->save();
			if($res){
			//如果修改成功，就跳转到确认订单信息Indent/index.html页面
				$this->redirect('Indent/index');
			}else{
			//若修改失败，跳转回修改订单信息页面Indent/changeIndent.html
				$this->redirect('Indent/changeIndent');
			}
		}else{
			$this->redirect('Indent/changeIndent');
		}
		
	}
	
	//下订单
	public function doUpIndent(){
		//dump($_POST);
		$userid=$_POST['userid']; //获取会员id
		
		//根据提交过来的会员userid从购物车表中查出购物车里该会员预购买的商品goodsid信息
		$car=M('car');
		$cars=$car->where('userid='.$userid)->select();
		$gid='';
		$total='';
		//将购物车中所有的商品goodsid以及每件商品的数量total遍历出来拼接到一起，将它传给订单表中的gids字段和totals字段
		foreach($cars as $c){
			$gid .= $c['goodsid'].',';
			$total .=$c['total'].',';
		}
		$gids=rtrim($gid,',');
		$totals=rtrim($total,',');
		$_POST['gids']=$gids; //该订单中所有商品的id
		$_POST['totals']=$totals; //该订单中所有商品分别对应的数量
		$_POST['ident']=time().rand(100,999); //订单编号
		$_POST['addtime']=time(); //提交订单时间
		
		//当购物车中的东西提交订单时，把从购物车里提交过来的商品等信息存入到订单表。
		$order=M('order'); //实例化订单表
		if($order->create()){
			$res=$order->add();  //用add()方法添加数据得到的结果就是最后插入数据的id,这里$res就是订单id
			if($res){
				//如果添加信息到订单表成功，将订单id即$res存到$_SESSION['orderid']中
				$_SESSION['orderid']=$res;
				
				//如果添加信息到订单表成功，那么就要删掉购物车表中这些商品的信息
				$result=$car->where('userid='.$userid)->delete();
				//echo $car->getLastSql();exit;
				if($result){
					//如果删除成功，就跳到Indent模块下的upIndent()方法
					$indent=A('Indent'); //实例化要调用的模块名（等同于$indent=new Indent();）
					$indent->upIndent();
				}
			}else{
				$this->error('订单提交失败');
			}
		}else{
			$this->error('订单提交失败');
		}
		
	}
	
	//清空购物车
	public function upIndent(){
		//每提交一次订单成功后，我们就在这里做一下处理，
		//将每个订单id对应的商品id及商品数量存放到orderdet表中（订单号与商品id及数量的关系表）
		$orderid=$_SESSION['orderid']; //获取到新添加的订单的id号
		$order=M('order'); //实例化订单列表
		$orders=$order->where('id='.$orderid)->find(); //新添加的订单的信息
		
		$gids=explode(',',$orders['gids']);  //将gids字符串切割成数组,得到每一个商品id
		$totals=explode(',',$orders['totals']); ////将totals字符串切割成数组,得到每一个商品的数量
		
		$m=count($gids); //统计该订单有几种商品
		
		$orderdet=M('Orderdet');

		for($i=0;$i<$m;$i++){
			$data['orderid']=$orders['id'];
			$data['goodsid']=$gids[$i];
			$data['buynum']=$totals[$i];
			
			$res=$orderdet->add($data); //将数据循环添加到orderdet表中
			
		}
		
		unset($_SESSION['orderid']); //信息查询完就删除销毁该值
		$this->assign('orders',$orders);
		$this->display('Indent/upIndent');
	}
	
	
	//支付订单
	public function goPay(){
	
		$orderid=$_POST['orderid'];
		$userid=$_POST['userid'];
		$points=$_POST['points'];
		
		//支付成功后，将支付状态和支付时间更新到order表中
		$order=M('Order');
		$data['ispay']=1;
		$data['paytime']=time();
		$res=$order->where('id='.$orderid)->save($data);
		
		//支付成功后，将订单的总积分加到该会员的积分中
		$user=M('Users');
		$users=$user->where('id='.$userid)->find();
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
			$this->error('支付失败');
		}
	}
	
	
	//确认收货
	public function dogets(){
		$orderid=$_GET['id'];
		$order=M('Order');
		$data['isgets']=1; //收到货了则确认收货，isget值为1
		$data['getstime']=time();
		
		$res=$order->where('id='.$orderid)->save($data);
		if($res){
			$this->redirect('User/index');
		}else{
			$this->error('确认收货失败');
		}
	}
	
    
}