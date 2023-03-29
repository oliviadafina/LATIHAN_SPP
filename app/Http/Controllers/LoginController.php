<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('loginadm', [
            "title"     => "SPP | Masuk Admin"
        ]);
    }
    public function actionlogin(Request $request){
        $data = [
            'username'       => $request->input('username'),
            'password'       => $request->input('password')
        ];

        if(Auth::attempt($data)){
            return redirect('/dashboard');
        } else {
            return redirect('/loginadm')->with('error', 'Periksa Nama Pengguna dan Password Anda!');
        }
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/loginadm');
    }
}
