<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'store_id', 'quantity', 'price', 'discount'];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
