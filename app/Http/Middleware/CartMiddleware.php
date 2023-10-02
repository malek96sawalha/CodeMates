<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart; // Adjust the namespace based on your project
use App\Models\products;

class CartMiddleware
{
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = Cart::where('userId', $user->id)->get();
            $cart = [];

            foreach ($cartItems as $cartItem) {
                // Fetch the associated product details
                $product = Products::find($cartItem->productId);

                // Create an array with the desired product details
                $cart[$cartItem->productId] = [
                    "id" => $cartItem->productId,
                    "product_id" => $product->productId,
                    "name" => $product->name,
                    "img" => $product->img,
                    "price" => $product->price,
                    'cartDescription' => $product->cartDescription,
                    "quantity" => $cartItem->quantity
                    // Add other product details if needed
                ];
            }
        


            session()->put('cart', $cart);
        }

        return $next($request);
    }
}
