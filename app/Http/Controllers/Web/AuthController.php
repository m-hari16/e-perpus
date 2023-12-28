<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('page.auth.login');
    }
}
