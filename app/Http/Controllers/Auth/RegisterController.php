<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{public function showRegistrationForm()
    {
        return view('auth.register');
    }
    
    public function regSubmit(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.unique' => 'The username has already been taken.',
        ]);
    
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    
}
