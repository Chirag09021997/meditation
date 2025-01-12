<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkshopCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'thumb_image', 'status'];

    public function getThumbImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function workshops()
    {
        return $this->belongsToMany(WorkShop::class, 'workshop_workshop_category', 'workshop_category_id', 'workshop_id');
    }
}
