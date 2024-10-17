<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CouponSystem extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['type', 'coupon_code', 'value', 'start_date', 'end_date', 'status'];
}
