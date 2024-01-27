<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;

    public function user()
    {
        return $this->belongsTo(Note::class);
    }

    public function getSendDateAttribute($value)
    {
        // return Carbon::parse($value)->diffForHumans();
        return Carbon::parse($value)->toFormattedDayDateString();
    }
    public function getSendTimeAttribute($value)
    {
        return Carbon::parse($value)->format('h:i A');
    }
    
}
