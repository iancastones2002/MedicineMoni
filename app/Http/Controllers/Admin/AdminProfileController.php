<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        return view('admin.adminprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();

        if ($user->id != $id) {
            // Optionally, handle unauthorized access
            abort(403);
        }

        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            // Add more fields as needed
        ]);

        // Update user profile
        $user->update($request->only([
            'first_name', 'last_name', 'middle_name', 'suffix', 'username', 'email', 'address', 'phone_number'
            // Add more fields as needed
        ]));

        return redirect()->route('profile.edit', ['profile' => $user->id])->with('success', 'Profile updated successfully.');
    }
}
