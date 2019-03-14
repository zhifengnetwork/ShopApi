<?php
use think\Route;

Route::get('/',function(){
    return '<h1>商城接口</h1>';
});

Route::any('cart/get_cart_list','Cart/cart/get_cart_list',['method'=>'get']);

Route::any('get_area','api/region/get_area',['method'=>'get']);

Route::post('user/login','user/Login/Login');

Route::post('user/reg','user/Reg/reg');