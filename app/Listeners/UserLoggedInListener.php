<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserLoggedIn;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class UserLoggedInListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserLoggedIn $event)
    {
        $user = $event->user;
        if (count(session('cart')) > 0 && Auth::check()) {
            // $userId = Auth::user()->id;

            foreach (session('cart') as $cartItem) {

                Cart::create([
                    'userId ' => $user->id,
                    'productId' => $cartItem['product_id'],
                    'quantity' => $cartItem['quantity'],
                ]);
            }

            session()->forget('cart');
        }
    }
}
