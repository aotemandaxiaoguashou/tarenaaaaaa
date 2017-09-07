<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{

	//初始化公共页面，自动调用函数
	public function _initialize(){
		//文章左侧分类
		$this->articlecat();
		// 页脚帮助文件文章
		$this->article();
		// 网页下面的关于我们部分
		$this->foot();
		// 友情链接
		$this->friendsLink(); 
		//婚纱推荐
		$this->wlist();
		
		$this->layout();
	}

	//公共页导航栏的遍历
    public function layout(){
		//查询出栏目表里的数据
		$column=M('Column');
		//先查询出pid为0的所有数据
		$columns=$column->where("pid=0")->select();
		foreach($columns as &$c){
			//将有子类的数据查询出来放到上面查询的数据中
			$c['col']=$column->where(array('pid'=>$c['id']))->select();
			//dump($c);exit;
		}
		//dump($columns);exit;
		$this->assign('columns',$columns);
    	// $this->display();
    }
	
		// 页面帮助文章分类及其下文章查询
    public function article(){
    		// 查询帮助文章分类
    		$artCat=new \Think\Model("article_cat");
    		$cat = $artCat->field("id,cat_name")->order("id asc")->select();
    		$article = new \Think\Model("article");
			//多表组合查询
    		foreach($cat as &$v){
    			$art = $article->field("article_id,cat_id,title")->where("cat_id = {$v['id']}")->select();
    			$v[]=$art;
    		}
			$this->assign("articleData",$cat);
			//$this->display();
    }
	
	
	 
	 //文章左侧分类
	 public function articlecat(){	
		
		//类型下有几篇文章(三维数组)
		$article = M("Article");
		$artcat= M("Article_cat");
		
		$artcats= $artcat-> select();
		//模板遍历时第二次遍历时需要带下标比较简单
		foreach($artcats as &$cat){
			$cat['title']= $article-> where(array('cat_id'=> $cat['id']))->select();
			//dump($cat);
		}
		//dump($artcats);
		$this -> assign('article',$artcats);
		//$this -> display('article/articlelist');
		
		
		/*后台遍历文章信息时常用此方法
		$article = M("Article");
		$artcat= M("Article_cat");			
		$articles= $article -> select();
		foreach($articles as &$art){
			
			$cat =$artcat->find($art['cat_id']);//目的是通过文章信息表中ID获取文章类型
			$art['cat_name'] = $cat['cat_name'];//获取文章类型名称后往数组中组合单元
		}
		
		dump($articles);//文章信息新增类型名称
		$this->assign("article",$articles);
		*/
	 }

    // 关于我们
    public function foot(){
    		$footArt = new \Think\Model("article");
    		$footArtData = $footArt->order("article_id asc")
                                                        ->limit(6)
                                                        ->select();
    		$this->assign("footArtData",$footArtData);
    }

    // 友情链接
    public function friendsLink(){
            $friends = M("Links")->where("shows=1")->limit(9)->select();
            $this->assign("friends",$friends);
			//dump($friends);
    }

    
    // 当用户非法访问不存在的方法时，调用此方法
    public function _empty(){
       $this->error("Oh no，您要找的页面从地球上消失了");
    }
	
	public function siteoff(){
		$offline=M("Settings")->where("id=1")->getField("offline");//获取是否关闭网站字段
		if($offline){
			echo "网站升级中...";
			exit;
		}
	}
	
	 public function wlist(){		
		$dres = new \Think\Model("Wedding");
		$list = $dres -> where("is_delete=0")->limit(10)->select();
		$this -> assign('deslist',$list);
		//$this -> display('Common/right');
	 }

   
    
}