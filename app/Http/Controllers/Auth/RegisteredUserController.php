<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_' => ['required', 'string', 'max:255'],
            'email_' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone_' => 'required|unique:users,phone|numeric|digits:10',
            'password_' => 'required|required_with:confirm-password|same:confirm-password',
        ]);
        // dd($request->phone);
        $user = User::create([
            'name' => $request->name_,
            'email' => $request->email_,
            'phone' => $request->phone_,
            'password' => Hash::make($request->password_),
            'role' => 'user',
            'address' => '0',
            'status' => '1',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
