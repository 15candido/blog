<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        //    return request()->all(); 

        $user = User::create(request()->validate([

            'name'      => ['required', 'min:7', 'max:255'],
            'username'  => ['required', 'min:7', 'max:255', 'unique:users,username'],
            'email'    =>  ['required', 'email:rfc', 'min:7', 'max:255', 'unique:users,email'],
            'password'  => ['required', 'min:9', 'max:255']

        ]));

        // session()->flash(
        //     'success', 'Your account has been created!'
        // );

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
