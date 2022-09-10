<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Pembeli;


class AuthController extends Controller
{
 
    function showLogin(){
        return view('frontview.login');
    }

    function loginProcess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }

        if(Auth()->guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }

        if(Auth()->guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('index')->with('success', 'Login Berhasil');
        }
    }


    

    function logout(){
        Auth()->logout();
        Auth()->guard('pembeli')->logout();
        Auth()->guard('penjual')->logout();
        return redirect('login');
    }
   
}

