<?php
namespace app\api\controller;

use app\common\logic\Api;
use think\Db;

class Region
{
   
    public function get_area(){

        $parent_id = input('parent_id');

        $getProvince = new Api();
        $res = $getProvince->get_region_list($parent_id);

        ajaxReturn($res);
    }
}
