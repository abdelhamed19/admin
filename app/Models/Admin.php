<?php

namespace App\Models;

use App\Models\Organization;
use App\Models\Subscription;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    protected $hidden = ['password','remember_token'];
    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
    public function cooperations()
    {
        return $this->hasOne(Cooperate::class);
    }
    public function subscriptions()
    {
        return $this->hasOne(Subscription::class);
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
