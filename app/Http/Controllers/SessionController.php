<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest', [
        'only' => ['create']
      ]);
    }
    public function create()
    {
      return view('sessions.create');
    }

    public function store(Request $request)
    {
      $credentials = $this->validate($request, [
        'email' => 'required|email|max:255',
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials, $request->has('remember'))) {
        // login successfully
        session()->flash('success', "欢迎回来，勇士。");
        // Auth::user() 方法来获取 当前登录用户 的信息
        $fallback = route('users.show', Auth::user());
        return redirect()->intended($fallback);
      }else {
        // Login error
        session()->flash('danger', '抱歉，您的用户名和密码不匹配。');
        return redirect()->back()->withInput();
      }
    }

    public function destroy()
    {
      Auth::logout();
      session()->flash('success', "May the force be with you.");
      return redirect('login');
    }
}
