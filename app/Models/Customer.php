<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'profile', 'country_name', 'mobile_no', 'email', 'business_category', 'dob', 'business_id'];
    public function getProfileAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function customerPurchasePlan()
    {
        return $this->hasOne(CustomerPurchasePlan::class, 'customer_id');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'customer_interest');
    }
}
