<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 引入Route 门面 ，不是必须得 上线的时候可以注释掉

use think\facade\Route;

/*Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

return [

];*/

// index/index/demo  模块/控制器/方法
//Route::get('dd', 'index/index/demo');

Route::get('/', function (){
    return "我们在最好的年华";
});


Route::post('/', function () {
    return "我是post请求";
});

Route::put('/', function () {
    return "我是put请求";
});


Route::delete('/', function () {
    return "我是delete请求";
});


// 任意请求的类型
Route::any('/', function () {
    //return "我是delete请求";
    dump($_SERVER);
});
