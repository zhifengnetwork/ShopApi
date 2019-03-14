<?php
namespace app\cart\controller;
use app\common\model\Cart as CartModel;

class Cart
{

    /**
     * 获取购物车列表
     */
    public function get_cart_list()
    {

        $model = new CartModel();
        $res = $model->select();

      
        
        ajaxReturn($res);
    }
}
