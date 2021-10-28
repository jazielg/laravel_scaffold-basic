<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(Request $request)
    {
        $attributes = request()->validate([
            'old_password' => 'required|min:8',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::findOrFail(Auth::id());

        if (!Hash::check($attributes['old_password'], $user->password)) {
            throw ValidationException::withMessages(['password_old' => 'Senha atual incorreta.']);
        }

        $user->update([
            'password' => Hash::make($attributes['password'])
        ]);

        return back()->with('success', 'Password change successfully!');
    }
}
