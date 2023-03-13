<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function job_files()
    {
        return $this->hasMany(Job_file::class);
    }
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function job_notifications()
    {
        return $this->hasMany(Job_notification::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
