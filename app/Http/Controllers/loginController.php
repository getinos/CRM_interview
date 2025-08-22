<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function login(Request $req)
    {
        // Find user by username
        $user = User::where('username', $req->username)->first();

        if ($user) {
            // Check password
            if (Hash::check($req->password, $user->password)) {
                // Store session data
                $req->session()->put('user', $user->username);

                return redirect('mainui')->with('success', 'Login successful!');
            } else {
                return redirect('login')->with('error', 'Invalid password.');
            }
        } else {
            return redirect('login')->with('error', 'User not found.');
        }
    }
}
