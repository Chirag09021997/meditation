<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeditationAudio extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'short_description', 'description', 'audio_thumb','inner_thumb', 'audio_upload', 'premium_type', 'total_view', 'status', 'meditation_type_id'];

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

    public function interestType()
    {
        return $this->belongsToMany(Interest::class, 'meditation_audio_interest_type');
    }

    public function meditationType()
    {
        return $this->belongsTo(MeditationType::class, "meditation_type_id");
    }
}
