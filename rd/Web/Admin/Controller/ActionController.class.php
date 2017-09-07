<?php
/**
*操作控制器
*@author:CHENHUIAN 
*
*/
namespace Admin\Controller;

class ActionController extends CommonController
{
	
	//封装搜素条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['action_myname']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['action_des']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
			
		}
	}
	
	//显示表
	public function _tigger_list(&$list){
		
		return $list;
	}
}