<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //创建用户的页面
    public function create()
    {
        return view('users.create');
    }

    //显示所有用户列表的页面
    public function index()
    {
        return view('users.create');
    }

    //响应资源路由显示用户个人信息的页面
    public function show($id)
    {

      $user = User::findOrFail($id);
      return view('users.show', compact('user'));

    }

    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

}
