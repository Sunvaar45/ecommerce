<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountFormController extends Controller
{
    public function edit()
    {
        return view('account.information', [
        ]);
    }

    public function update(Request $request)
    {
        // Validation and update logic here
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user->update($request->only([
            'name',
            'email',
        ]));

        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);

            Auth::logout();
            return redirect()->route('login')
                ->with('success', 'Şifreniz değiştirildi, lütfen tekrar giriş yapın.');      
        }

        return redirect()->route('account.information.edit')
            ->with('success', 'Hesap bilgileri güncellendi.');
    }
}
