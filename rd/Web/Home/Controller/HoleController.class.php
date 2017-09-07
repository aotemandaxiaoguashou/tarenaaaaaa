<?php
/*
* 创建 by 季旋 2015年1月19日23:01:14
* 最终修改 by 季旋
*/
namespace Home\Controller;

class HoleController extends PublicController {
    public function index(){
		//查出所有的酒店信息，放到酒店列表首页
		$hole=M('Hole');
		$holes=$hole->select();
		//dump($holes);exit;
		$this->assign('holes',$holes);
    	$this->display();
    }

	public function detail(){
		$id=$_GET['id'];
		//dump($id);exit;
		$hole=M('Hole')->where("id=".$id)->find();
		//dump($hole['catid']);exit;
		//查询出该酒店所属的类
		$column=M('Column')->where("id=".$hole['catid'])->find();
		//dump($column);exit;
		//将查出的该酒店所属类的名称放在hole数据中
		$hole['columnname']=$column['columnname'];
		$hole['english']=$column['english'];
		//dump($hole);exit;
		$this->assign('hole',$hole);
    	$this->display();
	}
	
	public function five(){
		//将五星级酒店类从酒店中查出来，放在五星级酒店列表页
		$five=M('Hole');
		$fivestar=$five->where("style=0")->select();
		$this->assign('fivestar',$fivestar);
		$this->display();
	}
	
	public function four(){
		//将四星级酒店类从酒店中查出来，放在四星级酒店列表页
		$four=M('Hole');
		$fourstar=$four->where("style=1")->select();
		$this->assign('fourstar',$fourstar);
		$this->display();
	}
	
	public function three(){
		//将三星级酒店类从酒店中查出来，放在三星级酒店列表页
		$three=M('Hole');
		$threestar=$three->where("style=2")->select();
		$this->assign('threestar',$threestar);
		$this->display();
	}
	
	public function chain(){
		//将连锁酒店类从酒店中查出来，放在连锁酒店列表页
		$chain=M('Hole');
		$chains=$chain->where("style=3")->select();
		$this->assign('chains',$chains);
		$this->display();
	}
	
	public function sod(){
		//将婚宴草坪酒店类从酒店中查出来，放在婚宴草坪酒店列表页
		$sod=M('Hole');
		$sods=$sod->where("style=4")->select();
		$this->assign('sods',$sods);
		$this->display();
	}
   
    //页面头部搜索框的处理
	public function search(){
		$keyword=$_GET['keyword'];
		//dump($keyword);exit;
		$hole=M('Hole');
		$holes=$hole->where('holename like "%'.$keyword.'%"')->select();
		//echo $hole->getLastSql(); //获取最后一条sql语句
		//dump($holes);exit;
		$this->assign('holes',$holes);
		$this->display();
	}
}