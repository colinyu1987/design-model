<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 21:02
 */

namespace app\deco\controller;


class Index
{
    public function index()
    {
        $naicha = new naichaHei();//生成一个黑奶茶
        $naicha = new jiabing($naicha);//加冰
        $naicha = new jiatang($naicha);//加糖

        echo $naicha->getTitle().'花费'.$naicha->cost().'元';
    }
}