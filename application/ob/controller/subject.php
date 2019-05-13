<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/23
 * Time: 21:08
 */
namespace app\ob\controller;

class subject
{
    public $observers;
    public function addObservers(observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function delObserver(observer $observer)
    {
        if (in_array($observer,$observer)){
            $key = array_search($observer,$this->observers);
            unset($this->observers[$key]);
        }
    }
    public function event()
    {
        foreach ($this->observers as $v)
        {
            $v->display();
        }
    }
}