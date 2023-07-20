<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index(){
        if (Auth::check()) {
            # code...
            return redirect()->route('inicio');

        } else{
            return view('login');
        }

        return view('login');
    }
    public function logear(Request $request){
        $credenciales = $request->only('name','password');
        if (Auth::attempt($credenciales)) {
            # cod
            return redirect()->route('inicio');
        }else {
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
