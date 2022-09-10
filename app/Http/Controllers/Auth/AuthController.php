<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        if(Auth::check()){
            if (Auth::user()->role==3) {
                return view('owner.index');
            }
            dd(Auth::user()->role);
        }
        dd(Auth::check());
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
