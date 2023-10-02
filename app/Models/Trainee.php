<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $table = 'trainees';
    protected $fillable = ['user_id','personal_details', 'about_codemates' , 'interested_codemates' , 'Languages_learned' , 'hope' , 'years_answer' , 'About' , 'document'];
    public function setAboutAttribute($value)
    {
        $this->attributes['About'] = json_encode($value);
    }
    public function getAboutAttribute($value)
    {
        $this->attributes['About'] = json_decode($value);
    }
}
