<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AdminUser;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //ログイン
    public function login(){
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // 認証チェック
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // セッション固定対策
            session(['user_id' => Auth::id()]);
            return redirect('/attendance');    // ログイン成功
        }

        // ログイン失敗
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが違います',
        ])->withInput();
    }

    public function attendance(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return redirect('/login');
        }
    return view('attendance');
    }


    //新規登録
    public function register(){
        return view('register');
    }

    public function newUser(Request $request){
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
        ]);
        //User::create($users);
        return redirect('attendance');
    }




    //管理画面ログイン
    public function adminLogin(){
        return view('admin/login');
    }

    public function adminUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $adminUser = AdminUser::where('email', $request->email)->first();

        if (!$adminUser || !Hash::check($request->password, $adminUser->password)) {
            return back()->with('error', 'メールアドレスまたはパスワードが違います');
        }

        // ログイン成功（セッションに保存）
        session(['admin_user_id' => $adminUser->id]);

        return redirect('/admin/attendance/list');
    }

    public function adminList(){
        return view('admin.attendance.list');
    }



}
