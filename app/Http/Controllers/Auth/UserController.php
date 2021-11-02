<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function edit()
    {
        $data = User::findOrFail(Auth::id());

        return view('auth.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $attributes = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user)],
        ]);

        $user->update($attributes);

        return back()->with('success', 'User Updated!');
    }
}
