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
        return redirect('/attendance');
    }

    public function register(){
        return view('register');
    }

    public function newUser(Request $request){
        $user=Users::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        //User::create($users);
        return redirect('attendance');
    }

    public function attendance(){
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
