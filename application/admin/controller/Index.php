<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/31
 * Time: 23:20
 * Comment: 后台首页控制器
 */
namespace app\admin\controller;

class Index extends BaseController {

    /**
     * 后台管理首页
     */
    public function index() {
        return $this->fetch();
    }

}