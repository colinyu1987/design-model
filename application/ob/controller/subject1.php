<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 21:11
 */

namespace app\ob\controller;


class subject1 extends subject
{
    public function event()
    {
        echo 'subject 的事件开始了，是否能够触发observer成功呢？';
        parent::event();
    }
}