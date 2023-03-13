<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function admin_notifications()
    {
        return $this->hasMany(Admin_notification::class);
    }
}
