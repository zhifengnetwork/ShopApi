<?php
namespace app\upload\controller;

class Test
{
    public function index()
    {
        $data = file_get_contents("php://input");

        $filename = time().'.png'; 
        
        if(file_put_contents($filename,$data)){ 
            echo 'success'; 
        }else{ 
            echo 'failed'; 
        } 

    }
}
