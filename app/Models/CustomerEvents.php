<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerEvents extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'name', 'email', 'mobile', 'address', 'person', 'total_fees'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
