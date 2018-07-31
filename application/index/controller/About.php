<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/31
 * Time: 22:45
 * Comment:关于我们控制器
 */
namespace app\index\controller;

class About extends BaseController {

    /**
     * 关于我们界面
     */
    public function us() {
        return $this->fetch();
    }
}