<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCustomController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == '123123' && $password == '123123') {
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } else {
            return redirect()->route('login')->with('error', 'Đăng nhập thất bại');
        }
    }

    public function logout()
    {
        return redirect()->route('login')->with('success', 'Đăng xuất thành công');
    }
}
