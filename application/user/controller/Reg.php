<?php

namespace app\user\controller;
use think\Db;
use think\Request;
use think\Controller;

class Reg extends Controller
{
    public function reg()
    {
        
        $mobile = Request::instance()->post('mobile');
        $password = Request::instance()->post('password');
        $password1 = md5('TPSHOP'.$password);
        
        $res = Db::name('users')->where(['mobile'=>$mobile,'password'=>$password1])->find();
        
        if(!$res){
            $data = array(
                'status' => -1,
                'msg' => '用户不存在'
            );
            ajaxReturn($data);
            exit;
        }
        
        $res['token'] = md5(time()).md5(time());
        
        
        Db::name('users')->where(['user_id'=>$user_id])->save(['token'=>$res['token'],['mobile'=>$mobile,'password'=>$password1]]);
        
        $data = array(
            'status' => 1,
            'msg' => '创建成功',
            'data' => $res
        );
        ajaxReturn($data);
        exit;
        
        echo $mobile;
        
        
        
        
    }
}