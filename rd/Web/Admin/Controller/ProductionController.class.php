<?php
/**
* 作品控制器继承 CommonController
* 最后修改  By CHNENHUIAN 2014-10-14 23:50:56
*/
namespace Admin\Controller;

class ProductionController extends CommonController
{
	//已继承Common类的增删查改搜索分页方法
	
	//封装搜素条件,自动调用的方法
	public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['title']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['price']  = array('like',"%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
			
		}
		$map['is_delete'] = 0;//只查询is_delete=0的数据，即显示未被删除的数据

	}
	
	/*//组合表查询
	public function _tigger_list(&$list){
		
		foreach($list as &$v){
			$v["pic_name"]=M("Pro_image")->where("id=".$v['pro_id'])->getField('pic_name');
			//$mod = M("Pro_image")-> where("id={$v['pro_id']}")->select();
		
			$v['pic_name']=$mod['pic_name'];
			dump($list);
		}
		return $list;
	}*/
	
	
	
	
	//定义公共上传的方法(想提取到公共类中,先设置为私有)
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
	
	//添加图片
	public function insert(){		
		$info=$this->uploads('Uploads/Production/');//作品图片保存在Uploads/Production/目录
							
		if($info){
			//图片表实例
			$pro_image=M("Pro_image");
			
			//作品表实例化
			$production=M('Production');
			$_POST['addtime']=time();
			unset($_POST['ajax']);
			if($production->create()){					
				//添加作品信息
				$proid= $production->add($_POST);
					//获取插入图片最后插入的ID
					$data['pro_id'] = $proid;
					
					$data['addtime']=time();
					//dump($info);
					//处理获取图片路径
					foreach($info as $pic){							
						$data['pic_name'] = $pic['savepath'].$pic['savename'];
						$path ='Public/'.$pic['savepath'].$pic['savename'];
						
						//dump($data);
						//创建数据对象
						if($pro_image-> create($data)){
							$pro_image -> add();
						}												
						//图片缩略图
						$image = new \Think\Image();
						//dump($path);exit;
						$image->open($path);
						$image->thumb(200, 200)->save('Public/'.$pic['savepath'].'s_'.$pic['savename']);
						//echo "<img src=".__ROOT__.'/'.$path." width='300'/>";
					}
					//成功提示
					$this ->success('上传图片成功');
			}else{
			
				$this -> error('上传失败');
			}		
		}		
	}
	
	
	//定义删除图片修改图片（考虑提取到公共中）
	/*public function delimage($images){
	
		foreach($images as $img){
				//原图
				$srcname='Public/'.$img["pic_name"];
				//缩略图			
				$sname=substr_replace($srcname,'s_',19,0);
				//拼接路径(缩略图)
				$slname='Public/'.$sname;
				
				if(file_exists($srcname)){
					unlink($srcname);
				}

				if(file_exists($slname)) {
					unlink($slname);
				}
			}
	
	
	}*/
	
	//处理编辑器图片
	//编辑器的图片上传处理方法
	public function doupload()
    {
        //定义一个响应信息
		$res    = array("err"=>"", "msg"=>"");
		//执行上传
		if ($info=$this->uploads('Uploads/Wedding/')) {
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
	
	public function update(){
		
		$del_image = M('pro_image');
		$dels = $del_image -> field('pic_name')->where("pro_id={$_POST['id']}")->select();
		
		foreach($dels as $img){
				//原图
				$srcname='Public/'.$img["pic_name"];
				//缩略图			
				$sname=substr_replace($srcname,'s_',26,0);
				//拼接路径(缩略图)
				$slname='Public/'.$sname;
				//echo $slname."<br>";
				if(file_exists($srcname)){
					unlink($srcname);
				}

				if(file_exists($slname)) {
					unlink($slname);
				}
		}
		
		$info=$this->uploads('Uploads/Production/');//作品图片保存在Uploads/Production/目录
							
		if($info){
			//图片表实例
			$pro_image=M("Pro_image");
			//作品表实例化
			$production=M('Production');
			$_POST['addtime']=time();
			unset($_POST['ajax']);
			if($production->create()){					
				//修改作品信息
				$result= $production->where("id={$_POST['id']}")->save($_POST);
					//获取插入图片最后插入的ID
					$data['addtime']=time();
					//dump($info);
					//处理获取图片路径
					$_POST['pro_id']=$_POST['id'];
					$data['image_id']=$pro_image->where('pro_id='.$_POST['id'])->select();
					
					//dump($data['image_id']);//ok
					
					//获取图片id 测试
					//foreach($data['image_id'] as $id){
						//$img_id[] = $id['id'];
					//}
					//dump($img_id);exit; ok
					
					//先删掉再添加
					$pro_image->where('pro_id='.$_POST['id']) -> delete();
					
					foreach($info as $pic){
						
						$data['pic_name'] = $pic['savepath'].$pic['savename'];
						$path ='Public/'.$pic['savepath'].$pic['savename'];
						$data['pro_id'] = $_POST['id'];
						$data['addtime']=time();
						
						//创建数据对象
						if($pro_image-> create($data)){
							//再添加
							$pro_image -> add();
							//$pro_image -> where('id='.$img_id)->save();
						}
										
						//图片缩略图
						$image = new \Think\Image();
						//dump($path);exit;
						$image->open($path);
						$image->thumb(200, 200)->save('Public/'.$pic['savepath'].'s_'.$pic['savename']);
						//echo "<img src=".__ROOT__.'/'.$path." width='300'/>";
					}
					
					//dump($pro_image->getLastSql());
					
					$this ->success('修改图片成功');
			}else{
			
				$this -> error('修改失败');
			}		
		}	
	}
	
	//查看详情(组合查询)
	public function view(){
		
		//第一种方式
		/* $pros = M('Production');//获取
		$image = M('Pro_image');
		$images = $image ->where('pro_id='.$_GET['id'])-> select();//获取作品ID的多个图片
		foreach($images as &$v){
			//获取作品的ID $v['pro_id'];
			$p = $pros -> find($v['pro_id']);
			$v['title'] = $p['title'];
			$v['hole_name'] = $p['hole_name'];
			$v['addtime'] = $p['addtime'];
			$v['presoninfo'] = $p['presoninfo'];
			$v['requires'] = $p['requires'];
			$v['detail'] = $p['detail'];
		}	
		dump($images); */
		
		//第二种
		$model = M();//无须指定表
		$list = $model -> table("rd_production as pro,rd_pro_image as imgs")
						-> where("pro.id = imgs.pro_id and imgs.pro_id = {$_GET['id']}")
						-> select();
		
		//foreach($images as $vv){
			//$arr[]=$vv['title'];
			//$arr[]=$vv['hole_name'];
			//$arr[]=$vv['title'];
			//$arr[]=$vv['title'];
		//}
		//dump($list);
		
		$this -> assign('list',$list);
		$this -> display('production/view');
	}
	
	
}