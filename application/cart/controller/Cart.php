<?php
namespace app\cart\controller;
use app\common\model\Cart as CartModel;
use app\common\api\Api;
use think\Db;
class Cart
{
    /**
     * 获取购物车列表
     */
    // public function get_cart_list()
    // {
        
    //     $model = new CartModel();
    //     $res = $model->select();
    //     return($res);
    // }

    // public function getProvince(){
    //     $getProvince = new api();
    //     $res = $getProvince->getProvince();
    //     return($res);
    // }
    // public function getRegionByParentId(){
        
    //     $getProvince = new api();
    //     $res = $getProvince->getRegionByParentId();
    //     return($res);
    // }
    // public function getArea(){
    //     $getProvince = new api();
    //     $res = $getProvince->area();
    //     return($res);
    // }
    public function getArea(){
        $parent_id = input('parent_id');

        $getProvince = new Api();
        $res = $getProvince->newArea($parent_id);

        ajaxReturn($res);
       
        
    }
}
