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

    //处理表单提交后的数据
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'confirmed'
        ]);

        $user = User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

}
