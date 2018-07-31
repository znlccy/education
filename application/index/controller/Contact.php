<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/31
 * Time: 22:48
 * Comment: 联系控制器
 */
namespace app\index\controller;

class Contact extends BaseController {

    /**
     * 联系我们界面
     */
    public function us() {
        return $this->fetch();
    }

}