<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'username' => ['required','string','min:4','max:20'],
            'password' => ['required','string','min:8','max:20'],
        ]);

        if (Auth::attempt(['name' => $data['username'], 'password' => $data['password']])) {
            $request->session()->regenerate();
            return redirect()->route('project.index');
        }

        return back()->withErrors(['username' => 'Invalid credentials.'])->onlyInput('username');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => ['required','string','min:4','max:20','unique:users,name'],
            'password' => ['required','string','min:8','max:20','confirmed'], // expects password_confirmation
        ]);

        $user = User::create([
            'name' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('project.index');
    }

    
}
