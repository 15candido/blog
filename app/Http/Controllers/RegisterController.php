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
       
       User::create(request()->validate([
            'name'      => ['required', 'min:7', 'max:255'],
            'username'  => ['required', 'min:7', 'max:255'],
            'email'    =>  ['required','email:rfc', 'min:7', 'max:255'],
            'password'  => ['required', 'min:5', 'max:255']
        ]));

        return redirect('/'); 
    }
}
