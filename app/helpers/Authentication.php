<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class Authentication
{
    public static function getGuard()
    {
        foreach (array_keys(config('auth.guards')) as $guard) {
            if (Auth::guard($guard)->check()) {
                return $guard;
            }
        }
        return null;
    }
}
