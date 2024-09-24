<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Branche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function branches()
    {
        return $this->hasMany(Branche::class);
    }
    public function contact()
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
