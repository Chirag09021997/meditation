<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'blog_profile';

    protected $fillable = ['name', 'profile'];

    public function getProfileAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }


    // ✅ Add reverse relationship (optional but helpful)
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_profile_id');
    }
    
}
