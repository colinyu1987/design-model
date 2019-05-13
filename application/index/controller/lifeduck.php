<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/22
 * Time: 20:22
 */

namespace app\index\controller;

class lifeduck extends duck
{
    public function __construct()
    {
        $this->setFlyType(new nofly());
        $this->setSwimType(new noswim());
    }
}