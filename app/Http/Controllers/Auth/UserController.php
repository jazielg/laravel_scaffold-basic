<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = User::find(Auth::id());
    }

    public function edit()
    {
        $data = $this->user;

        return view('auth.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $user = $this->user;

        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')->ignore($user)],
        ]);

        $user->update($attributes);

        return back()->with('success', 'User Updated!');
    }
}
