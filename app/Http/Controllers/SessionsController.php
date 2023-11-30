<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionsController extends Controller
{

    public function create()
    {

        return view('login.create');
    }

    public function store()
    {

        // Validate the request

        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Attempt to authenticate and login the user based on the provided credentials 
        if (auth()->attempt($attributes)) {

            // Session fixation to prevent 
            session()->regenerate();

            // Redirect with a success Flash message 
            return redirect('/')->with('success', 'Hello welcome back! ');
        }

        // Authentication failed.

        throw ValidationValidationException::withMessages([
            'email' => 'Sorry, your provided credentials could not be verifeid!'
        ]);

        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Sorry, your porvided credentials could not be verified']);
    }

    public function destroy()
    {

        auth()->logout();
        return redirect('/')->with('success', 'Goodba!');
    }
}
