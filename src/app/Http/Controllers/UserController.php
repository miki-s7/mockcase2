<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AdminUser;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginUser(UserRequest $request){
        //dd('attendance');
        $loginUser = $request->only(['email', 'password']);
        return redirect('attendance');
    }

    public function register(){
        return view('register');
    }

    public function newUser(UserRequest $request){
        $users = $request->only(['name', 'email', 'password']);
        User::create($users);
        return view('attendance');
    }


    public function adminLogin(){
        return view('admin_login');
    }

    public function adminUser(Request $request){
        $adminUsers = $request->only(['name', 'email', 'password']);
        AdminUser::create($adminUsers);
        return view('list');
    }
}
