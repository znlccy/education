<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/28
 * Time: 9:28
 * Comment: 管理员控制器
 */
namespace app\admin\controller;

use app\admin\model\Admin as AdminModel;
use app\admin\validate\Admin as AdminValidate;
use think\Request;

class Admin extends BasisController {

    /**
     * 声明管理员模型
     * @var
     */
    protected $admin_model;

    /**
     * 声明管理员验证器
     * @var
     */
    protected $admin_validate;

    /**
     * 默认构造函数
     * Admin constructor.
     * @param Request|null $request
     */
    public function __construct(Request $request = null) {
        parent::__construct($request);
        $this->admin_model = new AdminModel();
        $this->admin_validate = new AdminValidate();
    }



}

