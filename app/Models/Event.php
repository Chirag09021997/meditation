<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'thumb_image', 'short_description', 'description', 'starting_date', 'location', 'total_joining', 'is_paid', 'fees', 'status', 'language', 'end_date', 'duration', 'question', 'event_image', 'include', 'teaching', 'curriculum','youtube_video'];


    public function getIncludeAttribute($value)
    {
        $data = [];
        if ($value != null) {
            $data = json_decode($value, true);

            foreach ($data as $key => $item) {
                if (isset($item['image'])) {  // ✅ Check if 'image' key exists
                    $data[$key]['image'] = config('app.url') . "/" . $item['image'];
                }
            }
        }
        return $data;
    }

    public function getTeachingAttribute($value)
    {
        $data = [];

        if (!empty($value)) {
            $data = json_decode($value, true);

            foreach ($data as $key => $item) {
                if (isset($item['image']) && !empty($item['image'])) { // ✅ Check if 'image' key exists
                    $data[$key]['image'] = config('app.url') . "/" . $item['image'];
                }
            }
        }
        return $data;
    }

    public function getThumbImageAttribute($value)
    {
        return !empty($value) ? config('app.url') . "/" . $value : null;
    }

    public function customers()
    {
        return $this->hasMany(CustomerEvents::class, 'event_id');
    }
}
