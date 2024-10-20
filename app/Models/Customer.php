<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'profile', 'country_name', 'mobile_no', 'email', 'business_category', 'dob'];
    public function getProfileAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
}
