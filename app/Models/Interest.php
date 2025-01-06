<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interest extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = 'interest';
    protected $fillable = ['name', 'thumb_image', 'status'];

    public function getThumbImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function scopeOf($query)
    {
        // Define the scope logic here, for example, filtering by a specific column
        return $query->where('status', 'active');
    }
    public function meditations()
    {
        return $this->belongsToMany(MeditationAudio::class, 'meditation_audio_interest_type');
    }
    public function music()
    {
        return $this->belongsToMany(MeditationAudio::class, 'music_interest_type');
    }

    public function interestType()
    {
        return $this->belongsToMany(Interest::class, 'workshop_interest_type');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_interest');
    }
}
