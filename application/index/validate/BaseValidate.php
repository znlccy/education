<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/7/27
 * Time: 23:04
 * Comment: 基础验证器
 */
namespace app\index\validate;

use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {

    /**
     * 验证数据
     * @param string $data
     * @return bool
     * @throws Exception
     */
    public function doCheck($data = '') {

        //实例化请求对象
        $requestObj = Request::instance();
        //如果传入的是空则获取请求里的参数
        empty($data) && $data = $requestObj->param();
        //验证数据
        if ($this->check($data)) {
            return true;
        } else {
            //如果验证没有通过
            $error = $this->getError();
            //抛出异常
            throw new Exception($error);
        }
    }

}