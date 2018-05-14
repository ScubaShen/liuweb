<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
           'except' => ['show', 'create', 'store', 'index']  //只有這些不會用到 Auth 權限(遊客才能使用)
        ]);

        $this->middleware('guest', [  //防止已登入去操作未登入的頁面
            'only' => ['create']
        ]);
    }

    public function index(){
        $users = User::paginate(10);
        return view('users.index', compact('users'))->with('header', 'opaque');
    }

    public function create()  //創建帳號介面
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

        Auth::login($user);  //註冊成功後可以自動登入
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);  // 在route裡 [$user] 會自動獲取 [$user->id]
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);  //當你去操作別人id時會拋出錯誤，在UserPolicy.php裡
        return view('users.edit', compact('user'))->with('header', 'opaque');
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'password' => 'nullable|confirmed|min:6'  //密碼可為空
        ]);

        $this->authorize('update', $user);

        $data = [];
        $data['name'] = $request->name;
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        session()->flash('success', '个人资料更新成功！');
        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user){
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', '成功删除用户！');
        return back();
    }
}
