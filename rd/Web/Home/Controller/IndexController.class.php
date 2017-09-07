<?php
namespace Home\Controller;

class IndexController extends PublicController {
    public function index(){
		$setting=M('settings');
		$settings=$setting->field('offline')->find();
		//dump($settings);exit;
		
		 if($settings['offline']==1){
			echo "<div style='font-size:50px;width:600px;height:300px;margin:0 auto;color:red;'>网址已关闭，请稍后再来</div>";
			return false;
		}
		
		//在首页中显示婚宴酒店 by 季旋 2015年1月21日19:38:10
		$hole=M('Hole');
		$holes=$hole->limit(4)->select();
		$this->assign('holes',$holes);
		
		
		//婚纱摄影  by 陈会安 2015年1月25日23:12:58
		$wedding = M('Wedding');
		$wlist = $wedding ->limit(4)->select();
		$this -> assign('wlist',$wlist);
		//dump($wlist);exit;


		//婚礼案例
		$production = M('production');
		$img = M('pro_image');
		$plist = M()->table('rd_production as pro,rd_pro_image as img')
					->where('pro.id = img.pro_id')
						//->order('id desc')
							->limit(4)
								->select();
						
		$this -> assign('plist',$plist);
		//dump($plist);
		
		//找婚礼人
			//找主持人
		$mod=M("marriager");
		$data=$mod->where("tid=0")->limit(1)->select();
		$this->assign("data",$data);
			//找造型师
		$datas=$mod->where("tid=1")->limit(1)->select();
		$this->assign("datas",$datas);
			//找摄像师
		$dataes=$mod->where("tid=2")->limit(1)->select();
		$this->assign("dataes",$dataes);
			//找策划师
		$datae=$mod->where("tid=3")->limit(1)->select();
		$this->assign("datae",$datae);	
		$this->display();
    }


}