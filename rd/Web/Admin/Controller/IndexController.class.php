<?php
namespace Admin\Controller;
class IndexController extends CommonsController {
    //覆盖父类Controller的魔术方法_initialize()方法:控制器初始化  找到系统设置的数据
    public function index(){
		$this->display('index');
    }
    public function _initialize(){
		//parent::_initialize();
		$mod=M('settings');
		//查询到配置数据并分配给模板中
		$shopset=$mod->find('1');
		$this->assign('vo',$shopset);
		//$this->display();
	}
	//将所有对配置修改对数据库进行修改
	public function shopset_save(){
		$mod=M('settings');
		//实例化上传类
		$info=$this->upload('Uploads/');
		//判断是否上传  如果没有上传就直接不执行上传
		if($info){
			$_POST['logo']=$info['logo']['savename'];
			//给图片加缩略图
			$picname=$info['pic']['savename'];
			$path='./Public/'.$info['pic']['savepath'];
			//dump($path.$picname);exit;
			$image = new \Think\Image(); 
			$image->open($path.$picname);
			$image->thumb(200, 200)->save($path.'s_'.$picname);
		}
		//将ajax传过来的值直接修改掉
		$mod->create();
		if($mod->save()){
			$this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}

	
	
	
	
	
}