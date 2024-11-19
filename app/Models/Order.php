<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'payment_option', 'coupon_type', 'coupon_code', 'coupon_value', 'note', 'status'];

    public function customer()
    {
        return $this->BelongsTo(Customer::class, 'customer_id');
    }

    public function orderAddress()
    {
        return $this->hasOne(OrderAddress::class, 'order_id', 'id');
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }
}
