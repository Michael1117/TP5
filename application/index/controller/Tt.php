<?php

namespace app\index\controller;

use think\Controller;

class Tt extends Controller
{
    //
    public function index()
    {
        $data = [
            ["id" => 1, "name" => '张三'],
            ["id" => 2, "name" => '李四'],
            ["id" => 3, "name" => '王五'],
            ["id" => 4, "name" => '赵六'],
        ];

        $age = 10;
        return view('index@tt/index', compact('data', 'age'));
    }
}
