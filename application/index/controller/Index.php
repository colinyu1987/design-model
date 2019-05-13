<?php
namespace app\index\controller;

use app\index\model\user;
use think\console\Table;
use think\Db;

class Index
{
    public function index()
    {
        $duck = new lifeduck();
        $duck->setFlyType(new highfly());
        echo $duck->display();
    }
    public function testdb()
    {
        $array = [
            'username'  => 'Colin',
            'token'     => 'dsadewqewq'
        ];

//        //插入操作，用模型
//        $user = new user();
//        $user->insert($array);
//        var_dump($user);

        //插入操作，直接使用数据库来插入数据
        Db::table('user')->insert($array);

//        查询数据
//        $data = Db::table('user')->where(['id'=>1])->find();
        $data = (new user())->where(['id'=>1])->column('username','token');
        var_dump($data);
    }

    public function moduleconf()
    {
        $user = new user();

        $userdata = [
            ['username'=>'aa','token'=>'eerwwqq'],
            ['username'=>'bb','token'=>'yytu']
        ];

        var_dump($user ->saveAll($userdata));
//        $user->data();
//        $data = $user->select()->toArray();
//        var_dump($user);
    }
}
