<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\UserVerified;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create(){
        return view('auth.register');
    }
    public function update($id){
        
        User::where('id', $id)->update(['is_verified' => true]);
        return view('auth.login');
    }
    public function store(CreateUserRequest $request){

        $validated = $request->validated();

        $user = new User();

        $user->name= $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();
        
            Mail::to($user)->send(new UserVerified($user));
        

        //auth()->login($user);

        //session()->flash('message', 'Registration is succesfull');//flash poruka

        return redirect('/');

    }
}
