<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }




    public function show($id)
    {

      $user = User::findOrFail($id);
      return view('users.show', compact('user'));

    }
}
