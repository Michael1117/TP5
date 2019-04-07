<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'PHP是最好的语言';
    }

    public function demo() {
        //return 'aaaa';
        dump($_SERVER);
    }
    public function demo2() {
        return 'bbbb'
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
