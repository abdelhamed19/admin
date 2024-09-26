<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperate extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function contact()
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
