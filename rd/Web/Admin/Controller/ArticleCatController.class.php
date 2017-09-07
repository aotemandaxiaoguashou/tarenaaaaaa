<?php
/**
* 文章分类 管理，继承 CommonController
* 最后修改  By CHNEN HUI AN
*
*2015年1月10日13:45:26
*/
namespace Admin\Controller;
class ArticleCatController extends CommonController {
	//已继承Common类的增删查改搜索分页方法
	//封装搜素条件,自动调用的方法
	 public function _filter(&$map){
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['cat_name']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;			
		}
		$map['is_delete']=0;
	}
	
	
	public function index(){
		
		$model = M('Article_cat');
		$list = $model->field("id,cat_name,pid,path")->where($map)->order('sort_order,id')->select();
		//dump($list);
		$this -> assign('list',$list);
		
		parent::index();
		//dump($list);	
	
	}
	
	/*public function edit(){
		$model = M(Articlecat);
		$vo=$model -> find($_GET['id']);
		$this -> assing('vo',$vo);
	
	}*/
	
	//修改信息
	public function update(){
		$model = M(Article_cat);
		 if($model -> create()){
            $res = $model -> save();
            if($res){
                $this -> success("修改成功","index");
            }else{
                $this -> error("修改失败");
            }
        }else{
            $this -> error("修改失败");
        }
	
	}
	
	
	//删除状态标记
	public function delete_tag(){
		//查找是否有和该处id值相同的pid值，如果有，说明有子分类，不允许直接删除
		$num=M()->query("select id from  rd_article as a,rd_article_cat as ac where a.cat_id=".$_GET['id']);
		if(count($num)>0){
			$this->error("该分类下存在文章，无法删除！");
			return;
		}
		parent::delete_tag();//调用父类方法完成删除
	}

}