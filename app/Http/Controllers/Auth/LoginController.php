<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){

        return view('auth.login');
    }

    public function logout(){
        Auth::logout();

        session()->flash('message', 'Logout Successfull!');
        // $this->redirect('/');
        return redirect('/');
    }
}
