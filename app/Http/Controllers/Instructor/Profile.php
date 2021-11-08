<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Profile extends Controller
{
    public function index()
    {
        $user = User::with('address')->find(Auth::id());;
        // dd($user);
        return view('instructor.profile', compact('user'));
    }

    // function to change password form post method
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = Auth::user();
        $hashedPassword = $user->password;

        if (Hash::check($request->old_password, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('success', 'Password changed successfully.');
            return redirect()->back();
        } else {
            $request->session()->flash('failure', 'Current password is not correct.');
            return redirect()->back();
        }
    }

    // function to update profile with address form post method
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
        ]);

        $user = Auth::user();
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ])->save();

        $user->address->fill([
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
        ])->save();

        $request->session()->flash('success', 'Profile updated successfully.');
        return redirect()->back();
    }
}
