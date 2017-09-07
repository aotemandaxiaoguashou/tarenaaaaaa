<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
	//重新定义数据库表
	protected $tableName = 'admin'; 
	
	//自动验证
	protected $_validate = array(     
		array('admin_name','require','用户名必须！'), //默认情况下用正则进行验证
		array('admin_name','帐号名称已经存在！',0,'unique',3), // 在新增的时候验证name字段是否唯一 
		array('email','','该邮箱已经存在！',0,'unique',3), 
	);
	
	//自动完成
	protected $_auto = array (          
		array('status','1'),  // 新增的时候把enabled字段设置为1    
		array('pwd','md5',1,'function') , // 对pwd字段在新增时使md5函数处理  
		array('addtime','time',1,'function'),//新增时 
    );
	
}