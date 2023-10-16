<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Orderitem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function checkoutView(){

        return view('pages.check-out');
        if (Auth::user()) {
        }
        return redirect()->back()->with('error', 'You Must Login First!');

    }


    public function pay(Request $request)
    {

        $user = Auth::user();
        $userCart = Cart::where('user_id', $user->id)->get();
        $total = 0;
        $totalPrice = 0;
        foreach ($userCart as $item) {
            $totalPrice +=$item->quantity *$item->Product->price;
            $total += $item->quantity;
        }
        $order = order::create([
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'street_address' => $request->input('street_address'),
            'post_code' => $request->input('post_code'),
            'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
            'payment_method' => $request->input('payment_method'),
            'total_quantity' => $total,
            'total_price' => $totalPrice,
            'status' => "onHold"
        ]);

        foreach ($userCart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->Product->price,
            ]);
            $item->delete();
        }


        return redirect()->route('home')->with('success', 'Your Order Has Been Submitted Successfully');

    }



}


