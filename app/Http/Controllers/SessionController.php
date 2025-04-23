<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;  // Add this line to import the Auth facade

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout(); // Log out the user
        return redirect("/"); // Redirect after logout
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],  // Validate the email field
            "password" => ['required']  // Validate the password field
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "email" => "Nepareiz e-pasts vai parole" // If authentication fails, show this error
            ]);
        }

        // Regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect to the home page after successful login
        return redirect("/");
    }

    public function create()
    {
        return view("todos.login"); // Return the login view
    }
}
