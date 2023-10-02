<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    use HasFactory;
   
   
    // public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class,'userId');
 
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
 
    }
    public function reviews()
    {
        return $this->belongsTo(products::class);
    }
    public function cartItems()
    {
        return $this->hasMany(Cart::class, 'productId');
    }
  
    // return $this->belongsToMany(paypal::class);
}