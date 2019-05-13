<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 20:37
 */

namespace app\deco\controller;


class naichaHei extends naicha
{
    public function getTitle()
    {
        return $this->title = 'Heinaicha';
    }

    public function cost()
    {
        return 0.8;
    }
}