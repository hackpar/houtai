<?php
namespace app\index\controller;
use think\Route;
use think\Controller;
use think\Db;
use think\Session;
use think\Url;


class Index  extends Controller
{
    public function index()
    {

        $this->view->engine->layout(false);
        return view('index');
    }
    public function login()
    {
        $test = input('');
        $username = input('account');
        $password = input('password');
        if(!$username || !$password){

            $this->error('账号或密码错误','index');exit;
        }
        $result = Db::table('admin')->where('username',$username)->find();
        if($result){
            Session::set('login','1');
            $this->redirect('/user/list');
        }else{
            $this->error('账号或密码错误','/index');
        }
//        print_r($result);exit;
//        return view('index',['name'=>'thinkphp']);;
    }
}
