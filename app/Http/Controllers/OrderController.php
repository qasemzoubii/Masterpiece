<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Orderitem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::latest()->paginate(5);
        return view('admin.pages.order.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }

    public function checkoutView()
    {

        if (Auth::user()) {
            return view('pages.check-out');
        }
        return redirect()->back()->with('error', 'You Must Login First!');

    }


    public function pay(Request $request)
    {
        if ($request->input('payment_method') == 'paypal') {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel')
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => Cart::total()
                        ]
                    ]
                ]
            ]);

            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        // Store specific data from the request in the session
                        session([
                            'paymentDetail' => [
                                'phone' => $request->input('phone'),
                                'country' => $request->input('country'),
                                'city' => $request->input('city'),
                                'street_address' => $request->input('street_address'),
                                'post_code' => $request->input('post_code'),
                                'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
                                'payment_method' => $request->input('payment_method'),
                            ]
                        ]);
                        return redirect()->away($link['href']);
                    }
                }

            } else {
                return redirect()->route('paypal_cancel');
            }


        }
        $user_id = Auth::user()->id;
        $order = order::create([
            'user_id' => $user_id,
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'street_address' => $request->input('street_address'),
            'post_code' => $request->input('post_code'),
            'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
            'payment_method' => $request->input('payment_method'),
            'total_price' => Cart::total(),
            'status' => "onHold"
        ]);

        foreach (Cart::content() as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->qty,
                'price' => $item->price,
            ]);
        }
        Cart::destroy();
        return redirect()->route('home')->with('success', 'Your Order Has Been Submitted Successfully');

    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // $payment = $_SESSION['paymentDetail'];
            $payment = session('paymentDetail');
            $user_id = Auth::user()->id;
            $order = order::create([
                'user_id' => $user_id,
                'phone' => $payment['phone'],
                'country' => $payment['country'],
                'city' => $payment['city'],
                'street_address' => $payment['street_address'],
                'post_code' => $payment['post_code'],
                'discount_id' => $payment['discount_id'] ? $payment['discount_id'] : null,
                'payment_method' => $payment['payment_method'],
                'total_price' => Cart::total(),
                'status' => "onHold"
            ]);

            foreach (Cart::content() as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,
                ]);
            }
            Cart::destroy();
            return redirect()->route('home')->with('success', 'Your Order Has Been Submitted Successfully');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return redirect()->route('home')->with('error', 'Payment is cancelled!');

    }




}


