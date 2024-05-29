<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'Incorrect username or password.',
            'password' => 'Incorrect username or password.',
        ]);
    }


    // Show registration form
    public function reg(){
        return view('reg');
    }

    // Handle registration request
    public function regSubmit(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.unique' => 'The username has already been taken.',
        ]);

        User::create([
            'name' => $request->fullname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('/')->with('success', 'Registration successful. Please log in.');
    }
}