<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    //
    public function signup(Request $req)
    {
        // Password confirmation check
        if ($req->password !== $req->confirmPassword) {
echo "Passwords do not match.";
            return redirect('login')->with('error', 'Passwords do not match.');
        }

        // Create new user
        $user = new User();
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->save();

        if ($user) {
            return redirect('mainui')->with('success', 'Signup successful! You are now logged in.');
        } else {
            return redirect('login')->with('error', 'Signup failed. Please try again.');
        }
    }
}
