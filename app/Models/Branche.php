<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branche extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function contact()
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
