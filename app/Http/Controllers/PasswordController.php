<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    // Show the change password form
    public function showChangeForm()
    {
        return view('auth.change-password');
    }

    // Handle password update
    public function changePassword(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'new_password' => ['required', 'string', 'min:8', 'confirmed'], // confirmed requires new_password_confirmation field
        ]);

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('password.change.form')->with('success', 'Password changed successfully.');
    }
}
