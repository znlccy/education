<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/27
 * Time: 22:50
 * Comment: 分类模型
 */
namespace app\index\model;

use think\Model;

class Category extends BaseModel {

    /**
     * 关联的表
     * @var string
     */
    protected $table = 'tb_category';

    /**
     * 创建时间
     * @var
     */
    protected $createTime;

    /**
     * 更新时间
     * @var
     */
    protected $updateTime;

}