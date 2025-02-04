<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'slider_items'; // Table name

    protected $fillable = [
        'title',
        'sub_description',
        'description',
        'background',
        'text_align'
    ];

    public function getBackgroundAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
}
