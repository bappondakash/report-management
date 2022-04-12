<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // function for get login page
    public function login(){
        return view('dashboard.login');
    }

    // function for check user email and password
    public function checkDetails(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            if(Auth::user()->user_level == 1) {
                return redirect()->route('admin.dashboard');
            }elseif(Auth::user()->user_level == 20){
                return redirect()->route('acland.dashboard.login');
            }elseif(Auth::user()->user_level == 15){
                return redirect()->route('adcr.dashboard');
            }elseif(Auth::user()->user_level == 10){
                return redirect()->route('adc.dashboard');
            }elseif(Auth::user()->user_level == 5){
                return redirect()->route('lrm');
            }elseif(Auth::user()->user_level == 3){
                return redirect()->route('lm');
            }
        }

        return redirect()->route('user.login')->withSuccess('Login details are not valid');
    }
}
