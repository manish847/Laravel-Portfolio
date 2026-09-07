<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('html.public.account.index');
    }
    public function account()
    {   
        if (auth()->check()) {
            return response()->view('redirect-to-validate');
        }
        return view('html.public.home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function validateAccount()
    {
        if (auth()->check()) {
            if( auth()->user()->usertype == 1 ) {
                return redirect()->route('dashboard');
            }
            elseif( auth()->user()->usertype == 0 ) {
                return redirect()->route('my-dashboard');
                //return view('html.public.account.dashboard');
            }
        } 
        return view('html.public.home');
    }

    public function currentDashboardEndpoint()
    {
        if (auth()->check()) {
            if( auth()->user()->usertype == 1 ) {
                return 'dashboard';
            }
            elseif( auth()->user()->usertype == 0 ) {
                return 'my-dashboard';
            }
        } 
        return 'home';
    }

    public function userAccount()
    {
        return view('html.public.account.dashboard');
    }
}
