<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vaccept extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['Address', 'Languages', 'day', 'Experience', 'CV', 'user_id', 'email'];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}