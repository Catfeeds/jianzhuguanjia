<?php

namespace Home\Controller;
use Think\CommonController;

class IndexController extends CommonController{
    public function _initialize(){
        parent::_initialize();
    }

    public function index(){
        $this->display();
    }

    //是否到期，可否继续登录
    public function ajaxIsCanLogin(){
        if(IS_POST){
            $url = $_SERVER['HTTP_HOST'];
            $temp_school=explode('.baidulab.', $url);
            $url=$temp_school[0];
            $school=D('School')->where(array('url'=>$url))->find();

            if( $school['start_time'] < time() && time() < $school['end_time']){
                $data['status']="1";
            }else{
                $data['status']="1";
            }
            echo json_encode($data);
        }
    }

    //临时接口
    public function isokphone(){
        $phone=$_GET['Phone'];

        if($phone){
            echo 'true';
        }else{
            echo 'false';
        }
    }



    
   




}