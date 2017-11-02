<?php
namespace app\index\controller;
use app\index\controller\Login;
use think\Route;
use think\Controller;
use think\Db;
use think\Session;


class User extends Login
{

    public function index()
    {

        return view('list');
    }

}
