<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'short_description', 'description', 'thumb_image', 'total_view', 'status', 'created_by', 'updated_by'];

    public function getThumbImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = isset(auth()->user()->id) ? auth()->user()->id : $model->created_by;
            $model->updated_by = isset(auth()->user()->id) ? auth()->user()->id : $model->updated_by;
        });
        static::updating(function ($model) {
            $model->updated_by = isset(auth()->user()->id) ? auth()->user()->id : $model->updated_by;
        });
    }
}
