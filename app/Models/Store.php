<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['product_name', 'short_description', 'description', 'product_thumb', 'video_preview', 'price', 'total_stock', 'total_sale', 'discount', 'tags', 'status'];

    public function getPhotoThumbAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function getVideoPreviewAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
}
