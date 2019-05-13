<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 20:43
 */

namespace app\deco\controller;


class jiabing extends tiaoliao
{
    public $naicha;
    public $title = 'jiabing';
    public function __construct(naicha $naicha)
    {
        $this->naicha = $naicha;
    }
    public function getTitle()
    {
        return $this->naicha->getTitle().'+'.'jiabing';
    }

    public function cost()
    {
        return 1+$this->naicha->cost();//加冰免费
    }
}