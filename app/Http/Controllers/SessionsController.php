<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create')->with('header', 'opaque');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, $request->has('remember'))){
            session()->flash('success', '欢迎回来！');
            return redirect()->intended(route('users.show', [Auth::user()]));  //intended:跳轉到未登入前嘗試輸入的地址，例如未登入時訪問: /users/1/edit，登入後直接跳轉這頁面
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();  //withInput()才能對 {{ old('...') }} 起作用
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}