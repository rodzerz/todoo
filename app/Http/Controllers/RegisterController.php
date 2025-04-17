<?php

namespace App\Http\Controllers;

use App\models\User;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Facades\Todoo;

class RegisterController extends Controller
{

    public function create() {
        return view("todos.register");
      }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "first_name" => ["required", "max:255"],
            "last_name" => ["required", "max:255"],
            "email" => ['required', Rule::unique('users', 'email')],
            "password" => ["required", "confirmed", Password::min(6)->numbers()->letters()->symbols() ]
          ]);
          $user = User::create($validated);
          Todoo::login($user);
          return redirect("/");
      }

}