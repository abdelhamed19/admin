<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\SuperAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only("email","password");

        if (Auth::guard('super-admin')->attempt($credentials)) {
            $superAdmin = SuperAdmin::where('email', $request->email)->first();
            Auth::guard('super-admin')->login($superAdmin);
            return redirect('admin/dashboard');
        }

        // Then check the 'admin' guard
        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Admin::where('email', $request->email)->first();
            Auth::guard('admin')->login($admin);
            return redirect('admin/dashboard');
        }

        // Finally, check the default 'user' guard
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            return redirect('admin/dashboard');
        }
        return back()->with('error','Invalid credentials');
    }
    public function logout()
    {
        $guard = request()->guard;
        Auth::guard($guard)->logout();
        return redirect('/');
    }
}
