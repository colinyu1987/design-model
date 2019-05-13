<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 21:06
 */

namespace app\ob\controller;


class observer1 implements observer
{
    public function display()
    {
        echo '我是 observer1';
    }
}