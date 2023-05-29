<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Registration');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        return view('SuccReg', ['succMSG' => 'Registration Successful!']);
    }
}
