<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\PostRegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function postLogin(Request $req)
    {

        try {
            if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
    public function logon()
    {
        return view('admin.login.index');
    }
    public function postLogon(Request $req)
    {
        try {
            if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
    public function adminLogout()
    {
        try {
            Auth::logout();
            return redirect()->route('admin.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function logout(Request $req)
    {
        try {
            if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
                Auth::logout();
                return redirect()->route('home');
            } else {
                Auth::logout();
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function register()
    {
        return view('admin.register.index');
    }
    public function postRegister(PostRegisterRequest $req)
    {
        $password = Hash::make($req->password);
        User::create([
            "name" => $req->name,
            "email" => $req->email,
            "password" => $password,
        ]);

        return redirect()->route('login.index')->with('success', 'Đăng kí thành công');
    }
}
