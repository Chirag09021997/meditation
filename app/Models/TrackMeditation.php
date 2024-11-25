<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackMeditation extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'meditation_audio_id', 'listening_time', 'total_time'];
    public function meditationAudio()
    {
        return $this->belongsTo(MeditationAudio::class, 'meditation_audio_id');
    }
}
