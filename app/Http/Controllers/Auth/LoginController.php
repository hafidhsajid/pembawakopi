<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('operasional');
        }else{
            dd(Hash::make($request->password));
            return redirect()->back()->withErrors(['login_gagal'=>'username atau password salah'])->withInput($request->all);
        }
    }

}
