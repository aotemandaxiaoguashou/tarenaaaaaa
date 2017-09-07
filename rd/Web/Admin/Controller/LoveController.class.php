<?php
/**
* 蜜月攻略，继承 CommonController
* 最后修改  By CHENHUIAN 2015年1月13日09:21:33
*/
namespace Admin\Controller;

class LoveController extends CommonController
{
	
	//封装搜素条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['area_name']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['num']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
			
		}
		$map['is_delete'] = 0;//只查询is_delete=0的数据，即显示未被删除的数据

	}
	
	//上传的方法
	public function uploads($path){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg','gif','png','jpeg');// 设置附件上传类型
		$upload->rootPath = './Public/'; // 设置文件上传保存的根路径  
		$upload->savePath = $path; // 设置附件上传目录
		$upload->subName  = '';//子目录
		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
			return false;    
		}else{// 上传成功 获取上传文件信息
			return $info;
		}
	}
	
	//编辑器的图片上传处理方法
	public function doupload()
    {
        //定义一个响应信息
		$res    = array("err"=>"", "msg"=>"");
		//执行上传
		if ($info=$this->uploads('Uploads/Love/')) {
			foreach ($info as $file) {
                //上传成功！
				$res["msg"] = __ROOT__."/Public/".$file['savepath'].$file['savename'];              
				//dump($res["msg"] );exit;
			}
	
		} else {
            //失败
			$res['err'] = $upload -> getError(); 
		}    
		echo json_encode($res);
		exit;	
	}
	
	
	//添加攻略
	public function add(){
		$this->display("add");
	}
	
	//执行添加添加攻略
	public function insert(){
		//dump($_FILES);
		$m=M("Love");
		$info=$this->uploads('Uploads/Love/');
		$info_pic=$info['pic'];
		//dump($info);exit;
		//$_POST['pic']=$info['name'];
		$_POST['pic']=$info_pic['savepath'].$info_pic['savename'];
		//dump($_POST['pic']);exit;
		
		$_POST['addtime']=time();

		//生产缩略图
		$img = new \Think\Image(); 
		$img->open("./Public/".$info_pic['savepath'].$info_pic['savename']);
		$img->thumb(150,150)->save("./Public/".$info_pic['savepath'].'s_'.$info_pic['savename']);
	
		if(!$m->create()){
			$this->error($m->getError());
		}else{
			$res=$m->add();			
			if($res){
				$this->success("添加成功",U("Love/index"));
			}else{		
				$this->error("添加失败");
			}
						
		}		
	}
	
	
	//编辑攻略(可以省略直接使用父类的方法)
	public function edit(){
		//创建信息操作对象
        $mod  = M("Love");
        //获取修改的信息
        //$Love = $mod->where("{$_GET['id']}")->select();
        $list = $mod->find($_GET['id']);
		//echo $mod->getLastSql();
		//dump($list);
        //将修改信息放置模板
		$this -> assign('vo',$list);
		$this -> display('edit');
       
	}
	
	//执行修改(处理在服务器上的图片)
	public function update(){
		//删除图片
		$del_image = M('Love');
		$dels = $del_image -> field('pic')->where("id={$_POST['id']}")->select();
		
		foreach($dels as $img){
				//原图
				$srcname='Public/'.$img["pic"];
				//缩略图			
				$sname=substr_replace($srcname,'s_',20,0);
				
				if(file_exists($srcname)){
					unlink($srcname);
				}

				if(file_exists($sname)) {
					unlink($sname);
				}
		}
		//创建信息操作对象
        $mod = M("love");
        $_POST['addtime']=time();
        //初始化修改数据(将POST中的修改信息加载到本对象中)
       
	
		//图片处理
		$info=$this->uploads('Uploads/Love/');
		$info_pic=$info['pic'];
		//$_POST['pic']=$info['name'];
		$_POST['pic']=$info_pic['savepath'].$info_pic['savename'];
		//dump($_POST['pic']);exit;

		//生产缩略图
		$img = new \Think\Image(); 
		$img->open("./Public/".$info_pic['savepath'].$info_pic['savename']);
		$img->thumb(150,150)->save("./Public/".$info_pic['savepath'].'s_'.$info_pic['savename']);
		unset($_POST['ajax']);
		//创建数据对象
		$mod->create();
        //执行修改
        if($mod->where('id='.$_POST['id'])->save($_POST)){
            $this->success("修改成功！",U("love/index"));
        }else{
            $this->error("修改失败！");
        }
		
	}
	
	//查看详情
	public function view(){
		//实例化
		$model = M('Love');
		//获取数据
		$data = $model -> where('id='.$_GET['id'])->find();

		$this -> assign('vo',$data);
		//dump($data);
		$this -> display('love/view');
	}
	
	
	//直接删除数据
	public function del(){
		$model = M('Love');
		//考虑删除图片
		//$del_image = M('Love');
		$dels = $model -> field('pic')->where("id={$_GET['id']}")->select();
		foreach($dels as $img){
				//原图
				$srcname='Public/'.$img["pic"];
				//缩略图			
				$sname=substr_replace($srcname,'s_',20,0);
				
				if(file_exists($srcname)){
					unlink($srcname);
					
				}

				if(file_exists($sname)) {
					unlink($sname);
				}
		}
		
		//删除数据
		$res = $model->where('id='.$_REQUEST['id'])->delete();
		if($res){
			$this -> success('真的删除数据成功',U('Love/index'));
		}else{
			$this -> error('删除失败');
		}
	
	}
		
}