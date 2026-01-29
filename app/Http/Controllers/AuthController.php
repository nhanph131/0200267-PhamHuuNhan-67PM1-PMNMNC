<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){   
        if ($request->username === 'nhan' && $request->password === '123') {
            session([
                'logged_in' => true,
                'username'  => $request->username
            ]);
            return redirect()->route('home');
        }

        return back()->withErrors([
            'login' => 'Sai tài khoản hoặc mật khẩu'
        ]);
    }

    public function logout(){
         session([
                'logged_in' => false,
                'username'  => null
        ]);
        return redirect()->route('home');
    }

    public function register(){
        return view('auth.register');
    }

    public function adduser(Request $request){
        //lưu db?
        if ($request->username === 'Nhanph' && $request->password === "123" && $request->password === $request->repassword)
            return "Đăng kí thành công";
        else return "Đăng kí thất bại";

        // return redirect()->route('home');
    }
}
