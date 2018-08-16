<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/31
 * Time: 23:19
 * Comment: 角色控制器
 */
namespace app\admin\controller;

use app\admin\model\Role as RoleModel;
use app\admin\validate\Role as RoleValidate;
use think\Request;

class Role extends BasisController {

    /**
     * 声明角色模型
     * @var
     */
    protected $role_model;

    /**
     * 声明角色验证器
     * @var
     */
    protected $role_validate;

    /**
     * 默认构造函数
     * Role constructor.
     * @param Request|null $request
     */
    public function __construct(Request $request = null) {
        parent::__construct($request);
    }

}