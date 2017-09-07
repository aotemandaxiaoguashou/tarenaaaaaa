<?php
/**
*
*空控制器
*/

namespace Home\Controller;
use Think\Controller;

// 当非法访问不存在的控制器时，实例化此控制器
class EmptyController extends PublicController {

    // 当用户非法访问不存在的方法时，调用此方法
    public function _empty(){
        $this->error("Oh no，抱歉！您要找的页面已经去度蜜月了");
    }

}