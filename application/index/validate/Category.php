<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/27
 * Time: 22:57
 * Comment: 分类验证器
 */
namespace app\index\validate;

class Category extends BaseValidate {

    /**
     * 验证规则
     * @var array
     */
    protected $rule = [
        'cate_name'     => 'require|max',
    ];

    /**
     * 验证提示信息
     * @var array
     */
    protected $message = [

    ];


}