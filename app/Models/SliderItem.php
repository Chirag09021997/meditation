<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    use HasFactory;

    protected $table = 'slider_items'; // Table name

    protected $fillable = [
        'title',
        'sub_description',
        'description',
        'background',
        'text_align'
    ];
}
