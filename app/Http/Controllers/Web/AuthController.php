<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('page.auth.login');
    }

    public function login(Request $req)
    {
        $credential = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(!Auth::attempt($credential)){
            return redirect('/login-petugas');
        }

        return redirect('/admin/buku');
    }

    public function logout(Request $req) 
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
