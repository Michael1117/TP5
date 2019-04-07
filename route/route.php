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
Route::group('admin', function (){
    Route::get('login', function (){
        return 'index';
    });
});
