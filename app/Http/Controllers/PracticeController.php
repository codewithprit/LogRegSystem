<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PracticeController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $user = Auth::user();
            $name = $user->name;

            return redirect()->route('dashboard')->with('name', $name);
        }

        return redirect()->route('login')->with('error', 'Invalid credentials. Please try signing up.');
    }


    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function dashboard()
    {
        $name = session('name');
        return view('auth.dashboard', ['name'=> $name]);
    }

}
