<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/22
 * Time: 19:50
 */
namespace app\index\controller;

abstract class duck
{
    public $flyType;
    public $swimType;
    public function getDuck()
    {
        return __CLASS__;
    }
    public function display()
    {
        echo "the duck's fly type is \" {$this->flyType->fly()} \" and the swim type is \" {$this->swimType->swim()} \".";
    }
    public function setFlyType(fly $fly)
    {
        $this->flyType = $fly;
    }
    public function setSwimType(swim $swim)
    {
        $this->swimType = $swim;
    }
}