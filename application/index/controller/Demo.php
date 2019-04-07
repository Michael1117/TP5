<?php


namespace app\index\controller;

use think\Controller;

class Demo extends Controller
{

   public function index(){
       //return $this -> success('登录成功！！！', '/index/demo/su' , "", "", "");
       return $this -> success('登录成功！！！', ulr('indexr'));
   }

   // 成功页面
    public function su() {
       return "我是成功页面";
    }
    // 前置操作方法列表
    /*protected $beforeActionList = [
        'checkUser' => ['index', 'welcome']
    ];

    public function index(){
        return 'demo/index';
    }

    public function checkUser() {
        echo 'aaaa<br>';
    }

    public function welcome(){
        return '<hr>bbbb';
    }*/
}