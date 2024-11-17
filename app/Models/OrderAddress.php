<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'b_phone',
        'b_email',
        'b_fname',
        'b_lname',
        'b_country',
        'b_address',
        'b_address2',
        'b_city',
        'b_state',
        'b_zipcode',
        's_fname',
        's_lname',
        's_country',
        's_address',
        's_address2',
        's_city',
        's_state',
        's_zipcode',
    ];
}
