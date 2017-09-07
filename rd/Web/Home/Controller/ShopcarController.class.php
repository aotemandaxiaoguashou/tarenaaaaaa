<?php
/*
* 创建 by 季旋 2015年1月19日23:02:06
* 最终修改 by 季旋
*/

namespace Home\Controller;

class ShopcarController extends PublicController {
    
	
	public function index(){
		/* 通过SESSION取值（卡壳了）
		dump($_SESSION['gd']);exit;
		$goods=M('Goods');
		
		foreach($_SESSION['gd'] as $gid=>&$gd){
		    $gd['list']=$goods->where('id='.$gid)->select();
			dump($gd['list']);exit;
			//判断:将SESSION中的userid与登录用户的id比较，若相等则进行商品查询的操作
			if($gd['userid']==$_SESSION[C('SESSION_USER')]['id']){
				
				//$gd['detail']=$goods->where('id='.$gd['goodsid'])->select();
				dump($gd['userid']);
			}
		} 
		 */
		
		
		 //从购物车表中查出相应数据，显示到前台购物车列表中
		$userid=$_SESSION[C('SESSION_USER')]['id'];
		$car=M('Car');
		$goods=M('Goods');
		$info=$car->where("userid=".$userid)->select(); //查询出已登录用户的购物车信息
		$info['all-price']=0; //添加一个商品总价字段（购物车中所有商品价格之和）
		foreach($info as &$i){
			$i['goods']=$goods->where(array('id'=>$i['goodsid']))->select(); //查询出购物车
			//dump($i);exit;
			foreach($i['goods'] as &$inf){
				$inf['mar-price']=ceil($inf['price']/0.8); //给商品信息加一个‘市场价’字段
				$inf['sum-price']=ceil($i['total']*$inf['price']); //给商品信息加一个‘商品小计’字段（购物车中同一件商品的价格的和）
				$info['all-price']+=$inf['sum-price'];//计算商品总价格
			}
			//dump($i);exit;
		}
		//dump($info);exit;
		$this->assign('info',$info);
		$this->display();
		
	}
	
	
    public function add(){
		/* 获取商品详情提交过来的信息，放在SESSION里，用商品id做下标
		$gid=$_POST['goodsid'];
		
		$_SESSION['gd'][$gid]['goodsid']=$_POST['goodsid'];
		$_SESSION['gd'][$gid]['total']=$_POST['total'];
		$_SESSION['gd'][$gid]['userid']=$_SESSION[C('SESSION_USER')]['id'];
		$_SESSION['gd'][$gid]['addtime']=time(); 
		//dump($_SESSION['gd']);exit;
		 */
		 
		 
		//获取商品详情提交过来的信息,放到购物车表中
		$goodsid=$_POST['goodsid'];
		$total=$_POST['total'];
		$_POST['userid']=$_SESSION[C('SESSION_USER')]['id'];
		$_POST['addtime']=time();
		
		$car=M('Car');
		if($car->create()){
			$res=$car->add();
			if($res){
				echo "success";
			}else{
				echo "fail";
			}
		} 
		
		
	}
	
	
	public function del(){
		$id=$_GET['id'];
		$userid=$_GET['userid'];
		/* dump($id);
		dump($userid);
		exit; */
		$car=M('car');
		if($id){
		//根据传过来的商品id删除购物车中的商品
			$res=$car->delete($id);
		}else{
		//根据传过来的用户userid，删除该用户购物车中的所有信息
			$res=$car->where("userid=".$userid)->delete();
		}
		//注意：delete()返回值是删除数据的条数，
		//此处，在火狐浏览器中总是返回0,但数据确删除成功；在IE浏览器则是正确的，该问题有待解决
		
		if(!$res){
			$this->redirect('Shopcar/index');
		}else{
			$this->redirect('Shopcar/index');
		}
	}
	
}