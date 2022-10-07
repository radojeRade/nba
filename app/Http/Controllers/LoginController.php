<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function destroy(){
        auth()->logout();
        return redirect('/login');
        }

    public function create(){
       return view('auth.login'); 
    }

    public function store(){
        $success = auth()->attempt([    //proveravamo kredencijale usera
            'email'=> request('email'),
            'password'=>request('password')
        ]);
        if($success){
            return redirect('/');
        }else{
            return back()->withErrors([
                'message'=>'Please check your credentials'
            ]);
        }
    }
}
