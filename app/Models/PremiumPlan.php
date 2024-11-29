<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PremiumPlan extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount', 'thumb_upload', 'status', 'is_free'];
    public function getThumbUploadAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
    public function meditations()
    {
        return $this->belongsToMany(MeditationAudio::class, 'meditation_audio_premium_plan');
    }
}
