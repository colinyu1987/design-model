<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 21:02
 */

namespace app\deco\controller;


class jiatang extends naicha
{
    public $title = 'jiatang';

    public $naicha;

    public function __construct(naicha $naicha)
    {
        $this->naicha = $naicha;
    }

    public function getTitle()
    {
        return $this->naicha->getTitle().'+'.'jiatang';
    }

    public function cost()
    {
        return 0.8 + $this->naicha->cost();
    }
}