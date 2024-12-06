<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login()
    {
        return view('login'); // Points to your login Blade

    }

}