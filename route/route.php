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

// 路由分组

// 后台

/*
 * /admin/login
 * /admin/logout
 * /admin/main/index/
 * /admin/main/welcome
 * */
/*Route::group('admin', function (){
    Route::get('login', function (){
        return 'index';
    });
});*/


//Route::get('demo', 'index/demo/index');


// 定义控制器路由                                       路由别名

//Route::get('abc', 'index/index/index') -> name('indexr');

/*Route::group(['method' => 'get', 'name' => 'aa'], function () {
    Route::get('index', 'index');
    Route::get('demo', 'demo');
})->prefix('index/index/');*/

/*Route::group(['name' => 'aa', 'prefix' => 'index/index/'], function () {
    Route::get('index', 'index');
    Route::get('demo', 'demo');
});*/

// 定义控制器路由

Route::get('req', '@index/index/req') -> name('index/index/req');

Route::post('req', '@index/index/req') -> name('index/index/req');


// 修改
Route::put('req', '@index/index/req') -> name('index/index/req');

//
Route::delete('req', '@index/index/req') -> name('index/index/req');




Route::group(['prefix'=>'@index/index/'], function () {
    Route::get('req2', 'req2') -> name('index/index/req2');
    Route::post('req2', 'req2') -> name('index/index/req2');
// 修改
    Route::put('req2', 'req2') -> name('index/index/req2');

    Route::delete('req2', 'req2') -> name('index/index/req2');
});

