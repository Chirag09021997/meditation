<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'image', 'short_desc', 'status'];
    public function getImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
}
