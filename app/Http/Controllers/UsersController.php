<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UsersController extends Controller
{
    function create()
    {
        view('users.create');
    }

    function store(Request $request)
    {
        $this->validate($request, [  //vaildate是Controller的函數
            'name' => 'required|max:50',
            'email' => 'required|eamil|unique:users|max:255',  //unique:users 針對數據表users 的 email 做唯一性驗證
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
