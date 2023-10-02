<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uvolunteer extends Model
{
    use HasFactory;
    protected $table = 'uvolunteers';
    protected $fillable = ['Address', 'day', 'Experience', 'CV'];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}