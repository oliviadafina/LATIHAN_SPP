<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoguserController extends Controller
{
    public function loguser()
    {
        return view('loguser', [
            'title'     => 'SPP | Masuk Siswa'
        ]);
    }

    public function actionloguser(Request $request){
        $siswa = [
            'name'           => $request->input('name'),
            'nisn'           => $request->input('nisn')
        ];
        
        if(Auth::attempt($siswa)){
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('error', 'Periksa Nama Pengguna dan Password Anda!');
        }
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}   
