<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/22
 * Time: 20:12
 */

namespace app\index\controller;


class nofly implements fly
{
    public function fly()
    {
        return 'can not fly';
    }
}