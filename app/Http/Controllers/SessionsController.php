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
        if (!auth()->attempt($attributes)) {

            // Authentication failed.
            throw ValidationValidationException::withMessages([
                'email' => 'Sorry, your provided credentials could not be verifeid!'
            ]);
        }

        // Session fixation to prevent 
        session()->regenerate();

        // Redirect with a success Flash message 
        return redirect('/')->with('success', 'Hello welcome back! ');
    }

    public function destroy()
    {

        auth()->logout();
        return redirect('/')->with('success', 'Goodbey!');
    }
}
