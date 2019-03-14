<?php
namespace app\common\logic;
use think\Db;

class Api
{
   

    public function get_region_list($parent_id)
    {
        if($parent_id==0){
            $town_list = Db::name('region')->field('id,name')->where('level', 1)->select();
        }else{
            $town_list = Db::name('region')->field('id,name')->where('parent_id', $parent_id)->select();
        }
        return $town_list;
    }
    

}
