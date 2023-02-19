<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        if (Auth::user()) {
            return view('pages.home');
        }else {
            return view('auth.login');
        }
    }
}
