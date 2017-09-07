<?php
/*文件编码一定要是utf-8*/
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
	//重新定义数据库表
	protected $tableName = 'Goods'; 
	
	//定义自动验证
	protected $_validate = array(     
		array('goodsname','require','商品名必填！'), //默认情况下用正则进行验证
		//array('goods_no','','该商品编号已经存在！',0,'unique',1), 
	);
	
	//自动完成
	protected $_auto = array (          
		//array('enabled','1'),  // 新增的时候把enabled字段设置为1    
		array('addtime','time',1,'function'),//新增时 
		// array('newtime','time',2,'function'),//更新时 
    );
}