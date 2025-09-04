<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountFormController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('auth.account-edit', [
            'user' => $user
        ]);
    }

    public function update()
    {
        // Validation and update logic here

        return redirect()->route('account.edit')
            ->with('success', 'Account updated successfully.');
    }
}
