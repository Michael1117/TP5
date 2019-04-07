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

// 必填参数
/*Route::get("dd/:id", function (int $id) {
    return "我是dd，我的参数值是:".$id;
})->pattern(['id' => '\d+']);*/

// 路由参数类型的限定
/*Route::get("dd/:ids", function ($ids) {
    return "我是dd，我的参数值是:".$ids;
})->pattern(['id' => '\d+']);*/

// 可选参数
Route::get('dd/[:id]', function ($id = 0){
    return "我是dd，我的参数值是:".$id;
});


/*Route::get('/', function (){
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
});*/


// 任意请求的类型
/*Route::any('/', function () {
    //return "我是delete请求";
    dump($_SERVER);
});*/
