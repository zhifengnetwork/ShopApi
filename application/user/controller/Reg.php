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
        $passworda = md5('TPSHOP'.$password);
        $resa = Db::name('users')->where(['mobile'=>$mobile])->find();
        $res = Db::name('users')->where(['mobile'=>$mobile,'password'=>$passworda])->find();
        
		
		 if($resa){
            $data = array(
                'status' => -1,
                'msg' => '手机号已存在'
            );
            ajaxReturn($data);
            exit;
        }else if($res){
            $data = array(
                'status' => -2,
                'msg' => '账号存在，当前为注册界面，请前往登录界面'
            );
            ajaxReturn($data);
            exit;
        }else if(!$res){
        
        $res['token'] = md5(time()).md5(time());
        
        Db::name('users')->where(['user_id'=>$user_id])->insert(['token'=>$res['token'],'mobile'=>$mobile,'password'=>$passworda]);
        
        $data = array(
            'status' => 1,
            'msg' => '创建账号成功',
            'data' => $res
        );
        ajaxReturn($data);
        exit;
		
		}
		
    }
}