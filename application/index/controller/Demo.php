<?php


namespace app\index\controller;


use think\Collection;

class Demo extends Collection
{
    public function index(){
        return 'demo/index';
    }
}