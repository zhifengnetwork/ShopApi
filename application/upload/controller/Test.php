<?php
namespace app\upload\controller;

class Test
{
    public function index()
    {
        $data = file_get_contents("php://input");

        if(!$data || empty($data)){
            exit(json_encode('status'=>-1,'msg'=>'错误，内容为空'));
        }

        $filename = time().'.png'; 
        
        if(file_put_contents($filename,$data)){ 
         
            exit(json_encode('status'=>-1,'msg'=>'保存成功'));
        }else{ 
         
            exit(json_encode('status'=>-1,'msg'=>'保存失败'));
        } 

    }
}
