<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\payment;
use App\Models\payment;
use App\Models\paypal;
use App\Http\Requests\StorepaypalRequest;
use App\Http\Requests\UpdatepaypalRequest;
use App\Models\products;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\startSession;

class PaypalController extends Controller
{
     public function showpayment($id){
         $product=products::find($id);
        if(session('totalsproduct')<= $product->total){
            $product = products::find($id);

        $totalsproduct=session('totalsproduct');
        $difference= $product->total - $totalsproduct;
        return view('pages.payment',compact('product', 'difference'));
    }else{
        return redirect()->back()->with('erorr','we recive all donation');
    }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request,$id)
    {
        if ($request->price > $request->difference) {
            return redirect()->back()->with('error1', 'The amount is more than what we need ');
        }
        
        $product_id=$id;
        $totalsproduct = session('totalsproduct');

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypaltoken = $provider->getAccessToken();
        $response = $provider->createOrder(
            [
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success',compact('product_id')),
                    "cancel_url" => route('paypal_cancel') ,
                     

                ]
                ,
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $request->price,
                

                        ],
                    ]
                ]
            ]
        );

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == "approve") {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request, $id)
    {
        $totalsproduct = session('totalsproduct');
        $product_id = $id;
        $products_total = products::find($id);

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypaltoken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        $amountFromResponse = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];

        
        if (isset($response['purchase_units'][0]['payments']['captures'][0]['amount']['value'])) {

            if ($amountFromResponse >$totalsproduct) {
                                return redirect()->back()->with('error', 'The amount is more than what we need');

            }
                if (isset($response['status']) && $response['status'] == "COMPLETED") {
                    DB::table('paypals')->insert([
                        'paymen_id' => $response['id'],
                        'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                        'user_email' => $response['payment_source']['paypal']['email_address'],
                        'payment_status' => $response['payment_source']['paypal']['account_status'],
                        'currency' => 'USD',
                        'amount' => $amountFromResponse,
                        'product_id' => $product_id,
                    ]);
                    return redirect()->route('finish');
                } else {
                    return redirect()->route('paypal_cancel');
                }
            } 
    }
    function cancel()
    {
        return 'no';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepaypalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaypalRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $paypalList = payment::all();
        return view('Admin_Dashboard.Payments', ['payment' => $paypalList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paypal  $paypal
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaypalRequest  $request
     * @param  \App\Models\paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaypalRequest $request, paypal $paypal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $paypal)
    {
        //
    }
}