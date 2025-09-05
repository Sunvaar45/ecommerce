<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('account.information.edit')
            ->with('success', 'Account updated successfully.');
    }
}
