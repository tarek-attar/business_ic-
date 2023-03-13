<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    public function sender()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function receiver()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
