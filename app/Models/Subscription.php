<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    protected static function booted()
    {
        static::creating(function (Subscription $subscription) {
            $index = rand(1000, 9999);
            $subscription->number = Carbon::now()->year.'__'.$index;
        });
    }
}
