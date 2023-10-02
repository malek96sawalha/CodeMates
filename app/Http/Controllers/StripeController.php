<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// use App\Models\Stripe;
// use App\Http\Requests\StoreStripeRequest;
// use App\Http\Requests\UpdateStripeRequest;
use Illuminate\Http\Request;
use Stripe;
use Stripe\Checkout\Session;
// use Stripe\StripeClient;


class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request,$id)
    {


$userid= Auth::user()->id;
        $products = Cart::where('userId', $userid)->get();
        foreach ($products as $product) {
            dd($product['quantity']);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->products->name, // Use the product name from your database
                    ],
                    'unit_amount' => $product->products->price * 100, // Convert the price to cents
                ],
                'quantity' =>$product['quantity'] , // Use the quantity you calculated
            ];
        }
        

            \Stripe\Stripe::SetApiKey(config('strip.stripe_sk'));
            \Stripe\Stripe::setApiKey('sk_test_51NoRh3KjD3e5Hnk5snFlBHYl2YHnYsUbZ012l09868nPLxQgfCuesEAyP1sOF0BZfWDh9FBIWFP9tns1hM5LhI5n007xFC8uMV');
            $response =  \Stripe\Checkout\Session::create([
                'line_items' => $lineItems,
                'automatic_tax' => ['enabled' => true],
                'mode' => 'payment',
                'success_url' => route('stripe_success'),
                'cancel_url' => route('stripe_cancel'),
            ]); 
            // dd($response);
            $totalsproduct = session('totalsproduct');

   $products_total = products::find($id);


            
            DB::table('payments')->insert([
            'userId' => Auth::user()->id,
            'status' => 'paid',
            'provider'=>'nu',
                // 'currency' => 'USD',
                'amount' => $response['amount_total'] / 100,
            'payment-method' => 'stripe',

            ]);

        return redirect()->away($response->url);
    // } 
}
    public function success()
    {
        return redirect()->route('finish');
    }
    public function cancel()
    {
    }
}
