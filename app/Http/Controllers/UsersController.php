<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create')->with('header', 'opaque');
    }

    public function show(User $user)  //顯示用戶個人資料頁面
    {
        return view('users.show', compact('user'))->with('header', 'opaque');  //user就等於$user
    }

    public function store(Request $request)
    {
        $this->validate($request, [  //vaildate是Controller的函數
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',  //unique:users 針對數據表users 的 email 做唯一性驗證
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);  // 在route裡 [$user] 會自動獲取 [$user->id]
    }
}
