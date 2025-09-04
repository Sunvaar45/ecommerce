<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Handle login logic
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'status' => 1,
        ])) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        $user = User::where('email', $request->email)->first();
        if ($user && $user->status == 0) {
            return back()->with(
                'error', 'Hesabın dondurulmuş. Lütfen destek ile iletişime geç.'
            )->onlyInput('email');
        }

        return back()->with([
            'error' => 'Bu bilgilerle eşleşen bir hesap bulunamadı.'
        ])->onlyInput('email');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Handle registration logic
    }
}
