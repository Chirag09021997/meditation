<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkShop extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'short_description', 'description', 'thumb_image',  'hi_video_url', 'en_video_url', 'premium_type', 'second', 'total_view', 'status'];

    public function getThumbImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function interestType()
    {
        return $this->belongsToMany(Interest::class, 'workshop_interest_type', 'workshop_id', 'interest_id');
    }

    public function workshopCategory()
    {
        return $this->belongsToMany(WorkshopCategory::class, 'workshop_workshop_category', 'workshop_id', 'workshop_category_id');
    }
}
