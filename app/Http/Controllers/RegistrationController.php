<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        
        return view('registration.create');
    }

    public function store()
    {
        /*$validatedData = $request->validateWithBag('post',[
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','confirmed'],
        ]); */

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // if($validatedData!=true)
        //     return back()->withErrors($validatedData);

        $user = User::create( request(['name','email','password']) );
        auth()->login($user);
        return redirect()->to('/');
    }
}
