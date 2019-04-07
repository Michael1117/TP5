<?php

namespace app\index\controller;

use think\Controller;

use think\Request;
use think\facade\View;

//use think\facade\Request;

class Index extends Controller
{
    public function index()
    {
        //return 'PHP是最好的语言';
        //return $this->fetch('../index/view/index/index');
        //return $this->fetch('index@index/index');
        //return $this->fetch();
        //return '1111';
        $a = '我就是变量';
        $arr = ['id' => 1, 'name' => '张三'];

        // 模板赋值
        //$this->assign('a', $a);
        //return view('index@index/index', ['a' => $a]);

        // 全局赋值方式
        View::share('webName', '网站名称');
        // 推荐
        return view('index@index/index', compact('a', 'arr'));
    }

    public function demo()
    {
        //return 'aaaa';
        dump($_SERVER);
    }

    public function demo2()
    {
        return 'bbbb';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    // 请求  use think\Request
    public function req(Request $request)
    {
        // 门面方式获取数据 use think\facade\Request

        /*//1
        //echo Request::get('id');
        //echo Request::get('age', 20);
        # echo Request::get('age', 20, 'intval');

        //echo Request::get('age', 20, 'intval');
        // 获取get 全部数据
        //dump(Request::get());

        // 判断一个key 是否存在
        //dump(Request::has('sex'));

        // 获取指定的数据  白名单
        // dump(Request::only(['id', 'age']));

        // 排除指定的数据  黑名单

        # dump(Request::except(['id']));

        // post 获取
        #dump(Request::post('name'));

        // put 获取
        #dump(Request::put('name'));


        // 获取任意类型
        #dump(Request::param('name'));

        // DELETE 获取
        #dump(Request::delete('name'));

        // 判断请求类型
        #dump(Request::isPost());

        #dump(Request::isGet());
        #dump(Request::isPut());
        #dump(Request::isDelete());

        // 是否是ajax 请求
        #dump(Request::isAjax());

        // $_SERVER 一样
        #dump(Request::server());

        // 获取环境变量
        #dump(Request::env());

        #dump(Request::route());*/

        // 依赖注入方式 [推荐]
        /*dump($request->get('name'));
        dump($request->has('gender'));

        dump($request->only(['id']));

        dump($request->except(['id']));*/
    }

    public function req2()
    {
        // 辅助函数  [推荐]
        // 获取GET的全部参数
        # dump(input('get.'));

        # dump(input('get.id'));

        # dump(input('get.gender', '女士'));

        // post 数据
        # dump(input('post.'));

        // 获取任意类型的请求

        # dump(input('param.'));
        # dump(input(''));
        // 获取任意类型的key 为name的值  如果get 和post 优先post
        # dump(input('name'));

        // 判断一个key 是否存在

        # dump(input('?gender'));

        // 使用变量修饰符 a 数组 s:字符串 d:数字
        # dump(input('name/d'));
        return '111';

    }

    // 推荐
    public function req3(int $id = 0)
    {
        //echo url('index/index/req');
        //return ['id' => 1];
        #$data = ['status' => 1000, 'msg' => '添加成功'];
        //return json($data, 201, ['Content-Type' => 'application/json']);
        #return json($data, 201, ['username' => 'admin', 'password'=>'admin888']);
        return redirect('/req2', ['id' => 1]);
        # return redirect(url('index/index/req2', ['id' => 1]));
    }
}
