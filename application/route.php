<?php
use think\Route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],
// ];


Route::get('/',function(){
    return '<h1>商城接口</h1>';
});

Route::any('cart/get_cart_list','Cart/cart/get_cart_list',['method'=>'get|post']);
 
Route::get('user/login','user/Login/Login');
Route::get('user/reg','user/Reg/reg');

//Route::get('user/cs','user/Cs/ss');


