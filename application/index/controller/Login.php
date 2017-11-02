<?php
namespace app\index\controller;
use think\Route;
use think\Controller;
use think\Db;
use think\Session;


class Login extends Controller
{
    public function _initialize()
    {
        $login = Session::get('login');
        if(!$login){
            $this->error('请重新登陆','/index');
            exit;
        }
    }

}
