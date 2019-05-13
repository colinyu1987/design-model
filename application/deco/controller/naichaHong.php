<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 20:39
 */

namespace app\deco\controller;


class naichaHong extends naicha
{
    public function getTitle()
    {
        $this->title = 'Hongnaicha';
    }

    public function cost()
    {
        return 0.5;
    }
}