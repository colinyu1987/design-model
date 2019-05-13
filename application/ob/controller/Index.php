<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 20:57
 */

namespace app\ob\controller;


class Index
{
    public function index()
    {
        echo 'ob start'.PHP_EOL;

        $subject = new subject1();
        $subject->addObservers(new observer1());
        $subject->addObservers(new observer2());
        $subject->event();
    }
}