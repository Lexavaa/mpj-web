<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.page.login',[
            'title' => 'Login',
            'active' => 'Login ',
            'user' => User::latest()->get()
        ]);
    }

    public function authanticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

       if(Auth::attempt($credentials)){
           $request->session()->regenerate();
           return redirect()->intended('/home');

       }

       return back()->with('failed', 'Password / Username Tidak Terdaftar');
    }
}
