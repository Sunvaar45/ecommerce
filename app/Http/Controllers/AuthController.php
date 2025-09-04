<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // login attempt
        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'status' => 1,
        ])) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        // account status check
        $user = User::where('email', $request->email)->first();
        if ($user && $user->status == 0 &&
            Hash::check($request->password, $user->password
        )) {
            return back()->with(
                'error', 'Hesabın dondurulmuş. Lütfen destek ile iletişime geç.'
            )->onlyInput('email');
        }

        // wrong credentials
        return back()->with([
            'error' => 'Bu bilgilerle eşleşen bir hesap bulunamadı.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Handle registration logic
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'role' => 2, // customers
            'status' => 1,
        ]);

        // event(new Registered($user));

        return redirect()->route('login')
            ->with('success', 'Kayıt başarılı! Giriş yapabilirsiniz.');
    }
}
