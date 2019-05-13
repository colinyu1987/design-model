<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 20:12
 */

namespace app\deco\controller;


abstract class naicha
{
    public $title = 'naicha';
    public function getTitle(){
        return $this->title;
    }
    public abstract function cost();
}