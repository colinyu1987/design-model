<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/24
 * Time: 9:28
 */

namespace app\note\controller;


class Index
{
    public function index(){
        $a['a'] = ['a','b','c'];
        $a['b'] = 'b';
        $b = [];
        isset($a['b']) && $b['a'] = $a['b'];
//        array_walk($a ,function ($r){
//            var_dump($r);
//        });
//        var_dump($a+$b);
//        echo strlen('rt-4pcs-brown（外包装破损）(return)');
        $str = 'fsasdasfas.ee';

        echo substr(strrchr($str, '.'), 1);
    }

    public function emp()
    {
        $a = [[]];
        var_dump((boolean)$a);
    }
}