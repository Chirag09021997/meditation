<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurTeam extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'email', 'profile', 'post', 'speciality', 'experience', 'phone_no', 'trainers_skill', 'facebook_url', 'twitter_url', 'google_url', 'instagram_url', 'youtube_url', 'about'];

    public function getProfileAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }
}
