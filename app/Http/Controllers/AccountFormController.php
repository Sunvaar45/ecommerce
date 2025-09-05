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

    public function update()
    {
        // Validation and update logic here

        return redirect()->route('account.information.edit')
            ->with('success', 'Account updated successfully.');
    }
}
