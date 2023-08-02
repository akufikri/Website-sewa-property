<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        
        return view('login');
    }
      public function login_insrt(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna sesuai peran (role) mereka
            if (auth()->user()->role === 'admin') {
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
    public function insert_regis(Request $request){
        User::create([
            'name' => $request->name,
            'role' => 'tenants',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect()->back();
    }
    public function signout(){
        Auth::logout();

        return redirect('/');
    }
}