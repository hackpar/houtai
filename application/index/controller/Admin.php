<?php
namespace app\index\controller;
use app\index\controller\Login;
use think\Route;
use think\Controller;
use think\Db;
use think\Session;


class Admin extends Login
{

    public function index()
    {

        return view('index');
    }

}
