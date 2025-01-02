<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    
    public function changePassword(Request $request)
    {
        exit;
        $request->validate([
            // 'current_password' => 'required',
            // 'new_password' => 'required|string|min:8|different:current_password',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        // if (!Hash::check($request->current_password, $user->password)) {
        //     return redirect()->back()->with('error', 'The current password is incorrect.');
        // }

        // Update user password
        $user->password = Hash::make($request->new_password);
        $user->save();
        exit;
        return redirect()->route('home')->with('success', 'Password changed successfully.');
    }
}