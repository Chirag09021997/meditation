<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'url',
    ];

    public function getUrlAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function store()
    {
        $this->belongsTo(Store::class, 'store_id');
    }
}
