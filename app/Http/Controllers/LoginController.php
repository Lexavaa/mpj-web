<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function index()
    {
        return view('admin.components.pages.login', [
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
        
        if (Auth::attempt($credentials)) {

            $userId = Auth::id();
            $user = User::find($userId);
        
            if ($user) {
                $user->online_status = true;
                $user->update();
            }

            $request->session()->regenerate();
            return redirect()->intended('/dashboard/home');
        }

        return back()->with('failed', 'Password / Username Tidak Terdaftar');
    }
    
    public function logout(Request $request)
    {
        $userId = Auth::id();
        $user = User::find($userId);
    
        if ($user) {
            $user->online_status = false;
            $user->update();
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
