<?php
namespace app\user\controller;
use think\Db;
use think\Request;
use think\Controller;

class Login extends Controller
{
    public function Login()
    {
        
        $mobile = Request::instance()->get('mobile');
      $password =Request::instance()->get('password');
      $password1 = md5('TPSHOP'.$password);

        $res = Db::name('users')->where(['mobile'=>$mobile])->find();
      
        $res2=Db::name('users')->where(['password'=>$password1])->find();
        if($res==FALSE){
            $data = array(
               'status' => -1,
                'msg' => '用户不存在'
            );
            ajaxReturn($data);
           // exit;
        }else if ($res&&$res2==FALSE){
            $data = array(
                'status' => -2,
                'msg' => '密码错误'
            );
            ajaxReturn($data);
           // exit;
        }else if ($res&&$res2){
            
            $res['token'] = md5(time()).md5(time());
            
            Db::name('users')->where(['mobile'=>$mobile])->update(['token'=>$res['token']]);
            
            $data = array(
                'status' => 1,
                'msg' => '登录成功',
                'data' => $res
            );
            ajaxReturn($data);
            exit;
            
            
        }
        
        
       // dump($res);
        
        
        
        
       
    }
}