<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stripe\Product;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['userId', 'productId', 'quantity'];


    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function products()
    {
        return $this->belongsTo(products::class, 'productId');
    }
}
