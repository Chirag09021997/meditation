<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeditationAudio extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view', 'status'];

    public function getAudioThumbAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function getAudioUploadAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function premiumPlans()
    {
        return $this->belongsToMany(PremiumPlan::class, 'meditation_audio_premium_plan');
    }
}
