<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['product_name', 'short_description', 'description', 'product_thumb', 'video_preview', 'total_stock', 'total_sale', 'finance_product' ,'tags', 'status','add_home_status'];

    public function getProductThumbAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function productPhotos()
    {
        return $this->hasMany(ProductPhoto::class, 'store_id');
    }
}
