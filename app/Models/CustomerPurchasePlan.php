<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerPurchasePlan extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['customer_id', 'premium_plan_id', 'note', 'response'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function premiumPlan()
    {
        return $this->belongsTo(PremiumPlan::class, 'premium_plan_id');
    }
}
