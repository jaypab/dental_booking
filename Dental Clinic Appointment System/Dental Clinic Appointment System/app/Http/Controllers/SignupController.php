<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');  // Return the signup form view
    }

    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:signups,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|min:8|confirmed',
        ]);

        // Save the data to the database (this is the correct approach)
        $signup = Signup::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Return to the form with success message after data is saved
        return redirect()->route('signup')->with('success', 'You have successfully signed up!');
    }
}
