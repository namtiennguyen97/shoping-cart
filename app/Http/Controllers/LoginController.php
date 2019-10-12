<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function login(Request $request)
    {
        $username = $request->inputUsername;
        $password = $request->inputPassword;
        if ($username == 'nam' && $password == '123456') {
            $request->session()->push('login', true);
            return redirect()->route('autho');
        }
        $message = 'Đăng nhập thất bại, hãy cấp quyền Admin để truy cập';
        $request->session()->flash('login-fail', $message);
        return view('login');
    }
}
